<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function planRoomType()
    {
        return $this->belongsToMany(Plan::class, 'plan_room_type')->withTimestamps();
    }
}
