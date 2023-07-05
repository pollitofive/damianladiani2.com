<?php

namespace App\Http\Livewire;

use App\Traits\UpdateLanguage;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class HeaderContent extends Component
{
//    use UpdateLanguage;
    public function render()
    {
        return view('livewire.header-content');
    }

}
