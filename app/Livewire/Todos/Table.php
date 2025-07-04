<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use App\Models\Todo;

class Table extends Component
{
    public $search = '';
    public $completed = [];

    public function mount()
    {
        $this->completed = Todo::pluck('completed', 'id')->toArray();
    }

    public function updatedCompleted($value, $todoId)
    {
        $todo = Todo::find($todoId);
        if ($todo) {
            $todo->completed = $value;
            $todo->save();
        }
    }

    public function delete($todoId)
    {
        $todo = Todo::find($todoId);
        if ($todo) {
            $todo->delete();
            // Update completed array to remove deleted todo
            unset($this->completed[$todoId]);
        }
    }

    public function render()
    {
        $todos = Todo::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->get();

        return view('livewire.todos.table', [
            'todos' => $todos,
            'completed' => $this->completed,
            'search' => $this->search,
        ]);
    }
}
