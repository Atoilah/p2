<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityRoom extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'rooms_id',
    //     'facilitys_room_id',
    // ];

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'facilitys_rooms', 'rooms_id', 'facility_rooms_id');
    }


}
