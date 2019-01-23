<?php

namespace Railken\Amethyst\Tests\Http\User;

use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\SettingFaker;
use Railken\Amethyst\Tests\BaseTest;

class SettingTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = SettingFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'user';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'user.setting';

    public function setUp()
    {
        parent::setUp();

        $this->artisan('passport:install');
        $this->artisan('amethyst:user:install');

        $response = $this->post(route('app.auth.basic'), [
            'username' => 'admin@admin.com',
            'password' => 'vercingetorige',
        ]);

        $response->assertStatus(200);
        $access_token = json_decode($response->getContent())->data->access_token;

        $this->withHeaders([
            'Authorization' => 'Bearer '.$access_token,
        ]);
    }

    protected function getPackageProviders($app)
    {
        return array_merge(parent::getPackageProviders($app), [
            \Railken\Amethyst\Providers\AuthenticationServiceProvider::class,
        ]);
    }
}
