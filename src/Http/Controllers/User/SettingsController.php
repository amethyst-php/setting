<?php

namespace Railken\Amethyst\Http\Controllers\User;

use Railken\Amethyst\Api\Http\Controllers\RestManagerController;
use Railken\Amethyst\Api\Http\Controllers\Traits as RestTraits;
use Railken\Amethyst\Managers\SettingManager;

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

        $this->middleware(function ($request, $next) {
            $request->request->remove('user');
            $request->request->remove('user_id');
            $request->request->add([
                'user_id' => $this->getUser()->id,
            ]);
            return $next($request);
        });
    }

    /**
     * Create a new instance for query.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getQuery()
    {
        return $this->getManager()->getRepository()->getQuery()->where('user_id', $this->getUser()->id);
    }
}
