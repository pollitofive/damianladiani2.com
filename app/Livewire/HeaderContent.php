<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class HeaderContent extends Component
{
//    use UpdateLanguage;
    public function render() : View
    {
        return view('livewire.header-content');
    }

}
