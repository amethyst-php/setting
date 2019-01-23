<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\User\SettingsController::class,
    'router'     => [
        'as'     => 'setting.',
        'prefix' => '/settings',
    ],
];
