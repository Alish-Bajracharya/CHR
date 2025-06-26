<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // In your RoomController (or relevant controller)
    public function show($id)
    {
        // Fetch the room details by ID
        $room = Room::findOrFail($id);

        // Fetch similar rooms (e.g., rooms with the same type or category)
        $similarRooms = Room::where('id', '!=', $room->id)
                    ->limit(4)
                    ->get();

        // Pass the room and similar rooms data to the view
        return view('frontend.suiteroom', compact('room', 'similarRooms'));
    }

}
