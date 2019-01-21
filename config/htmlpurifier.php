<?php

/**
 * Laravel Purifier configuration file
 * http://htmlpurifier.org/
 * Config options are here: http://htmlpurifier.org/live/configdoc/plain.html
 *
 * To enable, you must add \Kilvin\Http\Middleware\HtmlPurify::class to the App\Http\Kernel $middlware array
 */

return [

    /**
     * General Settings
     */
    'general'  => [
        'Core.Encoding'                 => 'UTF-8', // HIGHLY suggested you do NOT change this
        'Cache.SerializerPath'          => storage_path('app/htmlpurifier')
    ],


    //****************************************** CONFIG ***************************************************************

    // By default, no HTML Purification of CP data
    'CP' =>  false,

    // The frontend pages and actions
    'SITE'   =>  [
        'HTML.Allowed'                  => 'b,strong,i,em,a[href|title]',
        'AutoFormat.RemoveEmpty'        => true,
    ]
];
