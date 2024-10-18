<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{

    public $breadcrumb;


    public function mount($breadcrumb)
    {
    $this->breadcrumb = $breadcrumb;
    }

    public function render()
    {

        return view('livewire.breadcrumb');
    }
}
