<?php

return [
    'table'      => 'setting',
    'comment'    => 'Setting',
    'model'      => Amethyst\Models\Setting::class,
    'schema'     => Amethyst\Schemas\SettingSchema::class,
    'repository' => Amethyst\Repositories\SettingRepository::class,
    'serializer' => Amethyst\Serializers\SettingSerializer::class,
    'validator'  => Amethyst\Validators\SettingValidator::class,
    'authorizer' => Amethyst\Authorizers\SettingAuthorizer::class,
    'faker'      => Amethyst\Fakers\SettingFaker::class,
    'manager'    => Amethyst\Managers\SettingManager::class,
];
