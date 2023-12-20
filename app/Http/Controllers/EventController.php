<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * indexA
     *
     * @return void
     */
    public function index()
    {
        $event = Event::latest('id_event')->paginate(10);
        return view('event.index', compact('event'));
    }

    public function create()
    {
        return view('event.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'location' => 'required',
            'date' => 'required',
            'budget' => 'required',
            'category' => 'required'
        ]);

        Event::create([
            'location' => $request->location,
            'date' => $request->date,
            'budget' => $request->budget,
            'category' => $request->category,
        ]);

        return redirect()->route('event.index')->with('success', 'Berhasil menambah event baru!');
    }

    public function edit($id_event)
    {
        $event = Event::findOrFail($id_event);
        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $id_event)
    {
        $event = Event::findOrFail($id_event);

        $this->validate($request, [
            'location' => 'required',
            'date' => 'required',
            'budget' => 'required',
            'category' => 'required'
        ]);

        $event->location = $request->location;
        $event->date = $request->date;
        $event->budget = $request->budget;
        $event->category = $request->category;
        $event->save();

        return redirect()->route('event.index')->with('success', 'Berhasil mengubah data event!');
    }

    public function destroy($id_event)
    {
        $event = Event::findOrFail($id_event);
        $event->delete();

        return redirect()->route('event.index')->with('success', 'Berhasil menghapus data event!');
    }
}
