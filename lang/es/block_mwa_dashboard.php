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
$string['no_data'] = 'No hay datos disponibles.';
$string['data_load_failed'] = 'No se pudieron cargar los datos del curso.';
$string['could_not_parse'] = 'No se pudo interpretar la respuesta de Moodle.';
$string['chat_history'] = 'Conversaciones';
$string['chat_new_conv'] = 'Nueva conversación';
$string['chat_context_label'] = 'Contexto';
$string['chat_assistant_name'] = 'Asistente de la clase';
$string['chat_assistant_tip'] = 'Analiza los indicadores de la clase y los perfiles educativos seudonimizados sin enviar identidades reales a servicios externos.';
$string['chat_no_data_sub'] = 'Carga los datos para activar el chat';
$string['chat_data_ready'] = 'Datos cargados, listo para analizar';
$string['chat_input_placeholder'] = 'Pregunta sobre la clase o solicita un análisis...';
$string['chat_no_convs'] = 'No hay conversaciones';
$string['chat_welcome_data'] = 'Hola. Puedo analizar los indicadores agregados y los perfiles educativos seudonimizados de la clase.';
$string['chat_welcome_nodata'] = 'Hola. Carga los datos de la clase para comenzar.';
$string['chat_sug1'] = '¿Qué tamaño tiene el grupo en riesgo esta semana?';
$string['chat_sug2'] = '¿Qué patrones colectivos requieren atención?';
$string['chat_sug3'] = '¿Cómo es el compromiso general de la clase?';
$string['chat_sug4'] = 'Redacta un mensaje general para el grupo con bajo rendimiento';
$string['chat_sug5'] = '¿Cómo han cambiado los indicadores recientemente?';
$string['chat_sug6'] = 'Genera un resumen ejecutivo de la clase';
$string['chat_load_data_first'] = 'No hay datos de clase disponibles todavía.';
$string['chat_load_data_error'] = 'No se pudieron cargar los datos de la clase. Revisa la consola del navegador para identificar el servicio con problemas.';
$string['chat_reload_data'] = 'Actualizar datos de clase';
$string['chat_reloading_data'] = 'Actualizando datos de clase...';
$string['chat_reload_error'] = 'No se pudieron actualizar los datos';
$string['chat_no_reply'] = 'No se pudo generar una respuesta. Inténtalo de nuevo.';
$string['chat_error'] = 'Error al conectar con la IA';
$string['chat_no_data'] = 'Sin datos';
$string['chat_unknown_course'] = 'curso no identificado';
$string['chat_ia_not_configured'] = 'IA no configurada';
$string['chat_ia_not_configured_alert'] = 'La IA no está configurada. Selecciona un proveedor, introduce la clave API, elige un modelo y guarda la configuración.';
$string['chat_lang_instr_pt'] = 'Responde siempre en portugués brasileño, de forma directa y práctica.';
$string['chat_lang_instr_es'] = 'Responde siempre en español, de forma directa y práctica.';
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
