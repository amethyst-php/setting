<?php

return [
    'table'      => 'amethyst_settings',
    'comment'    => 'Setting',
    'model'      => Railken\Amethyst\Models\Setting::class,
    'schema'     => Railken\Amethyst\Schemas\SettingSchema::class,
    'repository' => Railken\Amethyst\Repositories\SettingRepository::class,
    'serializer' => Railken\Amethyst\Serializers\SettingSerializer::class,
    'validator'  => Railken\Amethyst\Validators\SettingValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\SettingAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\SettingFaker::class,
    'manager'    => Railken\Amethyst\Managers\SettingManager::class,
];
