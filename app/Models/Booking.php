<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'add_rooms_id',
        'date1',
        'date2',
        'user_id',
        'amount',


    ];

    protected $table ='bookings';

    protected $primaryKey ='id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
