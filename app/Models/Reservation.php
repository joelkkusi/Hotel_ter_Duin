<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = "reservations";

    public $timestamps = false;

    protected $fillable = [
        'phone_number',
        'check_in_date',
        'check_out_date',
        'amount_adults',
        'amount_children',
        'room_id',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }




}
