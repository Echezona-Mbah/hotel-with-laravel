<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addRoom;


class AddRoomController extends Controller
{
    public function addRoom(){
    return view('admin.addRoom');
 }

 public function addRoomStore(Request $request)
 {
 // dd($request->all());

    $request->validate([
        'images'=> 'required|image|mimes:png,jpg,jpeg',
        'room'=> 'required',
        'description'=> 'required',
        'amount'=> 'required',
    ]);
    if($request->images){
        $fileName = time() . '.' . $request->images->getClientOriginalExtension();
        $request->images->move(public_path('image'), $fileName);


    }

    $user = addRoom::create([
        'images' =>  $fileName,
        'room' => $request->input('room'),
        'description' => $request->input('description'),
        'amount' => $request->input('amount'),
    ]);

    return back()->with('success', 'Image uploaded Successfully!')
    ->with('image');

}



}
