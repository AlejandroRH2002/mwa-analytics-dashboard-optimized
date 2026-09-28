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
 * Course navigation callbacks for block_mwa_dashboard.
 *
 * @package    block_mwa_dashboard
 * @copyright  2026 Bruno Porto
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Add the dashboard link to course navigation for users who can view it.
 *
 * @param navigation_node $navigation The course navigation node.
 * @param stdClass $course The course record.
 * @param context_course $context The course context.
 */
function block_mwa_dashboard_extend_navigation_course(navigation_node $navigation, stdClass $course, context_course $context): void {
    if (!has_capability('block/mwa_dashboard:view', $context)) {
        return;
    }

    $url = new moodle_url('/blocks/mwa_dashboard/view.php', ['course' => $course->id]);
    $navigation->add(get_string('pluginname', 'block_mwa_dashboard'), $url,
        navigation_node::TYPE_CUSTOM, null, 'mwa_dashboard_link', new pix_icon('i/report', ''));
}
