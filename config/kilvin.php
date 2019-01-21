<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Installed Version
    |--------------------------------------------------------------------------
    |
    | The currently installed version according to the .env file. Reflects what
    | status the database is in.
    |
    */

	'installed_version' => env('KILVIN_INSTALLED_VERSION', null),

    /*
    |--------------------------------------------------------------------------
    | Is System On?
    |--------------------------------------------------------------------------
    |
    | Whether the Kilvin CMS is turned on. If not, only Admins can view CP.
    | Everyone else will get an offline site message OR a 403 for the CP.
    |
    */

	'is_system_on'      => env('KILVIN_IS_SYSTEM_ON', true),

    /*
    |--------------------------------------------------------------------------
    | Disable Kilvin CMS Events
    |--------------------------------------------------------------------------
    |
    | Ability to disable all Kilvin CMS created Events.
    | @todo - Updated by Administration...but does not affect anything as no events yet.
    |
    */
	'disable_events'    => env('KILVIN_DISABLE_EVENTS', false),

    /*
    |--------------------------------------------------------------------------
    | CP Path - The URI to the Kilvin CMS control panel
    |--------------------------------------------------------------------------
    */
    'cp_path'           => trim(env('KILVIN_CP_PATH', 'admin'), '/'),

    /*
    |--------------------------------------------------------------------------
    | Hide Installer - Disable installer routes after installation is complete
    |--------------------------------------------------------------------------
    */

    'hide_installer'    => true,
];
