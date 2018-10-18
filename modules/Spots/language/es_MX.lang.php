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
    'LBL_ASSIGNED_TO_ID' => 'Asignado a usuario con Id',
    'LBL_ASSIGNED_TO_NAME' => 'Usuario',
    'LBL_SECURITYGROUPS' => 'Grupos de Seguridad',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de Seguridad',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Fecha de creación',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por nombre',
    'LBL_CREATED' => 'Creado por',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Nombre',
    'LBL_CREATED_USER' => 'Creado por usuario',
    'LBL_MODIFIED_USER' => 'Modificado por usuario',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Quitar',
    'LBL_LIST_FORM_TITLE' => 'Tabla Dinámica',
    'LBL_MODULE_NAME' => 'Tabla dinámica',
    'LBL_MODULE_TITLE' => 'Tabla dinámica',
    'LBL_HOMEPAGE_TITLE' => 'Mi Tabla Dinámica',
    'LNK_NEW_RECORD' => 'Crear Tabla Dinámica',
    'LNK_LIST' => 'Ver Tabla Dinámica',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar Tabla Dinámica',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Historial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_NEW_FORM_TITLE' => 'Nueva Tabla Dinámica',
    'LBL_CONFIG' => 'Configuración',
    'LBL_TYPE' => 'Área de Análisis',
    'LNK_SPOT_LIST' => 'Ver Spots',
    'LNK_SPOT_CREATE' => 'Crear Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuración',

    'LBL_AN_UNSUPPORTED_DB' => 'Lo sentimos, Suite Spots actualmente sólo está configurado para MySQL y MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nombre',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Tipo de cuenta',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industria',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'País de Dirección de Facturación',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Responsable',
    'LBL_AN_LEADS_STATUS' => 'Estado',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Origen de clientes potenciales',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nombre de campaña',
    'LBL_AN_LEADS_YEAR' => 'Año',
    'LBL_AN_LEADS_QUARTER' => 'Cuatrimestre',
    'LBL_AN_LEADS_MONTH' => 'Mes',
    'LBL_AN_LEADS_WEEK' => 'Semana',
    'LBL_AN_LEADS_DAY' => 'Día',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nombre de oportunidad',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Responsable',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Tipo de oportunidad',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Origen de clientes potenciales',
    'LBL_AN_SALES_AMOUNT' => 'Cantidad',
    'LBL_AN_SALES_STAGE' => 'Etapa de la venta',
    'LBL_AN_SALES_PROBABILITY' => 'Probabilidad',
    'LBL_AN_SALES_DATE' => 'Fecha de venta',
    'LBL_AN_SALES_QUARTER' => 'Cuatrimestre de ventas',
    'LBL_AN_SALES_MONTH' => 'Mes de ventas',
    'LBL_AN_SALES_WEEK' => 'Semana de ventas',
    'LBL_AN_SALES_DAY' => 'Día de ventas',
    'LBL_AN_SALES_YEAR' => 'Año de ventas',
    'LBL_AN_SALES_CAMPAIGN' => 'Campaña',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_AN_SERVICE_STATE' => 'Estado',
    'LBL_AN_SERVICE_STATUS' => 'Estado',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioridad',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Día de creación',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Semana de creación',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Mes de creación',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Cuatrimestre de creación',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Año de creación',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nombre de contacto',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Responsable',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tipo',
    'LBL_AN_ACTIVITIES_NAME' => 'Nombre',
    'LBL_AN_ACTIVITIES_STATUS' => 'Estado',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Responsable',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Estado',
    'LBL_AN_MARKETING_TYPE' => 'Tipo',
    'LBL_AN_MARKETING_BUDGET' => 'Presupuesto',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Costo Esperado',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Ingresos esperados',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nombre de oportunidad',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Cantidad',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Estado de oportunidad en embudo de ventas',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Oportunidad asignada a',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nombre de la cuenta',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nombre de campaña',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Fecha de actividad',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Tipo de actividad',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Tipo relacionado',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID relacionada',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nombre de oportunidad',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Tipo de oportunidad',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Fuente de oportunidades de clientes potenciales',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Estado de oportunidad en embudo de ventas',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nombre de contacto',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Nombre del elemento',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Tipo de artículo',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Categoría de artículo',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Cantidad de artículos',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Precio de lista de artículo',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Precio de venta de artículo',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Precio de Costo de artículo',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Descuento de precio de artículo',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Importe del Descuento',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Total de artículos',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Gran Total',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Responsable',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Fecha de creación',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Día de Creación',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Semana de creación',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Mes de creación',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Cuatrimestre creado',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Año de creación',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error al determinar la etiqueta de la subzona de pivote',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'Tabla',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Gráfico de barras',
    'LBL_RENDERERS_HEATMAP' =>'Mapa de calor',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Fila de mapa de calor',
    'LBL_RENDERERS_COL_HEATMAP' =>'Columna del mapa de calor',
    'LBL_RENDERERS_LINE_CHART' =>'Gráfico de Líneas',
    'LBL_RENDERERS_BAR_CHART' =>'Gráfico de Barras',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Barra apilada',
    'LBL_RENDERERS_AREA_CHART' =>'Área de gráfica',
    'LBL_RENDERERS_SCATTER_CHART' =>'Gráfico de dispersión',

    'LBL_AGGREGATORS_COUNT' => 'Total',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Contar valores únicos',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'Enumerar valores únicos',
    'LBL_AGGREGATORS_SUM' => 'Suma',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Suma entera',
    'LBL_AGGREGATORS_AVERAGE' => 'Promedio',
    'LBL_AGGREGATORS_MINIMUM' => 'Mínimo',
    'LBL_AGGREGATORS_MAXIMUM' => 'Máximo',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Suma sobre Suma',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => '80% de límite superior de rebote',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => '80% de límite inferior de rebote',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Suma como fracción del total',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Suma como fracción de filas',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Suma como fracción de columnas',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Cuenta como fracción del total',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Cuenta como Fracción de Filas',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Cuenta como Fracción de Columnas',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'Se produjo un error al representar los resultados de la tabla dinámica.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'Se produjo un error al calcular los resultados de la tabla dinámica.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'Se produjo un error al representar la UI de la tabla dinámica.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'Seleccionar Todo',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Seleccione Ninguno',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(demasiados para enumerar)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Filtrar resultados',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Totales',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => 'por',
    'LBL_LOCALE_STRINGS_OK' => 'Aceptar',

    'LBL_ACTIVITIES_CALL'=>'Llamada',
    'LBL_ACTIVITIES_MEETING'=>'Reunión',
    'LBL_ACTIVITIES_TASK'=>'Tarea',
);
