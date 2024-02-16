<?php

namespace App\Services;

use App\Models\Contact;
use Database\Factories\DataSavingFactory;

class ContactService
{
    public static function store(array $attributes): void
    {
        $factory = new DataSavingFactory();

        $factory->chooseAndSave(new Contact(), 'model');

        $factory->chooseAndSave($attributes, 'fields');
    }
}
