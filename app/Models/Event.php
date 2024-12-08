<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "Event";
    protected $fillable = ["name", "invitationCode", "id"];

    public function guest()
    {
        return $this->belongsToMany(related: Guest::class, foreignPivotKey: "invitationId");
    }
}
