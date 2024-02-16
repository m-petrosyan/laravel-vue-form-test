<?php

namespace Database\Factories;

use App\Models\Contact;

class DataSavingFactory
{
    protected object $model;

    public function save(array $data): void
    {
        $this->model->create($data);
    }

    public function databaseSaver(object $model): void
    {
        $this->model = $model;
    }

    public function chooseAndSave($data, $type): void
    {
        match ($type) {
            'model' => $this->databaseSaver($data),
            'fields' => $this->save($data),
            default => throw new \InvalidArgumentException('Invalid saver type'),
        };
    }

    public function definition()
    {
    }
}
