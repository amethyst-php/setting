<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class SettingServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        //$this->loadExtraRoutes();
        $this->app->register(\Railken\Amethyst\Providers\UserServiceProvider::class);
    }
}
