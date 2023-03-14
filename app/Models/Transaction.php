<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['get_rooms'];

    public function get_rooms(){
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
