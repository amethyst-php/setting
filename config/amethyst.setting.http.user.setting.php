<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\User\SettingsController::class,
    'router'     => [
        'as'     => 'setting.',
        'prefix' => '/settings',
    ],
];
