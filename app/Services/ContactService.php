<?php

namespace App\Services;

use Database\Factories\ContactSavingFactory;

class ContactService
{


    public static function store(array $attributes): void
    {
        $factory = new ContactSavingFactory();

        $factory->chooseAndSave('contacts', 'table');

        $factory->chooseAndSave($attributes, 'fields');
    }
}
