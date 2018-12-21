<?php
return [

	'cms_folder'        => 'cms',

	'installed_version' => env('KILVIN_INSTALLED_VERSION', null),

	'is_system_on'      => env('KILVIN_IS_SYSTEM_ON', true),

	'disable_events'    => env('KILVIN_DISABLE_EVENTS', false),

    'cp_path'           => trim(env('KILVIN_CP_PATH', 'admin'), '/'),

    'hide_installer'    => true, // Hide installer after installation is complete
];
