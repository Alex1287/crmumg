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
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Registros saltados debido a error',
    'LBL_UPDATE_SUCCESSFULLY' => 'Registros actualizados con éxito',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Registros creados con éxito',
    'LBL_STEP_4_TITLE' => 'Paso 4: Importar archivo',
    'LBL_STEP_5_TITLE' => 'Paso 5: Ver resultados',
    'LBL_CUSTOM_ENCLOSURE' => 'Archivos calificados por:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'No ha sido posible realizar la publicación. Ya hay otro mapa de importación publicado con el mismo nombre',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'No ha sido posible quitar la publicación de un mapa cuyo propietario es otro usuario. Usted posee un mapa de importación con el mismo nombre',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'No se ha configurado la importación para este tipo de módulo',
    'LBL_IMPORT_TYPE' => 'Acción de importación',
    'LBL_IMPORT_BUTTON' => 'Crear registros',
    'LBL_UPDATE_BUTTON' => 'Crear y actualizar registros',
    'LBL_CREATE_BUTTON_HELP' => 'Use esta opción para crear nuevos registros. Nota: La filas del archivo importado que contengan valores iguales a IDs existentes en los registros no serán importadas si los valores están mapeados en el campo ID.',
    'LBL_UPDATE_BUTTON_HELP' => 'Usa esta opción para actualizar los registros actuales. Los datos en el archivo de importación serán emparejados con registros actuales basados en los registros ID del archivo de importación.',
    'LBL_ERROR_INVALID_BOOL' => 'Valor no válido (debería ser 1 o 0)',
    'LBL_IMPORT_ERROR' => 'Han ocurrido errores de importación',
    'LBL_ERROR' => 'Error:',
    'LBL_FIELD_NAME' => 'Nombre de campo',
    'LBL_VALUE' => 'Valor',
    'LBL_NONE' => 'Ninguno',
    'LBL_REQUIRED_VALUE' => 'Falta un valor requerido',
    'LBL_ERROR_SYNC_USERS' => 'Valor no válido para sincronizar con Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID ya existente en esta tabla',
    'LBL_ASSIGNED_USER' => 'Si el usuario no existe, utilizar el usuario actual',
    'LBL_ERROR_DELETING_RECORD' => 'Error eliminando registro:',
    'LBL_ERROR_INVALID_ID' => 'El ID proporcionado es demasiado largo para el campo (la longitud máxima es de 36 caracteres)',
    'LBL_ERROR_INVALID_PHONE' => 'Número de teléfono inválido',
    'LBL_ERROR_INVALID_NAME' => 'Cadena demasiado larga para el campo',
    'LBL_ERROR_INVALID_VARCHAR' => 'Cadena demasiado larga para el campo',
    'LBL_ERROR_INVALID_DATE' => 'Fecha inválida',
    'LBL_ERROR_INVALID_DATETIME' => 'Fecha y hora inválidas',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Fecha y hora inválidas',
    'LBL_ERROR_INVALID_TIME' => 'Hora inválida',
    'LBL_ERROR_INVALID_INT' => 'Valor entero inválido',
    'LBL_ERROR_INVALID_NUM' => 'Valor numérico inválido',
    'LBL_ERROR_INVALID_EMAIL' => 'Dirección de e-Mail inválida',
    'LBL_ERROR_INVALID_USER' => 'Nombre o ID de usuario inválido',
    'LBL_ERROR_INVALID_TEAM' => 'Nombre o ID de equipo inválido',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nombre o ID de cuenta inválido',
    'LBL_ERROR_INVALID_RELATE' => 'Campo relacional inválido',
    'LBL_ERROR_INVALID_CURRENCY' => 'Valor de divisa inválido',
    'LBL_ERROR_INVALID_FLOAT' => 'Número en coma flotante inválido',
    'LBL_ERROR_NOT_IN_ENUM' => 'Valor no perteneciente a la lista desplegable. Los valores permitidos son: ',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'El archivo no pudo subirse con éxito. Puede que la opción \'upload_max_filesize\' de su archivo php.ini esté establecida a un valor demasiado pequeño',
    'LBL_MODULE_NAME' => 'Importar',
    'LBL_TRY_AGAIN' => 'Pruebe de nuevo',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'El archivo de importación contiene {0} rows. El número óptimo de filas es {1}. Más filas alentará el proceso de importación. Haga click en OK para continuar. Haga click en CANCELAR para revisar y volver a subir el archivo de importación.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'No puede importar un usuario administrador del sistema',
    'ERR_MULTIPLE' => 'Se han definido múltiples columnas con el mismo nombre de campo',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Faltan campos requeridos:',
    'ERR_SELECT_FILE' => 'Seleccione el archivo a subir',
    'LBL_SELECT_FILE' => 'Seleccione archivo:',
    'LBL_EXTERNAL_SOURCE' => 'una aplicación externa o servicio',
    'LBL_CUSTOM_DELIMITER' => 'Delimitador personalizado:',
    'LBL_DONT_MAP' => '-- No asocie este campo --',
    'LBL_STEP_MODULE' => '¿En qué módulo quiere importar datos?',
    'LBL_STEP_1_TITLE' => 'Paso 1: Seleccione el origen de datos y la acción de importación',
    'LBL_CONFIRM_TITLE' => 'Paso {0}: Confirmar propiedades de la importación',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Las asignaciones personalizadas de Outlook de Microsoft se basan en el archivo de importación está delimitado por comas (.csv). Si el archivo de importación está delimitado, las asignaciones no se aplicará como se esperaba.',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'Publicar',
    'LBL_DELETE' => 'Eliminar',
    'LBL_PUBLISHED_SOURCES' => 'Mapeos publicados:',
    'LBL_UNPUBLISH' => 'Quitar publicación',
    'LBL_NEXT' => 'Siguiente >',
    'LBL_BACK' => '< Anterior',
    'LBL_STEP_2_TITLE' => 'Paso 2: Subida de archivo de importación',
    'LBL_HAS_HEADER' => 'Tiene cabecera:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notas:',
    'LBL_STEP_3_TITLE' => 'Paso 3: Confirme los campos e importe',
    'LBL_STEP_DUP_TITLE' => 'Step {0}: Check for Possible Duplicates',
    'LBL_DATABASE_FIELD' => 'Campo de base de datos',
    'LBL_HEADER_ROW' => 'Fila en cabecera',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Seleccione si la fila superior del archivo de importación es una fila de encabezado que contiene etiquetas de campo.',
    'LBL_ROW' => 'Fila',
    'LBL_CONTACTS_NOTE_1' => 'Debe asociar o apellido o nombre completo',
    'LBL_CONTACTS_NOTE_2' => 'Si asocia Nombre completo, Nombre y Apellido serán ignorados',
    'LBL_CONTACTS_NOTE_3' => 'Si asocia Nombre completo, los datos en Nombre completo se dividirán en Nombre y Apellido cuando se inserten en la base de datos',
    'LBL_CONTACTS_NOTE_4' => 'Los campos que contienen Calle Dirección 2 y Calle Dirección 3 se concatenarán en el campo Dirección Principal cuando se inserten en la base de datos',
    'LBL_ACCOUNTS_NOTE_1' => 'Los campos que contienen Calle Dirección 2 y Calle Dirección 3 se concatenarán en el campo Dirección Principal cuando se inserten en la base de datos',
    'LBL_IMPORT_NOW' => 'Importar ahora',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'No puede abrirse el archivo de importación para lectura',
    'LBL_NO_LINES' => 'No hay líneas en su archivo de importación',
    'LBL_SUCCESS' => 'Éxito:',
    'LBL_LAST_IMPORT_UNDONE' => 'Su última importación a sido deshecha',
    'LBL_NO_IMPORT_TO_UNDO' => 'No hay importación que deshacer',
    'LBL_CREATED_TAB' => 'Registros creados',
    'LBL_DUPLICATE_TAB' => 'Duplicados',
    'LBL_ERROR_TAB' => 'Errores',
    'LBL_IMPORT_MORE' => 'Importar Más',
    'LBL_FINISHED' => 'Volver a',
    'LBL_UNDO_LAST_IMPORT' => 'Deshacer última importación',
    'LBL_DUPLICATES' => 'Se han encontrado duplicados',
    'LNK_DUPLICATE_LIST' => 'Descargar lista de duplicados',
    'LNK_ERROR_LIST' => 'Descargar lista de errores',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Descargar registros que no han podido ser importados',
    'LBL_INDEX_USED' => 'Índices usados:',
    'LBL_INDEX_NOT_USED' => 'Índices no usados:',
    'LBL_IMPORT_FIELDDEF_ID' => 'Número de ID único',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nombre o ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Número de teléfono',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'ID o nombre de equipo',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Cualquier texto',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Cualquier texto',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Cualquier texto',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Hora',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Fecha',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nombre de usuario o ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#039;0&#039; o &#039;1&#039;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'e-Mail',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numérico (sin decimales)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numérico (sin decimales)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numérico (sin decimales)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numérico (decimales permitidos)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numérico (decimales permitidos)',
    'LBL_DATE_FORMAT' => 'Formato de fecha:',
    'LBL_TIME_FORMAT' => 'Formato de hora:',
    'LBL_TIMEZONE' => 'Zona horaria:',
    'LBL_ADD_ROW' => 'Agregar Campo',
    'LBL_REMOVE_ROW' => 'Quitar campo',
    'LBL_DEFAULT_VALUE' => 'Valor predeterminado',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Mostrar opciones avanzadas',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar opciones avanzadas',
    'LBL_SHOW_NOTES' => 'Notas',
    'LBL_HIDE_NOTES' => 'Ocultar nombres',
    'LBL_SAVE_MAPPING_AS' => 'Guardar mapeo como',
    'LBL_IMPORT_COMPLETE' => 'Importación completa',
    'LBL_IMPORT_COMPLETED' => 'Importación completa',
    'LBL_IMPORT_RECORDS' => 'Importando registros',
    'LBL_IMPORT_RECORDS_OF' => 'de',
    'LBL_IMPORT_RECORDS_TO' => 'a',
    'LBL_CURRENCY' => 'Divisa',
    'LBL_CURRENCY_SIG_DIGITS' => 'Dígitos significativos de la divisa',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador de miles',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Nombre de formato de visualización',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Ejemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Saludo, "f" Nombre, "l" Apellido</i>',
    'LBL_CHARSET' => 'Codificación de archivo',
    'LBL_MY_SAVED_HELP' => 'Un mapeo guardado permite especificar una combinación utilizada anteriormente de un origen de datos específico y un conjunto de campos de base de datos para mapear los campos del archivo de importación.<br>Haga clickk en <b>Publicar</b> para dejar disponible el mapeo a otros usuarios.<br>Haga click en <b>Quitar publicación</b> para que el mapeo deje de estar disponible para otros usuarios',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Utilice esta opción para aplicar su configuración de importación preestablecida, incluidas las propiedades de importación, las asignaciones y las configuraciones de verificación duplicadas, a esta importación. <br> <br> Haga clic en <b> Publicar </ b> para que la asignación esté disponible para otras usuarios. <br> Haga clic en <b> Dejar de publicar </ b> para que la asignación no esté disponible para otros usuarios. <br> Haga clic en <b> Eliminar </ b> para eliminar una asignación para todos los usuarios.',
    'LBL_ENCLOSURE_HELP' => '<p>El <b>caracter calificador</b> se utiliza para encerrar el contenido de un campo, incluyendo cualquier caracter que se utilice como delimitador.<br><br>Ejemplo: Si el caracter delimitador es una coma (,) y el calificador es una comilla doble ("),<br><b>"Cupertino, California"</b> se importará en un sólo campo de la aplicación y aparecerá como <b>Cupertino, California</b>.<br>Si no se establece ningún carácter calificador, o éste es un carácter distinto,<br><b>"Cupertino, California"</b> será importado en dos campos adyacentes como <b>"Cupertino</b> y <b>California"</b>.<br><br>Nota: El archivo de importación puede no contener caracteres calificadores.<br>El carácter calificador por defecto para archivos delimitados por coma o tabulador creados en Excel es la comilla doble</p>',
    'LBL_DATABASE_FIELD_HELP' => 'Seleccione un campo de la lista de todos los campos existentes en la base de datos para el módulo',
    'LBL_HEADER_ROW_HELP' => 'Estos son los campos de título de la fila correspondiente a la cabecera del archivo de importación',
    'LBL_DEFAULT_VALUE_HELP' => 'Indique un valor a usar para el campo en el registro creado o actualizado si el campo en el archivo de importación no contiene datos',
    'LBL_ROW_HELP' => 'Estos son los datos de la primera fila del archivo de importación que no pertenece a la cabecera',
    'LBL_SAVE_MAPPING_HELP' => 'Introduzca un nombre para el conjunto de campos de base de datos utilizados arriba para que sean mapeados a los campos del archivo de importación.<br>El conjunto de campos, incluyendo su orden y el origen de datos seleccionado en el Paso 1 de importación, serán guardados durante el intento de importación.<br>El mapeo guardado podrá entonces ser seleccionado en el Paso 1 de importación para una nueva importación',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Especifique la configuración del archivo de importación para asegurarse de que los datos son importados <br> correctamente.  Esta configuración no reemplazará a sus preferencias. Los registros<br> creados o actualizados contendrán la configuración especificada en la página Mi cuenta',
    'LBL_IMPORT_STARTED' => 'Importación iniciada:',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'El registro no ha podido ser actualizado debido un problema de permisos',
    'LBL_DELETE_MAP_CONFIRMATION' => '¿Esta seguro que desea eliminar este mapeo?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Si los datos del archivo de importación se exportaron desde cualquiera de las siguientes fuentes, seleccione cuál.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Seleccione la fuente para aplicar automáticamente asignaciones personalizadas a fin de simplificar el proceso de asignación (siguiente paso).',
    'LBL_EXAMPLE_FILE' => 'Descargar plantilla de archivo de importación',
    'LBL_CONFIRM_IMPORT' => 'Ha seleccionado actualizar los registros durante el proceso de importación. Las actualizaciones realizadas a los registros existentes no se pueden deshacer. Sin embargo, los registros creados durante el proceso de importación pueden deshacerse (eliminarse), si así lo desea. Haga clic en Cancelar para seleccionar crear nuevos registros solamente o haga clic en Aceptar para continuar.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Advertencia: Ya ha seleccionado una asignación personalizada para esta importación, ¿desea continuar?',
    'LBL_SAMPLE_URL_HELP' => 'Descargue un archivo de importación de muestra que contiene una fila de encabezado de los campos del módulo. El archivo se puede usar como una plantilla para crear un archivo de importación que contenga los datos que le gustaría importar.',
    'LBL_AUTO_DETECT_ERROR' => 'El delimitador de campo y el calificador en el archivo de importación no se pudieron detectar. Verifique la configuración en Importar propiedades del archivo.',
    'LBL_MIME_TYPE_ERROR_1' => 'El archivo seleccionado no parece contener una lista delimitada. Por favor, compruebe el tipo de archivo. Recomendamos archivos delimitados por comas (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Para continuar con la importación del archivo seleccionado, haga clic en Aceptar. Para cargar un nuevo archivo, haga clic en Volver a intentarlo.',
    'LBL_FIELD_DELIMETED_HELP' => 'El delimitador de campo especifica el carácter utilizado para separar las columnas de campo.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Seleccione un archivo que contenga datos separados por un delimitador, como un archivo delimitado por comas o por tabuladores. Se recomiendan los archivos del tipo .csv.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Importar el directorio de caché no es modificable.',
    'LBL_ADD_FIELD_HELP' => 'Use esta opción para agregar un valor a un campo en todos los registros creados y / o actualizados. Seleccione el campo y luego ingrese o seleccione un valor para ese campo en la columna Valor predeterminado.',
    'LBL_MISSING_HEADER_ROW' => 'No se encontró fila de encabezado',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SELECT_DS_INSTRUCTION' => '¿Listo para comenzar a importar? Seleccione la fuente de los datos que le gustaría importar.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Seleccione un archivo en su computadora que contenga los datos que le gustaría importar, o descargue la plantilla para tener una ventaja al crear el archivo de importación.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Aquí se muestra cómo aparecen las primeras filas del archivo de importación con las propiedades del archivo detectado. Si se detectó una fila de encabezado, se muestra en la fila superior de la tabla. Vea las propiedades del archivo de importación para realizar cambios en las propiedades detectadas y establecer propiedades adicionales. La actualización de la configuración actualizará los datos que aparecen en la tabla.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'La siguiente tabla contiene todos los campos del módulo que se pueden asignar a los datos en el archivo de importación. Si el archivo contiene una fila de encabezado, las columnas en el archivo se han asignado a los campos coincidentes. Verifique las asignaciones para asegurarse de que sean las que espera y haga los cambios necesarios. Para ayudarlo a verificar las asignaciones, la Fila 1 muestra los datos en el archivo. Asegúrese de asignar a todos los campos obligatorios (señalados con un asterisco).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Para evitar la creación de registros duplicados, seleccione cuál de los campos asignados que desea utilizar para realizar una verificación duplicada mientras se importan los datos. Los valores dentro de los registros existentes en los campos seleccionados se compararán con los datos en el archivo de importación. Si se encuentran datos coincidentes, las filas en el archivo de importación que contiene los datos se mostrarán junto con los resultados de importación (página siguiente). Luego podrá seleccionar cuál de estas filas continuará importando.',
    'LBL_DUP_HELP' => 'Estas son las filas en el archivo de importación que no se importaron porque contienen datos que coinciden con los valores en los registros existentes basados en la verificación duplicada. Los datos que coinciden están resaltados. Para volver a importar estas filas, descargue la lista, realice cambios y haga clic en <b> Importar nuevamente </ b>.',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_OK' => 'Correcto',
    'LBL_ERROR_HELP' => 'Aquí están las filas en el archivo de importación que no fueron importadas debido a errores. Para volver a importar estas filas, descargue la lista, realice cambios y haga clic en <b> Importar de nuevo </ b>',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Para asignar los nuevos registros a un usuario que no sea usted, utilice la columna Valor predeterminado para seleccionar un usuario diferente.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Para asignar los nuevos registros a un usuario que no sea usted, utilice la columna Valor predeterminado para seleccionar un usuario diferente.',
);

global $timedate;
