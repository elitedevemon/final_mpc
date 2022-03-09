<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Offline extends Component
{
    public function render()
    {
        return <<<'blade'
            <div wire:offline class="mt-1">
              <small class="text-warning">You are currently offile. Please connect to the internet.</small>
            </div>
        blade;
    }
}
