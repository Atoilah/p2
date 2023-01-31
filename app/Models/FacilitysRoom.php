<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilitysRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'rooms_id',
        'facilitys_room_id',
    ];

    public $timestamps = false;
}
