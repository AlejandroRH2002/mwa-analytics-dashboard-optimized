<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

/**
 * Spanish language strings for block_mwa_dashboard.
 *
 * @package    block_mwa_dashboard
 * @copyright 2026 Bruno Porto
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Panel de analítica MWA';
$string['group_filter_label'] = 'Grupo';
$string['group_all'] = 'Todos los grupos';
$string['loading_title'] = 'Cargando datos del curso...';
$string['loading_waiting'] = 'Esperando los datos de Moodle';
$string['loading_connecting'] = 'Conectando con Moodle';
$string['loading_retry'] = 'Intentar de nuevo';
$string['hm_default_suggestion'] = 'Usa esta selección para enviar una orientación breve antes de la hora de mayor actividad y reforzar la siguiente actividad.';
$string['no_data'] = 'No hay datos disponibles.';
$string['data_load_failed'] = 'No se pudieron cargar los datos del curso.';
$string['could_not_parse'] = 'No se pudo interpretar la respuesta de Moodle.';
$string['ctxextract_error'] = 'No fue posible extraer el contenido: {$a}';
$string['ctxextract_unsupported_type'] = 'Tipo de archivo no compatible con la extracción de texto: {$a}';
$string['loading'] = 'Cargando...';
$string['msg_ai_generating_short'] = 'Generando...';
$string['msg_bulk_skipped_no_pending'] = '{skipped} estudiantes sin actividades pendientes no recibieron un mensaje.';
$string['msg_no_recipients_with_pending_items'] = 'Ninguno de los estudiantes seleccionados tiene pendientes los elementos marcados.';
$string['msg_sent'] = 'Enviado';
$string['msg_target_required'] = 'Selecciona al menos una actividad o recurso para dar seguimiento.';
$string['no'] = 'No';
$string['pl_tag_daytime'] = 'Diurno';
$string['retry'] = 'Intentar de nuevo';
$string['yes'] = 'Sí';
$string['settings_trackallcourses'] = 'Activar el seguimiento en todos los cursos';
$string['settings_trackallcourses_desc'] = 'Al activar esta opción, el seguimiento de eventos estará habilitado en todos los cursos, independientemente de la configuración del bloque en cada curso.';
$string['capture_global_enabled'] = 'El administrador habilitó el seguimiento de eventos en todo el sitio.';
$string['capture_activate'] = 'Activar seguimiento';
$string['capture_activated'] = 'Se activó el seguimiento de eventos para este curso.';
$string['capture_inactive_notice'] = 'El seguimiento de este curso está inactivo. Pida a quien edita el curso que lo active desde el panel.';
$string['ai_unavailable_message'] = 'Las funciones de IA no están disponibles. Configura una credencial válida en la administración de Moodle.';
$string['student'] = 'Estudiante';
$string['students'] = 'Estudiantes';
$string['students_label'] = 'Estudiantes';
$string['student_loaded'] = 'estudiante cargado';
$string['students_loaded'] = 'estudiantes cargados';
$string['interactions'] = 'Interacciones';
$string['grade'] = 'Calificación';
$string['score'] = 'Puntuación';
$string['risk'] = 'Riesgo';
$string['activity'] = 'Actividad';
$string['type'] = 'Tipo';
$string['accesses'] = 'Accesos';
$string['unique_students'] = 'Estudiantes únicos';
$string['clearfilters'] = 'Limpiar filtros';
$string['search_student'] = 'Buscar estudiante';
$string['message'] = 'Mensaje';
$string['close'] = 'Cerrar';
$string['savechanges'] = 'Guardar cambios';
$string['msg_conn_error'] = 'Error de conexión. Inténtalo de nuevo.';
$string['msg_select_student'] = 'Selecciona un estudiante';
$string['msg_select_student_required'] = 'Selecciona un estudiante antes de continuar.';
$string['settings_admin_page'] = 'Configuración del panel MWA';
$string['settings_admin_page_desc'] = 'Configura la retención de datos y la integración opcional de IA.';
$string['settings_admin_page_button'] = 'Abrir configuración';
$string['settings_ia_test_heading'] = 'Probar conexión de IA';
$string['settings_ia_test_button'] = 'Probar conexión';
$string['settings_ia_test_page_desc'] = 'Esta prueba valida el proveedor, el modelo y la credencial sin enviar datos personales o educativos.';
$string['settings_ia_test_success'] = 'Conexión correcta con {$a->provider} usando el modelo {$a->model}.';
$string['settings_ia_test_failure'] = 'No se pudo conectar con el proveedor.';
$string['ai_configuration_incomplete'] = 'La configuración de IA está incompleta.';
$string['ai_disabled'] = 'La IA está desactivada.';
$string['ai_provider_request_failed'] = 'El proveedor de IA no respondió correctamente.';
$string['ai_provider_empty_response'] = 'El proveedor de IA devolvió una respuesta vacía.';
