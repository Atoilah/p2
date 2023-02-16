<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilitysRoom extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'facilitys_rooms', 'rooms_id', 'facility_rooms_id');
    }

    public $timestamps = false;
}
