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

$string['gr_showing_range'] = 'Mostrando del {start} al {end} de {total} estudiantes';
$string['gr_items_per_page'] = 'Elementos por página:';
$string['tf_export_report_pdf'] = 'Exportar informe (PDF)';

$string['activitycontent_description_intro'] = 'Descripción / introducción';
$string['activitycontent_page_content'] = 'Contenido de la página';
$string['activitycontent_assignment_prompt'] = 'Instrucciones de la tarea';
$string['activitycontent_activity_instructions'] = 'Instrucciones de la actividad';
$string['activitycontent_opens'] = 'Disponible desde';
$string['activitycontent_due_date'] = 'Fecha límite';
$string['activitycontent_cutoff_date'] = 'Fecha límite final (no se aceptan entregas posteriores)';
$string['activitycontent_grade_points'] = 'Calificación: {$a->grade} puntos';
$string['activitycontent_grade_scale'] = 'Calificación mediante escala o resultado';
$string['activitycontent_attempts_unlimited'] = 'Intentos: ILIMITADOS';
$string['activitycontent_attempts_allowed'] = 'Intentos permitidos: {$a}';
$string['activitycontent_attempts_single'] = 'Intentos: 1 (único)';
$string['activitycontent_reopen'] = 'Reapertura';
$string['activitycontent_reopen_none'] = 'No se puede reabrir';
$string['activitycontent_reopen_manual'] = 'Reapertura manual';
$string['activitycontent_reopen_until_pass'] = 'Reabrir hasta alcanzar la calificación aprobatoria';
$string['activitycontent_submission_drafts'] = 'El estudiante debe seleccionar Enviar para finalizar (se permiten borradores)';
$string['activitycontent_group_submission'] = 'Entrega grupal';
$string['activitycontent_authorship_declaration'] = 'Requiere declaración de autoría';
$string['activitycontent_blind_marking'] = 'Calificación anónima';
$string['activitycontent_submission_settings'] = 'Configuración de entrega';
$string['activitycontent_rubric'] = 'Rúbrica';
$string['activitycontent_grading_guide'] = 'Guía de evaluación';
$string['activitycontent_grading_method'] = 'Método de evaluación';
$string['activitycontent_direct_grade'] = 'Calificación directa sin rúbrica';
$string['activitycontent_file_submission'] = 'Entrega de archivo';
$string['activitycontent_online_text'] = 'Texto en línea';
$string['activitycontent_comments'] = 'Comentarios';
$string['activitycontent_accepted_submission_types'] = 'Tipos de entrega aceptados';
$string['activitycontent_forum_description'] = 'Descripción del foro / pregunta orientadora';
$string['activitycontent_forum_general'] = 'Foro estándar';
$string['activitycontent_forum_each_user'] = 'Cada estudiante inicia una discusión';
$string['activitycontent_forum_single'] = 'Una discusión sencilla';
$string['activitycontent_forum_qanda'] = 'Preguntas y respuestas';
$string['activitycontent_type'] = 'Tipo';
$string['activitycontent_points'] = 'Puntos: {$a}';
$string['activitycontent_post_rating'] = 'Calificación de publicaciones';
$string['activitycontent_untitled'] = 'Sin título';
$string['activitycontent_topic'] = 'TEMA';
$string['activitycontent_initial_post'] = 'Publicación inicial';
$string['activitycontent_reply'] = 'Respuesta';
$string['activitycontent_replies'] = 'respuestas';
$string['activitycontent_actual_forum_activity'] = 'Actividad actual del foro';
$string['activitycontent_forum_stats'] = 'Discusiones: {$a->discussions} | Publicaciones: {$a->posts} | Participantes: {$a->participants}';
$string['activitycontent_student_posts_summary'] = 'Publicaciones de estudiantes: resumir los temas tratados';
$string['activitycontent_student_posts_full'] = 'Texto completo de estudiantes para resumir temas, argumentos y áreas de oportunidad';
$string['activitycontent_forum_posts'] = 'Publicaciones del foro';
$string['activitycontent_forum_posts_error'] = 'Error al leer las publicaciones: {$a}';
$string['activitycontent_quiz_intro'] = 'Introducción / instrucciones del cuestionario';
$string['activitycontent_multiple_choice'] = 'Opción múltiple';
$string['activitycontent_numerical'] = 'Numérica';
$string['activitycontent_matching'] = 'Emparejamiento';
$string['activitycontent_introduction'] = 'Introducción';
$string['activitycontent_description'] = 'Descripción';
$string['activitycontent_h5p_content'] = 'Contenido interactivo (H5P)';
$string['activitycontent_label_content'] = 'Contenido de la etiqueta';
$string['activitycontent_wiki_content'] = 'Contenido de la wiki';
$string['activitycontent_form_fields'] = 'Campos del formulario';
$string['activitycontent_answer_options'] = 'Opciones de respuesta';
$string['activitycontent_game_description'] = 'Descripción del juego';
$string['activitycontent_game_glossary_terms'] = 'Términos del juego (del glosario)';
$string['activitycontent_hangman'] = 'Ahorcado';
$string['activitycontent_crossword'] = 'Crucigrama';
$string['activitycontent_millionaire'] = 'Concurso de preguntas';
$string['activitycontent_snakes_ladders'] = 'Serpientes y escaleras';
$string['activitycontent_hidden_picture'] = 'Imagen oculta';
$string['activitycontent_book_quiz'] = 'Cuestionario del libro';
$string['activitycontent_youtube_video'] = 'Video de YouTube';
$string['activitycontent_extracted_content'] = 'CONTENIDO EXTRAÍDO DE ARCHIVOS Y ENLACES';
$string['activitycontent_extraction_unavailable'] = 'No está disponible la extracción de archivos o enlaces: {$a}';
$string['activitycontent_extracted_sections'] = 'Secciones extraídas: {$a->sections}. Total: {$a->count} bloques de contenido';
$string['activitycontent_truncated'] = 'contenido truncado por límite de tamaño';
$string['activitycontent_metrics'] = 'Métricas';
$string['activitycontent_page_metrics'] = 'Palabras: {$a->words} | Tiempo estimado de lectura: {$a->minutes} min';
$string['activitycontent_max_grade'] = 'Calificación máxima: {$a}';
$string['activitycontent_time_limit'] = 'Límite de tiempo: {$a} min';
$string['activitycontent_questions'] = 'Preguntas';
$string['activitycontent_question_diagnostics'] = '{$a->slots} espacios. Identificadores resueltos: {$a->resolved}. No se cargaron preguntas. Errores: {$a->errors}';
$string['activitycontent_attempts'] = 'Intentos: {$a}';
$string['activitycontent_shuffled_answers'] = 'Respuestas en orden aleatorio';
$string['activitycontent_short_answer'] = 'Respuesta corta';
$string['activitycontent_essay'] = 'Ensayo';
$string['activitycontent_gap_select'] = 'Seleccionar palabras faltantes';
$string['activitycontent_calculated'] = 'Calculada';
$string['activitycontent_no_errors'] = 'no se registraron errores';
$string['activitycontent_word_count'] = '{$a} palabras';
$string['activitycontent_settings'] = 'Configuración';
$string['activitycontent_chapters'] = 'Capítulos';
$string['activitycontent_pages'] = 'Páginas';

$string['activitycontent_composition'] = 'Composición de preguntas';
$string['activitycontent_question_composition'] = '{$a->count} preguntas: {$a->types}';
$string['activitycontent_structure'] = 'Estructura';
$string['activitycontent_chapter_count'] = '{$a} capítulos o secciones';
$string['activitycontent_reading_metrics'] = 'Métricas de lectura';
$string['activitycontent_reading_summary'] = 'Palabras estimadas: {$a->words} | Tiempo: aproximadamente {$a->minutes} min';
$string['activitycontent_points_label'] = 'Calificación';
$string['activitycontent_first_page'] = 'Página inicial: {$a}';
$string['activitycontent_required_entries'] = 'Entradas obligatorias: {$a}';
$string['activitycontent_max_entries'] = 'Máximo de entradas: {$a}';
$string['activitycontent_lesson_page_count'] = '{$a} páginas en la lección';
