<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ToDoCalendar extends Component
{
    public $inbox = true;
    public $add_new_todo=false;

    public function toggleContent() {
        $this->inbox = true;
        $this->add_new_todo = false;
    }
    public function toggleanotherContent() {
        $this->add_new_todo = true;
        $this->inbox = false;
    }
    public function render()
    {
        return view('livewire.to-do-calendar');
    }
}
