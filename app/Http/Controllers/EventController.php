<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::orderBy('id_event', 'desc')->paginate(10);
        return view('event.index', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'event_location' => 'required',
            'event_date' => 'required',
            'event_budget' => 'required',
            'event_category' => 'required',
        ]);

        Event::create([
            'event_location' => $request->event_location,
            'event_date' => $request->event_date,
            'event_budget' => $request->event_budget,
            'event_category' => $request->event_category,
        ]);

        return redirect()->route('event.index')->with('success', 'Berhasil menambah event baru!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $this->validate($request, [
            'event_location' => 'required',
            'event_date' => 'required',
            'event_budget' => 'required',
            'event_category' => 'required'
        ]);

        $event->event_location = $request->event_location;
        $event->event_date = $request->event_date;
        $event->event_budget = $request->event_budget;
        $event->event_category = $request->event_category;
        $event->save();

        return redirect()->route('event.index')->with('success', 'Berhasil mengubah data event!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('event.index')->with('success', 'Berhasil menghapus data event!');
    }
}
