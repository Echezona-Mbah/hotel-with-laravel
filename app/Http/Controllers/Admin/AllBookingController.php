<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;


class AllBookingController extends Controller
{
    //
    public function AllBooking(){

        $Booking = Booking::all();
        // print_r($Booking);die();
        return view('admin.allBooking',[
            'Booking' => $Booking
        ]);

    }


    public function updateStatus(Request $request, $id)
    {
        $record = Booking::findOrFail($id);
        // Your logic to update the status here, for example:
            if ($record->status == 'pending') {
                $record->status = 'confirmed';
                $record->save();
                return redirect()->back()->with('success', 'Good Job, Fund mark is done!');
            } else {
                $record->status = 'pending';
                $record->save();
                return response()->json(['success' => 'Good Job, Fund mark is done', 'new_status' => $record->status]);
            }
    }
}
