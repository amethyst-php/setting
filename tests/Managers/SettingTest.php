<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\SettingFaker;
use Railken\Amethyst\Managers\SettingManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class SettingTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = SettingManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = SettingFaker::class;
}
