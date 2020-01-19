<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Setting                 newEntity()
 * @method \Amethyst\Schemas\SettingSchema          getSchema()
 * @method \Amethyst\Repositories\SettingRepository getRepository()
 * @method \Amethyst\Serializers\SettingSerializer  getSerializer()
 * @method \Amethyst\Validators\SettingValidator    getValidator()
 * @method \Amethyst\Authorizers\SettingAuthorizer  getAuthorizer()
 */
class SettingManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.setting.data.setting';
}
