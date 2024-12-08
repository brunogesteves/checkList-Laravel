<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = "Guest";
    public $timestamps = false;

    protected $fillable = [

        "firstName",
        "lastName",
        "role",
        "companyName",
        "check",
        "time",
        "invitation",
    ];

    public function scopeSearch($query, $value)
    {
        $query->where("firstName", "like", "%{$value}%")->orWhere("companyName", "like", "%{$value}%");
    }

    public function event()
    {
        return $this->belongsTo(related: Event::class, foreignKey: "id");
    }
}
