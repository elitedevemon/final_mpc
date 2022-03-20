<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class TermsOfUse extends Component
{
    public function render()
    {
        return view('livewire.frontend.terms-of-use')
              ->layout('layouts.master');
    }
}
