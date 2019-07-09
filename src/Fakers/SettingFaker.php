<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class SettingFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('key', $faker->name);
        $bag->set('value', $faker->text);
        $bag->set('user', UserFaker::make()->parameters()->toArray());

        return $bag;
    }
}
