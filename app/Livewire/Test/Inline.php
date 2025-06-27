<?php

namespace App\Livewire\Test;

use Livewire\Component;

class Inline extends Component
{
    public function delete()
    {

    }
    
    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- Nothing in the world is as soft and yielding as water. --}}
            <button
                type="button"
                wire:click="delete"
                wire:confirm="are you sure you want to delete"
            >
                delete
            </button>
        </div>
        HTML;
    }
}
