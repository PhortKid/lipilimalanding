<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           // Retrieve rooms from the session
    $rooms = session('rooms', []);

    $check= session('check');

    // Convert array back to collection
    $rooms = collect($rooms);

    return view('step2', compact('rooms','check'));
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
            'checkin_date'=> ['required'],
            'checkout_date'=>['required'],
            'room_number' => ['required'],
            'days_stayed' => ['required'],
            'number_of_guest' => ['required'],
            'total_amount' => ['required'],

        ]);

        /*
        $checkin_date= $request->input('checkin_date');
        $checkout_date= $request->input('checkout_date');
        $room_number= $request->input('room_number');
        $days_stayed= $request->input('days_stayed');
        $number_of_guest= $request->input('number_of_guest');
        */

         // Store the form data in the session
        session()->put('checkin_date', $request->input('checkin_date'));
        session()->put('checkout_date', $request->input('checkout_date'));
        session()->put('room_number', $request->input('room_number'));
        session()->put('days_stayed', $request->input('days_stayed'));
        session()->put('number_of_guest', $request->input('number_of_guest'));
        session()->put('total_amount', $request->input('total_amount'));

        return redirect('step3_book');
    
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
