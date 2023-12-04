<?php

namespace App\Models;

use App\Models\Reservation;
use App\Models\RoomCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;


    protected $fillable = ['room_number', 'room_category_id', 'status'];

    public function roomCategory()
    {
        return $this->belongsTo(RoomCategory::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}