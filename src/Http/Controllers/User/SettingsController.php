<?php

namespace Amethyst\Http\Controllers\User;

use Amethyst\Core\Http\Controllers\RestManagerController;
use Amethyst\Core\Http\Controllers\Traits as RestTraits;
use Amethyst\Managers\SettingManager;

class SettingsController extends RestManagerController
{
    use RestTraits\RestCommonTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = SettingManager::class;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
        parent::__construct();
    }
}
