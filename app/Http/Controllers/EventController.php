<?php

namespace App\Http\Controllers;

use Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::latest()->paginate(5);
        return view('event.index', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'event_date' => 'required',
            'event_location' => 'required',
            'event_description' => 'required',
        ]);

        $this->validate($request, [
            'event_name' => 'required',
            'event_date' => 'required',
            'event_location' => 'required',
            'event_description' => 'required',
        ]);

        Event::create([
            'event_name' => $request->event_name,
            'event_date' => $request->event_date,
            'event_location' => $request->event_location,
            'event_description' => $request->event_description,
        ]);
    return redirect()->route('event.index')->with('success', 'Berhasil menambah event baru!');

    }

    public function edit($id){
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $this->validate($request, [
            'event_name' => 'required',
            'event_date' => 'required',
            'event_location' => 'required',
            'event_description' => 'required',
        ]);
    }
}
