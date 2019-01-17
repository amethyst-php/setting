<?php

return [
    'enabled'     => true,
    'controller'  => Railken\Amethyst\Http\Controllers\Admin\SettingsController::class,
    'router'      => [
        'as'        => 'setting.',
        'prefix'    => '/settings',
    ],
];
