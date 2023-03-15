<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Transaction extends Model
{
    // public function getIncrementing()
    // {
    //     return false;
    // }

    // public function getKeyType()
    // {
    //     return 'string';
    // }

    use AutoNumberTrait;
    
    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    public function getAutoNumberOptions()
    {
        return [
            'kode' => [
                'format' => function () {
                    return 'TRX/' . date('Ymd') . '/?';
                }, // Format kode yang akan digunakan.
                'length' => 3 // Jumlah digit yang akan digunakan sebagai nomor urut
            ]
        ];
    }
    // protected $guarded = ['id'];
    protected $with = ['get_rooms'];

    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
