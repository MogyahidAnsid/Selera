<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Selera')]
class Index extends Component
{

    public function render()
    {
        return view('livewire.index');
    }
}
