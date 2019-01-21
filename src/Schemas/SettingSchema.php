<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\UserManager;
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
            Attributes\LongTextAttribute::make('value'),
            Attributes\BelongsToAttribute::make('user_id')
                ->setRelationName('user')
                ->setRelationManager(UserManager::class)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
