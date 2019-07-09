<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\SettingFaker;
use Amethyst\Managers\SettingManager;
use Amethyst\Tests\BaseTest;
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
