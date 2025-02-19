<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('calendar');
    }


    
    public function getEvents(Request $request)
    {
            $events = Event::whereDate('start', '>=',  Carbon::parse($request->start))
            ->whereDate('end', '<=', Carbon::parse($request->end))
            ->get();

    
        // Return the events as JSON
        return response()->json($events);
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
       $events = $request->validate([
        'eventName' => ['required', 'min:6'],
        'daterange' => ['required'],
       ]);

        $eventDates = explode(' - ', $events['daterange']);

        $startDate = Carbon::parse($eventDates[0])->toDateTimeString();
        $endDate = Carbon::parse($eventDates[1])->toDateTimeString();  
       
        // Create the event
        Event::create([
            'title' => $events['eventName'],
            'start' => $startDate,
            'end' => $endDate,
        ]);

       return redirect()->route('calendar');

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
        $eventData = Event::findOrFail($id);

        return view('edit-event-calendar', compact('eventData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $events = $request->validate([
            'eventName' => ['required', 'min:6'],
            'daterange' => ['required'],
           ]);

        $eventDates = explode(' - ', $events['daterange']);

        $startDate = Carbon::parse($eventDates[0])->toDateTimeString();  
        $endDate = Carbon::parse($eventDates[1])->toDateTimeString();
        
        $eventData = Event::findOrFail($id);

        $eventData->update([
            'title' => $events['eventName'],
            'start' => $startDate,
            'end' => $endDate
        ]);

        return redirect()->route('calendar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        return redirect()->route('calendar');
    }
}
