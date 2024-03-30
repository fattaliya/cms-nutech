<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Export Handler
    |--------------------------------------------------------------------------
    |
    | This setting controls the export handler that will be used when exporting
    | Excel files. By default, Maatwebsite/Excel will use PhpSpreadsheet as
    | the export handler. You can change this to other options if needed.
    |
    */
    'exports' => [
        'products' => \App\Exports\ProductExport::class,

    'export_handler' => \Maatwebsite\Excel\Excel::class,
],
    /*
    |--------------------------------------------------------------------------
    | Temporary Path
    |--------------------------------------------------------------------------
    |
    | This setting specifies the temporary path where exported Excel files
    | will be stored before being downloaded. You can customize this path
    | according to your server's file system and permissions.
    |
    */

    'temporary_path' => sys_get_temp_dir(),

    /*
    |--------------------------------------------------------------------------
    | Pre-calculate formulas during export
    |--------------------------------------------------------------------------
    |
    | This setting determines whether formulas in the exported Excel files
    | should be pre-calculated or not. By default, formulas are not
    | pre-calculated. You can change this to true if needed.
    |
    */

    'pre_calculate_formulas' => false,

    /*
    |--------------------------------------------------------------------------
    | Export Pre-calculate Formulas Timeout
    |--------------------------------------------------------------------------
    |
    | This setting specifies the timeout (in seconds) for pre-calculating
    | formulas during export. This option is applicable only if the
    | 'pre_calculate_formulas' option is set to true.
    |
    */

    'export_pre_calculate_timeout' => 600,

    /*
    |--------------------------------------------------------------------------
    | CSV Settings
    |--------------------------------------------------------------------------
    |
    | These settings control the CSV export settings such as delimiter,
    | enclosure, and line ending characters. You can customize these
    | settings according to your requirements.
    |
    */

    'csv' => [
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => PHP_EOL,
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Extension Handlers
    |--------------------------------------------------------------------------
    |
    | These settings control the extension handlers for different file types.
    | You can customize these settings to define your own extension handlers
    | or modify the existing ones according to your requirements.
    |
    */

    'extension_handlers' => [
        'xlsx' => \Maatwebsite\Excel\Extensions\Xlsx::class,
        'xls' => \Maatwebsite\Excel\Extensions\Xls::class,
        'csv' => \Maatwebsite\Excel\Extensions\Csv::class,
        'html' => \Maatwebsite\Excel\Extensions\Html::class,
        'ods' => \Maatwebsite\Excel\Extensions\Ods::class,
        'pdf' => \Maatwebsite\Excel\Extensions\Pdf::class,
    ],
];
