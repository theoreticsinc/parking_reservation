<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomNumber extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function room_number(){
        //return $this->hasMany(RoomNumber::class, 'room_no')->where('status','Active');
        return $this->hasMany(RoomNumber::class, 'room_type_id');
        //return $this->hasMany(RoomNumber::class);
    }
    
    public function room_type(){
        return $this->belongsTo(RoomType::class,'room_type_id');
    }

    public function last_booking(){
        return $this->hasOne(BookingRoomList::class, 'room_number_id')->latest();
    }


}
