<?php

namespace App\Http\Controllers;
use App\Models\OnlineBooking;
use Illuminate\Http\Request;
use App\Mail\Thanks;
use Illuminate\Support\Facades\Mail;


class StepThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           // Retrieve data from the session
           $checkin_date = session('checkin_date');
           $checkout_date = session('checkout_date');
           $room_number = session('room_number');
           $days_stayed = session('days_stayed');
           $number_of_guest = session('number_of_guest');
   
           return view('step3', compact('checkin_date', 'checkout_date', 'room_number', 'days_stayed', 'number_of_guest'));
      
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

        $data = $request->validate([
            'firstname'=> ['required'],
            'lastname'=>['required'],
            'email' => ['required'],
            'hidden-phone' => ['required'],
            'checkin_date' => ['required'],
            'checkout_date' => ['required'],
            'number_of_days' => ['required'],
            'number_of_guest' => ['required'],
            'room_number' => ['required'],
            

        ]);
    
        $new_book=new OnlineBooking;
        $new_book->firstname=$request->input('firstname');
        $new_book->lastname=$request->input('lastname');
        $new_book->email=$request->input('email');
        $new_book->phone_number=$request->input('hidden-phone');
        $new_book->checkin_date=$request->input('checkin_date');
        $new_book->checkout_date=$request->input('checkout_date');
        $new_book->number_of_days=$request->input('number_of_days');
        $new_book->number_of_guest=$request->input('number_of_guest');
        $new_book->room_number=$request->input('room_number');
        $new_book->save();
  
        Mail::to($new_book->email)->send(new Thanks());
        
        return redirect('step3_book')->with('success','Book Created');
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
