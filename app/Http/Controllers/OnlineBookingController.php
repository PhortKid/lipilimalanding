<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineBooking;

class OnlineBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data =$request->validate(
            [
            'firstname'=>['required','min:2'],
            'lastname'=>['required','min:2'],
            'phone_number'=>['required','min:9','max:13'],
            'email'=>['required','email'],
            'booking_date'=>['required'],
            'reservation_type'=>['required'],
            'room_type'=>['required'],
            'number_of_days'=>['required','nullable'],
            'number_of_guest'=>['required'],

            ]
        );

        $new_book=new OnlineBooking;
        $new_book->firstname=$request->input('firstname');
        $new_book->lastname=$request->input('lastname');
        $new_book->phone_number=$request->input('phone_number');
        $new_book->email=$request->input('email');
        $new_book->booking_date=$request->input('booking_date');
        $new_book->room_type=$request->input('room_type');
        $new_book->reservation_type=$request->input('reservation_type');
        $new_book->number_of_days=$request->input('number_of_days');
        $new_book->number_of_guest=$request->input('number_of_guest');
        $new_book->save();
        $success_message="wow";
        return redirect('/start_book')->with('success','New book created')->with('success_message',$success_message);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
