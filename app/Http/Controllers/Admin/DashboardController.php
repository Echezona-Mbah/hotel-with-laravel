<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\addRoom;
use App\Mail\WelcomeEmail;


class DashboardController extends Controller
{
    public function AdminDashborad(){
        return view('admin.dashboard');

     }

     public static function totalDeposit(){
        $totalBookings = Booking::count();
        return $totalBookings ;
        // print_r($totalBookings);die();

     }

     public static function sumMoney()
     {
        $totalConfirmedAmount = Booking::where('status','=', 'confirmed')->sum('amount');
        return $totalConfirmedAmount ;

     }

     public static function totalAvailableRooms()
     {
         $totalRooms = addRoom::count();
         $totalBookedRooms = Booking::count();

         $totalAvailableRooms = $totalRooms - $totalBookedRooms;

         return $totalAvailableRooms ;
        }


        public function sendWelcomeEmail()
        {
            $userEmail = 'cclassico998@gmail.com'; // Replace with the user's email address

            Mail::to($userEmail)->send(new WelcomeEmail());
        }




       // mail

        //http://127.0.0.1:8025/


//      <td> looping
//      @foreach ($record->table2 as $relatedRecord)
//          {{ $relatedRecord->field_in_table2 }} <br>
//      @endforeach
//  </td>
}
