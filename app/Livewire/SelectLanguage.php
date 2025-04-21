<?php

namespace App\Livewire;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Component;

class SelectLanguage extends Component
{
    public $select;

    public function mount() : void
    {
        $this->select = App::getLocale();
    }
    public function render() : View
    {
        return view('livewire.select-language');
    }

    public function updateLanguage() : Redirector
    {
        Session::put('locale',$this->select);
        return redirect(request()->header('Referer'));
    }
}
