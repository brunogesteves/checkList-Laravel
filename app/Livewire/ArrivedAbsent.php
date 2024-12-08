<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Attributes\On;
use Livewire\Component;

class ArrivedAbsent extends Component
{
    #[On('hasCheckbeenUpdated')]
    public function render()
    {
        $arrivedGuests = count(Guest::where("check", true)->get());

        $absentGuests = count(Guest::all()) - $arrivedGuests;

        // dd($absentGuests, count($arrivedGuests));

        return view('livewire.arrived-absent', [
            "arrived" => $arrivedGuests,
            "absent" => $absentGuests,
        ]);
    }
}
