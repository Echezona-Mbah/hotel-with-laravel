<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addRoom;


class RoomController extends Controller
{
    public function room(){
    $allrooms = addRoom::all();
    return view('room',[
        'allrooms' => $allrooms
    ]);
 }
}
