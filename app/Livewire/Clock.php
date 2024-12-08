<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Clock extends Component
{
    public function render()
    {
        return view('livewire.clock', [
            "time" =>  Carbon::now("America/Sao_Paulo")->format('H:i:s')



        ]);
    }
}
