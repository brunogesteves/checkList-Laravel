<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Guest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Livewire\WithPagination;

class GuestsTable extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $search = "";
    public $invitationId = "";

    public function updateGuest($id)
    {
        $guest = Guest::find($id);


        $guest->update([
            "check"  => !$guest->check,
            "time" => Carbon::now("America/Sao_Paulo")->format('H:i:s')
        ]);
        $this->dispatch("hasCheckbeenUpdated");
    }
    public function render()
    {


        return view('livewire.guests-table', [

            "events" => Event::all(),
            "guests" => Guest::search($this->search)
                ->when($this->invitationId !== "", function ($query) {
                    $query->where("invitation", $this->invitationId);
                })->simplePaginate($this->perPage),


        ]);
    }
}
