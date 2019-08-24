<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\UserManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class SettingSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('key')
                ->setRequired(true),
            Attributes\ObjectAttribute::make('value'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
