<?php

namespace Amethyst\Http\Controllers\User;

use Amethyst\Api\Http\Controllers\RestManagerController;
use Amethyst\Api\Http\Controllers\Traits as RestTraits;
use Amethyst\Managers\SettingManager;
use Illuminate\Http\Request;

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

    public function bootstrap(Request $request)
    {
        $request->request->remove('user');
        $request->request->remove('user_id');
        $request->request->add([
            'user_id' => $this->getUser()->id,
        ]);

        parent::bootstrap($request);
    }

    /**
     * Create a new instance for query.
     */
    public function getQuery()
    {
        return $this->getManager()->getRepository()->getQuery()->where('user_id', $this->getUser()->id);
    }
}
