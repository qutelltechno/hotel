<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::orderBy('id', 'ASC')->get();
        return view('dashboard.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_number' => 'required',
            'room_category_id' => 'required',
            'status' => 'required',
        ]);

        Room::create($validatedData);

        return redirect()->route('rooms.index')
            ->with('success', 'Room created successfully');
    }

    // public function show(Room $room)
    // {
    //     return view('rooms.show', compact('room'));
    // }

    public function edit(Room $room)
    {
        return view('dashboard.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'room_number' => 'required',
            'room_category_id' => 'required',
            'status' => 'required',
        ]);

        $room->update($validatedData);

        return redirect()->route('rooms.index')
            ->with('success', 'Room updated successfully');
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')
            ->with('success', 'Room deleted successfully');
    }

}
