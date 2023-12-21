<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reserveSlots()
    {
        return $this->hasMany(Reserve_slot::class);
    }
    
    public function roomType()
    {
        return $this->belongsTo(Room_type::class);
    }

}