<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\SettingsController::class,
    'router'     => [
        'as'     => 'setting.',
        'prefix' => '/settings',
    ],
];
