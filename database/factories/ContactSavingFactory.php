<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends Factory<Contact>
 */
class ContactSavingFactory extends Factory
{
    protected string $table;

    public function save(array $data): void
    {
        DB::table($this->table)->insert($data);
    }

    public function databaseSaver(string $table): void
    {
        $this->table = $table;
    }

    public function chooseAndSave($data, $type): void
    {
        match ($type) {
            'table' => $this->databaseSaver($data),
            'fields' => $this->save($data),
            default => throw new \InvalidArgumentException('Invalid saver type'),
        };
    }

    public function definition()
    {
    }
}
