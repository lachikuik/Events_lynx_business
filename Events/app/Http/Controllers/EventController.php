<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index()
    {
        // PAr pitié si c'est une liste ou un array, appelle les variables avec s à la fin :)
        $events = Event::all();
        return Inertia::render('home', [
            'events'=>$events
        ]);


        // return response()->json($event);
    }

    public function UpdateEvent(Request $request, $event_id)
    {
        try {
            $event = Event::findOrFail($event_id);
            $event->update($request->all());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function DeleteEvent(Request $request, $event_id)
    {
        try {
            $event = Event::findOrFail($event_id);
            $event->delete();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function Store(Request $request)
    {
        $event = Event::create($request->validate([
        'name' => ['required', 'max:500'],
        'startDate' => ['required'],
        'endDate' => ['required'],
        ]));

        // return to_route('/');
    }

    public function FindEvent($id){
        $event = Event::find($id);
        return response()->json($event, 200);
    }
    
    public function scopeSearch(){
        $startDate = '2020-09-20';
        $endDate ='2024-10-30';
        $query = Event::where('startDate', '>=', $startDate)
        ->where('endDate',  '<=', $endDate)
        ->get();
        return Inertia::render('home', [
            'events'=>$query
        ]);
    }
}
