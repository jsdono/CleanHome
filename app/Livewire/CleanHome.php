<?php

namespace App\Livewire;

use Livewire\Component;

class CleanHome extends Component
{
    public function render()
    {
        return view('livewire.clean-home')->layout('layouts.base');
    }
}
