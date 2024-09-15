<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Room;

class StepOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('step1');
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

     /*
    public function store(Request $request)
    {
        $data =$request->validate(
            [
            'roomType'=>['required'],
            ]
        );
        $roomType=$request->input('roomType');

        $room_type = RoomType::where('name', $roomType)->first();

     //   $room=Room::where('name', '$room_type');
    // Assuming `name` is a unique field for Room model
    $rooms = Room::where('room_type', $room_type->cost)->first();

    // Check if the room was found
    if ($rooms) {
        // Redirect and pass the room ID to the session
        return redirect('step2_book')->with('rooms', $rooms);
    } else {
        // Handle the case where no room was found
        return redirect()->back()->withErrors('Room not found.');
    }
    }

    */
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


    public function store(Request $request)
{
    // Validate the incoming request
    $data = $request->validate([
        'roomType' => ['required'],
    ]);


    
    // Retrieve the room type from the request
    $roomTypeName = $request->input('roomType');

    // Retrieve the room type by name
    $roomType = RoomType::where('name', $roomTypeName)->first();

    if (!$roomType) {
        return redirect()->back()->withErrors('Room type not found.');
        //return 'room type not found';
        //
    }

    // Retrieve rooms associated with this room type
    // Assuming `room_type_id` is a foreign key in Room model
   // $rooms = Room::where('room_type', $roomType->cost)->get();
   $rooms = Room::where('room_type', $roomTypeName)->get();

   if($roomTypeName=='standard')
   {
        $check=60000;
        session()->put('check', $check);
   }else if($roomTypeName=='deluxe'){

    $check=80000;
    session()->put('check', $check);
   }else if($roomTypeName=='executive'){
    $check=1200000;
    session()->put('check', $check);
   }else{
    echo "try again";
   }


   


    if ($rooms->isNotEmpty()) {
        // Redirect and pass the room data to the session
        return redirect('step2_book' )->with('rooms', $rooms->toArray())->with('check',$check);
    } else {
        return '<script>alert("room not found go back  ")</script>';
        //redirect()->back()->withErrors('No rooms found for this room type.');
    }

    

   
}

}
