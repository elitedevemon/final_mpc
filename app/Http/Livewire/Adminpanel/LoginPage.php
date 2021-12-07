<?php

namespace App\Http\Livewire\Adminpanel;

use Livewire\Component;

class LoginPage extends Component
{
    /**
     * Public variables
     *
     * @var public
     */
    public $username, $password, $remember;
    public function render()
    {
        return view('livewire.adminpanel.login-page');
    }
}
