<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class SettingAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'setting.create',
        Tokens::PERMISSION_UPDATE => 'setting.update',
        Tokens::PERMISSION_SHOW   => 'setting.show',
        Tokens::PERMISSION_REMOVE => 'setting.remove',
    ];
}
