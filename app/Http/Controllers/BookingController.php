<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\addRoom;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function book(){
        return view('booking');
     }

    public function store(Request $request)
     {
        $request->validate([
            'date1'=> 'required',
            'date2'=> 'required',
        ]);
        $user = Auth::user()->id;
        $addRoom = addRoom::where('id','=',request('id'))->first();
        $amount = $addRoom->amount;
        $booking = Booking::create([
            'date1' => $request->input('date1'),
            'date2' => $request->input('date2'),
            'add_rooms_id' => request('id'),
            'user_id' => $user,
            'amount' => $amount,
        ]);

        // dd($booking);die();
        // return redirect()->route('pay');
         return redirect('/form');
    }
}
