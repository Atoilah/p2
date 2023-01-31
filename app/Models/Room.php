<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function facility_rooms()
    {
        return $this->belongsToMany(FacilityRoom::class, 'facilitys_rooms',  'rooms_id', 'facility_rooms_id');
    }
}
