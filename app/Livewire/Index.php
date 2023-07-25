<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Index extends Component
{
    public $title = "Selera";
    public function render()
    {
        return view('livewire.index');
    }
}
