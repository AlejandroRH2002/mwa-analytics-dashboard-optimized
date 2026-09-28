<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Full-page view for the MWA Analytics Dashboard.
 *
 * @package    block_mwa_dashboard
 * @copyright  2026 Bruno Porto
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use block_mwa_dashboard\output\dashboard_page;
use block_mwa_dashboard\api;

require_once('../../config.php');

$courseid = required_param('course', PARAM_INT);
require_login($courseid);

$context = context_course::instance($courseid);
require_capability('block/mwa_dashboard:view', $context);

$PAGE->set_context($context);
$PAGE->set_url('/blocks/mwa_dashboard/view.php', ['course' => $courseid]);
$PAGE->set_title(get_string('pluginname', 'block_mwa_dashboard'));
$PAGE->set_heading(get_string('pluginname', 'block_mwa_dashboard'));
$PAGE->set_pagelayout('embedded');
$PAGE->set_cacheable(false);

$trackallcourses = api::track_all_courses_enabled();
$canmanagecapture = has_capability('block/mwa_dashboard:managecapture', $context);
$activatecapture = optional_param('activatecapture', 0, PARAM_BOOL);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $activatecapture) {
    require_sesskey();
    require_capability('block/mwa_dashboard:managecapture', $context);

    if (!$trackallcourses) {
        api::update_course_capture($courseid, true);
    }

    $messagekey = $trackallcourses ? 'capture_global_enabled' : 'capture_activated';
    redirect($PAGE->url, get_string($messagekey, 'block_mwa_dashboard'), null,
        $trackallcourses ? \core\output\notification::NOTIFY_INFO : \core\output\notification::NOTIFY_SUCCESS);
}

$dashboard = new dashboard_page($courseid);
$dashboard->require_assets($PAGE);

$PAGE->requires->js_call_amd('block_mwa_dashboard/dashboard', 'init', [
    ['courseid' => $courseid],
]);

$renderer = $PAGE->get_renderer('block_mwa_dashboard');

echo $OUTPUT->header();
if ($trackallcourses) {
    echo $OUTPUT->notification(get_string('capture_global_enabled', 'block_mwa_dashboard'),
        \core\output\notification::NOTIFY_INFO);
} else if ($canmanagecapture && !api::course_capture_enabled($courseid)) {
    $activationform = html_writer::start_tag('form', [
        'method' => 'post',
        'action' => $PAGE->url->out(false),
    ]) . html_writer::empty_tag('input', [
        'type' => 'hidden',
        'name' => 'sesskey',
        'value' => sesskey(),
    ]) . html_writer::tag('button', get_string('capture_activate', 'block_mwa_dashboard'), [
        'type' => 'submit',
        'name' => 'activatecapture',
        'value' => '1',
        'class' => 'btn btn-primary',
    ]) . html_writer::end_tag('form');
    echo html_writer::div($activationform, 'mb-3');
}
echo $renderer->render_dashboard_page($dashboard);
echo $OUTPUT->footer();
