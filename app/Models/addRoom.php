<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addRoom extends Model
{
    use HasFactory;

    protected $fillable = [

        'images',
        'room',
        'description',
        'amount',
    ];
}
