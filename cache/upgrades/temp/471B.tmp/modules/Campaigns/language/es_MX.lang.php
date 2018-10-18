<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_FROM_ADDR' => 'Dirección de remitente',
    'LBL_REPLY_ADDR' => 'Dirección de "Responder a": ',
    'LBL_REPLY_NAME' => 'Nombre de "Responder a" :',

    'LBL_MODULE_NAME' => 'Campañas',
    'LBL_MODULE_TITLE' => 'Campañas : Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de campañas',
    'LBL_LIST_FORM_TITLE' => 'Lista de campañas',
    'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Lista de boletines de noticias',
    'LBL_CAMPAIGN_NAME' => 'Nombre:',
    'LBL_CAMPAIGN' => 'Campaña:',
    'LBL_NAME' => 'Nombre:',
    'LBL_INVITEE' => 'Contactos',
    'LBL_LIST_CAMPAIGN_NAME' => 'Campañe',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TYPE' => 'Tipo',
    'LBL_LIST_START_DATE' => 'Fecha de inicio',
    'LBL_LIST_END_DATE' => 'Fecha final',
    'LBL_DATE_ENTERED' => 'Fecha de alta',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_MODIFIED' => 'Modificada por:',
    'LBL_CREATED' => 'Creada por:',
    'LBL_TEAM' => 'Equipo:',
    'LBL_ASSIGNED_TO' => 'Asignado a:',
    'LBL_ASSIGNED_TO_ID' => 'Asignada a:',
    'LBL_ASSIGNED_TO_NAME' => 'Asignada a:',
    'LBL_CAMPAIGN_START_DATE' => 'Fecha inicial:',
    'LBL_CAMPAIGN_END_DATE' => 'Fecha final:',
    'LBL_CAMPAIGN_STATUS' => 'Estado:',
    'LBL_CAMPAIGN_BUDGET' => 'Presupuesto:',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'Coste esperado:',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'Coste real:',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Ingresos esperados:',
    'LBL_CAMPAIGN_IMPRESSIONS' => 'Impresiones:',
    'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Coste por impresión:',
    'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Coste por click en banner:',
    'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Oportunidades ganadas:',
    'LBL_CAMPAIGN_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN_OBJECTIVE' => 'Objetivo:',
    'LBL_CAMPAIGN_CONTENT' => 'Descripción:',
    'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "Campaña '{0}' está Inactiva. Tiene que cambiar el estado como 'Activa'.",
    'LNK_NEW_CAMPAIGN' => 'Crear campaña (clásica)',
    'LNL_NEW_CAMPAIGN_WIZARD' => 'Crear campaña',
    'LNK_CAMPAIGN_LIST' => 'Campañas',
    'LNK_IMPORT_CAMPAIGNS' => 'Importar Campañas',
	'LNK_NEW_PROSPECT' => 'Crear público objetivo',
    'LNK_PROSPECT_LIST' => 'Ver Públicos objetivo',
    'LNK_NEW_PROSPECT_LIST' => 'Crear lista de público objetivo',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de público objetivo',
    'LBL_MODIFIED_BY' => 'Modificada por:',
    'LBL_CREATED_BY' => 'Creada por:',
    'LBL_TRACKER_TITLE' => 'Datos de seguimiento ',
    'LBL_TRACKER_KEY' => 'Seguimiento:',
    'LBL_TRACKER_URL' => 'URL de seguimiento:',
    'LBL_TRACKER_TEXT' => 'Texto de enlace de seguimiento:',
    'LBL_TRACKER_COUNT' => 'Contador de seguimiento:',
    'LBL_REFER_URL' => 'URL de redirección de seguimiento:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campañas',
    'LBL_NEW_FORM_TITLE' => 'Nueva campaña',
    'LBL_TRACKED_URLS' => 'URLs de seguimiento',
    'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'URLs de seguimiento',
    'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Lista de público objetivo',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial', // PR 4606
    'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Marketing por e-Mail',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Nueva plantilla de e-Mail',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Plantillas de e-Mail',
    'LBL_TRACK_BUTTON_TITLE' => 'Ver estado',
    'LBL_TRACK_BUTTON_LABEL' => 'Ver estado',
    'LBL_QUEUE_BUTTON_TITLE' => 'Enviar e-Mails',
    'LBL_QUEUE_BUTTON_LABEL' => 'Enviar e-Mails',
    'LBL_TEST_BUTTON_TITLE' => 'Enviar prueba',
    'LBL_TEST_BUTTON_LABEL' => 'Enviar prueba',
    'LBL_COPY_AND_PASTE_CODE' => 'O copiar y pegar el siguiente código HTML en una página existente',
    'LBL_CHARSET_NOTICE' => 'NOTA: Por favor, asegúrese de que la página que contiene el formulario web-to-lead tiene las siguientes líneas en la sección &lt;head&gt;:',

    'LBL_TODETAIL_BUTTON_TITLE' => 'Ver detalles',
    'LBL_TODETAIL_BUTTON_LABEL' => 'Ver detalles',

    'LBL_DEFAULT' => 'Todas las lista de público objetivo',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Cola de mensajes',

    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Mensaje Enviado/Intentado',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Mensajes rebotados, otras causas',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Mensajes rebotados, e-Mail inválido',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'Enlace',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Mensaje visto',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Descartados',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Clientes potenciales creados',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contactos creados',

    //error messages.
    'ERR_SENDING_NOW' => 'Los mensajes están siendo enviados, por favor inténtelo de nuevo más tarde',

    'LBL_TRACK_ROI_BUTTON_LABEL' => 'Ver ROI',
    'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Eliminar entradas de pruebas',
    'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Eliminar entradas de pruebas',
    'LBL_TRACK_DELETE_CONFIRM' => 'Esta opción eliminará las entradas del registro creadas por el juego de pruebas. ¿Desea continuar?',
    'ERR_NO_MAILBOX' => "Los siguientes mensajes de marketing no tienen una cuenta de e-Mail asociada.<BR>Por favor, corrija este problema antes de continuar",
    'LBL_LIST_TO_ACTIVITY' => 'Ver estado',
    'LBL_CURRENCY' => 'Divisa:',
    'LBL_TARGETED' => 'Público objetivo destino',
    'LBL_TOTAL_TARGETED' => 'Total público objetivo',
    'LBL_CAMPAIGN_FREQUENCY' => 'Frecuencia:',
    'LBL_NEWSLETTERS' => 'Boletines de noticias',
    'LBL_NEWSLETTER' => 'Boletín de noticias',
    'LBL_SURVEY' => 'Encuesta',
    'LBL_NEWSLETTER_FORENTRY' => 'NewsLetter',
    'LBL_CREATE_NEWSLETTER' => 'Nuevo boletín de noticias',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_INBOUND_EMAIL_SETTINGS' => 'Opciones del e-Mail entrante',
    'LBL_INBOUND_EMAIL_SETTINGS_TITLE' => 'Configuración de correo electrónico entrante (info)',
    'LBL_INBOUND_EMAIL_CREATE' => 'Crear correo electrónico entrante',
    'LBL_INBOUND_EMAIL_CREATE_TITLE' => 'Crear buzón de entrada (info)',
    'LBL_STATUS_TEXT' => 'Estado:',
    'LBL_FROM_MAILBOX_NAME' => 'Nombre de la cuenta de gestión de rebotes:',
    'LBL_FROM_MAILBOX_TITLE' => 'Cuenta de correo electrónico para la gestión de rebotes:',
    'LBL_OUTBOUND_MAILBOX_NAME' => 'Cuenta de correo electrónico saliente:',
    'LBL_FROM_NAME' => 'Nombre del Remitente: ',
    'LBL_START_DATE_TIME' => 'Programar la fecha y hora: ',
    'LBL_DATE_START' => 'Fecha de inicio',
    'LBL_TIME_START' => 'Hora de inicio',
    'LBL_TEMPLATE' => 'Plantilla de e-Mail',
    'LBL_TEMPLATE_FIELD' => 'Plantilla de e-Mail',
    'LBL_SUBJECT' => 'Asunto: ',
    'LBL_WIDTH' => 'Ancho predeterminado:',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Crear',
    'LBL_MESSAGE_FOR' => 'Enviar este mensaje a:',
    'LBL_FINISH' => 'Finalizar',
    'LBL_ALL_PROSPECT_LISTS' => 'Todas las listas de público objetivo en la campaña',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editar',
    'LBL_EMAIL_SETUP_WIZARD' => 'Configuración de e-Mail',
    'LBL_DIAGNOSTIC_WIZARD' => 'Diagnósticos',
    'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Boletines de noticias suscritos',
    'LBL_UNSUBSCRIBED_HEADER' => 'Boletines de noticias disponibles/sin suscripción',
    'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Al mover el boletín de noticias a la lista de boletines de noticias disponibles/sin suscripción agregará el contacto a la lista de sin suscripción para este boletín de noticias.  El contacto no será eliminado de la lista de suscripción o lista de público objetivo original ',
    'LBL_FILTER_CHART_BY' => 'Filtrar gráfico por:',
    'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Administrar suscripciones',
    'LBL_MARK_AS_SENT' => 'Marcar como enviado',
    'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Las entradas han sido procesadas',
    //newsletter wizard
    'LBL_EDIT_TRACKER_NAME' => 'Nombre de seguimiento',
    'LBL_EDIT_TRACKER_URL' => 'URL de seguimiento',
    'LBL_EDIT_OPT_OUT_' => '¿Enlace para rehusar?',
    'LBL_EDIT_OPT_OUT' => 'Enlace para rehusar:',
    'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Lista de bajas:',
    'LBL_SUBSCRIPTION_LIST_NAME' => 'Lista de Suscripciónes:',
    'LBL_TEST_LIST_NAME' => 'Lista de pruebas:',
    'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'No suscripción',
    'LBL_SUBSCRIPTION_TYPE_NAME' => 'Suscripción',
    'LBL_TEST_TYPE_NAME' => 'Pruebas',
    'LBL_UNSUBSCRIPTION_LIST' => 'Lista de no suscripción',
    'LBL_SUBSCRIPTION_LIST' => 'Lista de suscripción',
    'LBL_MRKT_NAME' => 'Nombre de Email Marketing',
    'LBL_MRKT_NAME_FIELD' => 'Nombre de Email Marketing:',
    'LBL_TEST_LIST' => 'Lista de pruebas',
    'LBL_WIZARD_HEADER_MESSAGE' => 'Rellene los campos requeridos para ayudar a identificar la campaña',
    'LBL_WIZARD_BUDGET_MESSAGE' => 'Introduce el presupuesto para calcular el retorno de la inversión (ROI)',
    'LBL_WIZARD_TARGET_MESSAGE1' => 'Seleccione o cree una lista de público objetivo para utilizar con su campaña.  Esta lista se usará para enviar e-Mails con sus mensajes de marketing',
    'LBL_WIZARD_TARGET_MESSAGE2' => 'Crear nueva lista de público objetivo:',
    'LBL_WIZARD_TRACKER_MESSAGE' => 'Defina aquí un URL de seguimiento para utilizar con esta campaña. Debe introducir tanto el nombre como el URL para crear el seguimiento',
    'LBL_HOME_START_MESSAGE' => '¿Qué tipo de campaña te gustaría crear?',
    'LBL_WIZARD_LAST_STEP_MESSAGE' => '             Ya está en el último paso',
    'LBL_WIZARD_FIRST_STEP_MESSAGE' => '             Ya está en el primer paso',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Encabezado de la campaña',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Presupuesto de la campaña',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'URLs de seguimiento de la campaña',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Información de suscripción',
    'LBL_WIZ_MARKETING_TITLE' => 'e-Mail de marketing',
    'LBL_WIZ_SENDMAIL_TITLE' => 'Seleccione registro de email a enviar',
    'LBL_WIZ_EMAILTPL_TITLE' => 'Seleccione la plantilla de correo electrónico',
    'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Resumen',
    'LBL_NAVIGATION_MENU_GEN1' => 'Encabezado de la campaña',
    'LBL_NAVIGATION_MENU_GEN2' => 'Presupuesto',
    'LBL_NAVIGATION_MENU_TRACKERS' => 'Seguimientos',
    'LBL_NAVIGATION_MENU_MARKETING' => 'Mercadotecnia',
    'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Enviar e-Mail',
    'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Suscripciones',
    'LBL_NAVIGATION_MENU_SUMMARY' => 'Resumen',
    'LBL_NAVIGATION_MENU_SEND_EMAIL_AND_SUMMARY' => 'Enviar correo electrónico y ver Resumen',
    'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo suscripción para esta campaña.<br>  Esta lista de público objetivo se usará para enviar los e-Mails de esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía',
    'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo no suscripción para esta campaña.  <br>Esta lista de público objetivo contendrá los nombres de las personas que han decidido no participar en su campaña y no deberían ser contactados por e-Mail. <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía',
    'LBL_TEST_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo pruebas para esta campaña.  <br>Esta lista de público objetivo se usará para enviar e-Mails de pruebas para esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía',
    'LBL_ADD_TRACKER' => 'Nuevo seguimiento',
    'LBL_CREATE_TARGET' => 'Crear',
    'LBL_SELECT_TARGET' => 'Usar lista de público objetivo existente',
    'LBL_REMOVE' => 'Quitar', // PR 5451
    'LBL_START' => 'Iniciar',
    'LBL_TOTAL_ENTRIES' => 'Entradas',
    'LBL_CONFIRM_SEND_SAVE' => 'Está a punto de terminar y proceder con la página de envío de e-Mail de campaña.  ¿Desea guardar los cambios y continuar?',
    'LBL_NEWSLETTER WIZARD_TITLE' => 'Boletín de noticias: ',
    'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editar boletín de noticias: ',
    'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editar campaña: ',
    'LBL_SEND_AS_TEST' => 'Enviar marketing por e-Mail como pruebas',
    'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Guardar',
    'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Siguiente',
    'LBL_TARGET_LISTS' => 'Listas de público objetivo',
    'LBL_NO_SUBS_ENTRIES_WARNING' => 'No puede enviar un e-Mail de marketing hasta que su lista de suscriptores tenga al menos una entrada.  Puede rellenar su lista tras finalizar',
    'LBL_NO_TARGET_ENTRIES_WARNING' => 'No puede enviar un e-Mail de marketing hasta que su lista de público objetivo tenga al menos una entrada.  Puede rellenar su lista tras finalizar',
    'LBL_NO_TARGETS_WARNING' => 'No puede enviar un e-Mail de marketing hasta que su campaña tenga al menos una lista de público objetivo',
    'LBL_NO_TARGET_ENTRIES_WARNING_NON_EMAIL' => 'No tiene objetivos relacionados en su lista(s) de público objetivo seleccionadas para esta campaña.  Puede rellenar la lista después de terminar.',
    'LBL_NO_TARGETS_WARNING_NON_EMAIL' => 'No ha seleccionado la lista de público objetivo para esta campaña.',
    'LBL_NONE' => 'ninguna creada',
    'LBL_CAMPAIGN_WIZARD' => 'Asistente de campaña',
    'LBL_EMAIL' => 'e-Mail',
    'LBL_OTHER_TYPE_CAMPAIGN' => 'Campaña no basada en e-Mail',
    'LBL_TARGET_LIST' => 'Lista de publico objetivo',
    'LBL_TARGET_TYPE' => 'Tipo de Lista de Público Objetivo:',
    'LBL_TARGET_NAME' => 'Nombre de lista de público objetivo',
    'LBL_NUMBER_OF_TARGET' => 'Número de público objetivo',
    'LBL_EMAILS_SCHEDULED' => 'e-Mails planeados',
    'LBL_TEST_EMAILS_SENT' => 'Probar e-Mails enviados',
    'LBL_USERS_CANNOT_OPTOUT' => 'Los usuarios de sistema no pueden optar por no recibir e-Mails',
    'LBL_ELECTED_TO_OPTOUT' => 'Ha elegido optar por no recibir e-Mails',
    'LBL_COPY_OF' => 'Copia de ',
    'LBL_SAVED_SEARCH' => 'Búsquedas y diseños',
    //email setup wizard
    'LBL_WIZ_FROM_NAME' => 'Nombre del remitente:',
    'LBL_WIZ_FROM_ADDRESS' => 'Dirección del remitente:',
    'LBL_EMAILS_PER_RUN' => 'Número de e-Mails enviados por lote:',
    'LBL_CUSTOM_LOCATION' => 'Definida por el usuario',
    'LBL_DEFAULT_LOCATION' => 'Predeterminado',
    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Sólo se permiten valores enteros para el número de e-Mails enviados por lote',
    'LBL_LOCATION_TRACK' => 'Localización de los archivos de seguimiento de la campaña (como campaign_tracker.php):',
    'LBL_MAIL_SENDTYPE' => 'Agente de transferencia de e-Mail (MTA):',
    'LBL_MAIL_SMTPAUTH_REQ' => '¿Utilizar autenticación SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Contraseña SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP',
    'LBL_MAIL_SMTPUSER' => 'Usuario SMTP',
    'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Configuración de e-Mail para campañas',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor de site_url en config.php',
    'LBL_NOTIFY_TITLE' => 'Opciones de notificación por e-Mail',
    'LBL_MASS_MAILING_TITLE' => 'Opciones de envío de e-Mail masivo',
    'LBL_SERVER_TYPE' => 'Protocolo del servidor de e-Mail',
    'LBL_SERVER_URL' => 'Dirección del servidor de e-Mail',
    'LBL_LOGIN' => 'Nombre de usuario',
    'LBL_PORT' => 'Puerto del servidor de e-Mail',
    'LBL_MAILBOX_NAME' => 'Nombre de cuenta de e-Mail:',
    'LBL_PASSWORD' => 'Contraseña',
    'LBL_MAILBOX_DEFAULT' => 'BANDEJA DE ENTRADA',
    'LBL_MAILBOX' => 'Carpeta en seguimiento',
    'LBL_NAVIGATION_MENU_SETUP' => 'Configuración de e-Mail',
    'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nueva cuenta de e-Mail',
    'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Se han detectado cuentas de e-Mail con gestión de rebote de e-Mail.  No necesita crear una nueva, pero puede hacerlo a continuación si aun así lo desea',
    'LBL_MAILBOX_CHECK_WIZ_BAD' => 'No se ha detectado ninguna cuenta de e-Mail con gestión de rebote de e-Mail. Por favor, cree una nueva a continuación',
    'LBL_CAMP_MESSAGE_COPY' => 'Guardar copias de los mensajes de la campaña:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => '¿Desea guardar copias completas de <bold>CADA</bold> mensaje de e-Mail enviado durante todas las campañas?  <bold>Se recomienda el valor predeterminado de no hacerlo</bold>.  Si elige no, sólo se guardará la plantilla enviada y las variables para recrear el mensaje individual',
    'LBL_YES' => 'Sí',
    'LBL_NO' => 'No',
    'LBL_EMAIL_SETUP_DESC' => 'Rellene el siguiente formulario para modificar su configuración del sistema de forma que puedan enviarse los e-Mails de la campaña',
    'LBL_CREATE_MAILBOX' => 'Crear nueva cuenta de e-Mail',
    'LBL_SSL_DESC' => 'Si su servidor de e-Mail soporta conexiones de socket seguras, habilitando esto se forzará las conexiones SSL cuando se importe e-Mail',
    'LBL_SSL' => 'Usar SSL',
    //campaign diagnostics
    'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campaña puede no tener el comportamiento deseado y sus emails puede que no sean enviados por las siguientes razones:',
    'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnósticos de campaña',
    'LBL_MAILBOX_CHECK1_GOOD' => ' Cuentas de e-Mail con gestión de rebote detectadas:',
    'LBL_MAILBOX_CHECK1_BAD' => 'No se han detectado cuentas de e-Mail con gestión de rebote',
    'LBL_MAILBOX_CHECK2_GOOD' => ' Las opciones de e-Mail han sido configuradas:',
    'LBL_MAILBOX_CHECK2_BAD' => 'Por favor, configure la dirección de e-Mail de su sistema. Las opciones de e-Mail no han sido configuradas',
    'LBL_SCHEDULER_CHECK_GOOD' => 'Se han detectado planeaciones',
    'LBL_SCHEDULER_CHECK_BAD' => 'No se han detectado planeaciones',
    'LBL_SCHEDULER_CHECK1_BAD' => 'No se ha configurado el planeador para procesar los e-Mails rebotados de campaña',
    'LBL_SCHEDULER_CHECK2_BAD' => 'No se ha configurado el planeador para procesar los e-Mails de campaña',
    'LBL_SCHEDULER_NAME' => 'Planeador',
    'LBL_SCHEDULER_STATUS' => 'Estado',
    'LBL_EMAIL_SETUP_WIZ' => 'Lanzar configuración de e-Mail',
    'LBL_SCHEDULER_LINK' => 'ir a la pantalla de administración del planeador',
    'LBL_TO_WIZARD_TITLE' => 'Lanzar asistentes',
    'LBL_EDIT_EXISTING' => 'Editar campaña',
    'LBL_SEND_EMAIL' => 'Enviar correo a una hora programada',
    'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Crear nuevo e-Mail de marketing',
    'LBL_NON_ADMIN_ERROR_MSG' => 'Por favor, notifíqueselo a su administrador del sistema para que corrija este problema',
    'LBL_EMAIL_COMPONENTS' => 'Componentes de e-Mail',
    'LBL_SCHEDULER_COMPONENTS' => 'Componentes del planeador',
    'LBL_RECHECK_BTN' => 'Comprobar de nuevo',
    //web to lead wizard titles
    'LBL_DEFINE_LEAD_HEADER' => 'Cabecera del formulario:',
    'LBL_LEAD_DEFAULT_HEADER' => 'Formulario Web a cliente potencial para la campaña',
    'LBL_DEFINE_LEAD_SUBMIT' => 'Etiqueta del botón de envío:',
    'LBL_DEFINE_LEAD_POST_URL' => 'URL de envío (post):',
    'LBL_EDIT_LEAD_POST_URL' => '¿Editar URL de envío (post)?',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL de redirección:',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campaña relacionada:',
    'LBL_DEFAULT_LEAD_SUBMIT' => 'Enviar',
    'LBL_WEB_TO_LEAD' => 'Crear formulario para registro de persona',
    'LBL_LEAD_FOOTER' => 'Pie del formulario:',
    'NTC_NO_LEGENDS' => 'Ninguno',
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro que desea eliminar este registro?',
    'LBL_DESCRIPTION_LEAD_FORM' => 'Descripción del formulario:',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Al enviar este formulario se creará un cliente potencial vinculado con la campaña',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Por favor, descargue su formulario Web a cliente potencial',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Formulario para creación de clientes potenciales desde una web',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Por favor, indique todos los campos requeridos',
    'LBL_NOT_VALID_EMAIL_ADDRESS' => 'No es una dirección de e-Mail válido',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Por favor, seleccione los campos requeridos:',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Retorno de inversión de la campaña',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Respuesta a la campaña por actividad del destinatario',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Excluídos por dirección de e-Mail o dominio',

    'LBL_AMOUNT_IN' => 'Cantidad en',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => 'Ingresos',
    'LBL_ROI_CHART_INVESTMENT' => 'Inversión',
    'LBL_ROI_CHART_BUDGET' => 'Presupuesto',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Ingresos esperados',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'Campañas principales',
    'LBL_TOP_CAMPAIGNS_NAME' => 'Nombre de campaña',
    'LBL_TOP_CAMPAIGNS_REVENUE' => 'Ingresos',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'Campañas con Mejor Rendimiento por Ingreso',
    'LBL_LEADS' => 'Clientes potenciales',
    'LBL_CONTACTS' => 'Contactos',
    'LBL_ACCOUNTS' => 'Cuentas',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'LBL_LOG_ENTRIES' => 'Entradas del registro',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'e-Mail inválido',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Error de envío',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',

    'LBL_LEAD_FORM_WIZARD' => 'Asistente de formulario de cliente potencial',
    'LBL_CAMPAIGN_INFORMATION' => 'Información de campaña',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_EDIT_BUTTON' => 'Lanzar asistentes',
    'LBL_YEAR' => "Año",
    'LBL_DAY' => "Día",
    'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    'LBL_INVALID' => 'Inválido' /*for 508 compliance fix*/,
    'LBL_VALID' => 'Válido' /*for 508 compliance fix*/,
    'LBL_ALERT' => 'Alerta' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Lanzar asistentes' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Quitar' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Ver',
    'ERR_NO_OPTS_SAVED' => 'No se han guardado valores óptimos con su cuenta de correo entrante.',
    'ERR_REVIEW_EMAIL_SETTINGS' => 'Por favor revise la configuración del correo entrante.',
    'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} los clientes potenciales que fueron creados a través de esta campaña han sido eliminados desde su creación.',
    'LBL_FROM_NAME_HELP' => 'Este será el nombre que verá el destinatario',
    'LBL_FROM_ADDR_HELP' => 'Este será el remitente que verá el destinatario',
    'LBL_REPLY_TO_NAME_HELP' => 'Este será el nombre al que el destinatario responderá',
    'LBL_REPLY_TO_ADDR_HELP' => 'Este será el nombre al que el destinatario responderá',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Ver cuentas de correo electrónico saliente',
    'LBL_CREATE_EMAIL_TEMPLATE_BTN' => 'Guardar',
    'LBL_SAVE_EMAIL_TEMPLATE_BTN' => 'Guardar',
    'LBL_SEARCH_TARGET_LIST' => 'Filtro de lista de prospectos',
    'LBL_INSERT_URL_REF' => 'Insertar referencia a URL',
    'LBL_INSERT_TRACKER_URL' => 'Insertar URL de seguimiento:',
    'LBL_CREATE_TRACKER_BTN' => 'Nuevo seguimiento',
    'LBL_INSERT_TRACKER_BTN' => 'Insertar rastreador',
    'LBL_EDIT_TRACKER_BTN' => 'Editar rastreador',
    'LBL_CREATE_TRACKER_URL' => 'Crear',
    'LBL_INSERT' => 'Insertar',
    'LBL_INSERT_VARIABLE' => 'Insertar:',
    'LBL_INSERT_VARIABLE_BTN' => 'Insertar variable',
    'LBL_INSERT_VARIABLE_SUBJECT_BTN' => 'Insertar variable',
    'LBL_EMAIL_VARIABLES' => 'Variables de correo electrónico',
    'LBL_SAVE' => 'Guardar',
    'ERR_REQUIRED_TRACKER_NAME' => 'Nombre de rastreador es requerido',
    'ERR_REQUIRED_TRACKER_URL' => 'URL de rastreador es requerida',
    'LBL_UPDATE_TEMPLATE' => 'Actualizar plantilla',
    'LBL_ATTACHMENTS' => 'Adjuntos',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Falta campo requerido',
    'LBL_SUGAR_DOCUMENT' => 'Documento',
    'LBL_EMAIL_ATTACHMENT' => 'Adjunto de e-Mail',
    'LBL_PROCESS_BOUNCED_EMAILS' => 'Procesar correos electrónicos rebotados',
    'LBL_PROCESS_CAMPAIGN_EMAILS' => 'Procesar correos electrónicos de campaña',
    'LBL_SENDER_DETAILS' => 'Detalles de enviador',
    'LBL_CHOOSE_TEMPLATES' => 'Escoja una plantilla',
    'LBL_CHOOSE_TARGETS' => 'Elija Prospectos',
    'LBL_CAMPAIGN_DETAILS_AND_CONDITIONS' => 'Detalles de campaña y condiciones',
    'LBL_OPEN_IN_NEW_WINDOW' => 'Abrir en una nueva ventana...',
    'LBL_CREATE_MARKETING_RECORD' => 'Siguiente',
    'LBL_NO_TEMPLATE_SELECTED' => 'No hay seleccionada una plantilla de correo',
    'LBL_SELECT_TEMPLATE' => 'Plantillas',
    'LBL_WIZARD_ADD_TARGET' => 'Agrega una lista de público objetivo existente:',
    'LBL_CLICK_TO_ADD' => 'Haga click en el cuadro de item de la plantilla.',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_EMPTY_SUBJECT' => 'El asunto del correo está en blanco. ¿Está seguro que quiere continuar?',
    'LBL_OVERWRITE_QUESTION' => '¿Está seguro que desea eliminar la plantilla?',
    'LBL_SELECT_EMAIL_TRACKER' => 'Por favor elija un rastreador de correo.',
    'LBL_STEP_UNAVAILABLE' => 'Para continuar por favor de click al botón Siguiente.',
    'LBL_STEP_INFO_CAMPAIGN_HEADER' => 'Por favor ingrese el nombre de la campaña y el estatus seleccionado',
    'LBL_STEP_INFO_TARGET_LIST_NEWSLETTER' => 'Cada campaña requiere listas de destino para suscripción, desuscripción y prueba. Cuando no se especifica una lista, se creará una lista de destino vacío sobre guardar.',
    'LBL_STEP_INFO_TARGET_LIST_NON_NEWSLETTER' => 'Seleccione sus listas de prospectos para esta campaña.',
    'LBL_STEP_INFO_EMAIL_TEMPLATE' => 'Por favor, seleccione una plantilla de correo electrónico o crear una nueva plantilla de correo electrónico.',
    'LBL_STEP_INFO_MARKETING' => 'Seleccione las cuentas de correo electrónico.',
    'LBL_NO_SUBJECT' => 'La plantilla de correo electrónico seleccionado no tiene Asunto',
    'LBL_NO_HTML_BODY_CONTENTS' => 'La plantilla de correo electrónico seleccionado no tiene un cuerpo html',
    'LBL_NO_SELECTED_TEMPLATE' => 'Plantilla No Seleccionada!',
    'LBL_NO_BODY_CONTENTS' => 'La plantilla de correo electrónico seleccionado no tiene un cuerpo html',
    'LBL_ERROR_ON_MARKETING' => 'Faltan campo(s) obligatorios',

    'LBL_NO_MARKETING_NAME' => 'Nombre del registro de comercialización está vacía',
    'LBL_NO_INBOUND_EMAIL_SELECTED' => 'Cuenta de correo electrónico entrantes en de marketing no seleccionado',
    'LBL_NO_DATE_START' => 'Registro de marketing no tiene una fecha de inicio',
    'LBL_NO_FROM_NAME' => 'Nombre del Remitente está vacío',
    'LBL_NO_FROM_ADDR_OR_INVALID' => 'Dirección del Remitente inválida',
    'LBL_NEWSLETTER_TITLE' => ' Una campaña de boletín de noticias es un tipo de campaña de correo electrónico, que permite enviar un correo electrónico a una lista de destino.',
    'LBL_EMAIL_TITLE' => 'Una campaña de boletín de noticias es un tipo de campaña de correo electrónico, que permite enviar un correo electrónico a una lista de destino.',
    'LBL_NON_EMAIL_TITLE' => 'Una campaña que no es de correo es una campaña que no envía un correo electrónico.',
    'LBL_TEMPLATE_SAVING' => 'Por favor espere, guardando la plantilla...',
    'LBL_TEMPLATE_SAVED' => 'Cliente guardado exitosamente.',
    'LBL_PLEASE_SELECT_OPTION' => 'Por favor, seleccione la opción que prefieres',
    'LBL_OPTION_SELECT_TEMPLATE' => 'Seleccionar una plantilla existente',
    'LBL_OPTION_CREATE_TEMPLATE' => 'Crear una plantilla Nueva',
    'LBL_OPTION_COPY_TEMPLATE' => 'Copiar una plantilla existente',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_CAMPAIGN_CHECKLIST' => 'Checklist de campaña',

    'LBL_EMAIL_MARKETING' => 'Marketing por e-Mail',
    'LBL_EMAIL_SUCCESS' => 'Éxito',
    'LBL_QUEUE_ITEMS' => 'Elementos en la fila',
    'LBL_PROSPECT_LISTS' => 'Lista de prospectos',
	'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE' => 'Respuestas de Encuestas',
	'LBL_CAMPAIGN_SURVEY' => "Encuesta",
);
