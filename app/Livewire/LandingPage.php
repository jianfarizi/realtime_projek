<?php

namespace App\Livewire;
use App\Models\Pendaki;
use Livewire\Component;

class LandingPage extends Component
{
    public function render()
    {
        $pendaki = Pendaki::count();
        return view('livewire.landing-page',[
            'pendaki' => Pendaki::count()
        ]);
    }
}
