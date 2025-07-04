<?php

namespace App\Services;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;

class TodoService
{
    public function getAll(): Collection
    {
        return Todo::all();
    }

    public function getById($id): ?Todo
    {
        return Todo::find($id);
    }

    public function create(array $data): Todo
    {
        return Todo::create($data);
    }

    public function update($id, array $data): ?Todo
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->update($data);
        }
        return $todo;
    }

    public function delete($id): bool
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->delete();
            return true;
        }
        return false;
    }
}
