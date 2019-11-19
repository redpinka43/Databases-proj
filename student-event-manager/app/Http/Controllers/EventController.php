<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rso;
use App\Models\Event;
use App\Models\Rso_ev;
use App\Models\Rso_owns_ev;
use App\Models\Member_of_rso;
use App\Models\Super_admin;
use App\Models\Public_ev;
use App\Models\Priavte_ev;
use DB;
use DateTime;
class EventController extends Controller
{
    public function store(Request $request)
    {
        // Add to: events table
        $request->time = DateTime::createFromFormat("YYYY-MM-DD HH:MM:SS", $request->time);
        Event::create($request->except('isPublic'));
        $newEvent = DB::table('events')->latest('event_id')->first();
        
        if ($request->isPublic == 'true') {$request->isPublic = true;} 
        else {$request->isPublic = false;}       

        if ($request->isPublic) {
            // Add to: Public table
            Public_ev::create([
                'event_id' => $newEvent->event_id
            ]);
            return redirect('/public-events');
        }
        else {
            // Add to: Private table
            Private_ev::create([
                'event_id' => $newEvent->event_id
            ]);
            return redirect('/private-events');
        }
        

        /*
        // Add to: rso_owns_ev table
        Rso_owns_ev::create([
            'rso_id' => $request->rso_id,            
            'event_id' => $newEvent->event_id
        ]);*/

        return redirect('/home');
    }


    // Used for public_events page
    public function getPublicEvents(Request $request){

        $public_events = DB::table('events')
                      ->join('public_evs', 'events.event_id', '=', 'public_evs.event_id')
                      ->get();

        // Check if user_id is the admin_id for this rso ($id)
        $user_id = $request->user()->id;
        $isSuperAdmin = Super_admin::where('id', $user_id)
                        ->exists();

        // Return package of rso name, and all events of that rso
        return view('uni_events.public_events_page')->with('public_events', $public_events)
                                                    ->with('isSuperAdmin', $isSuperAdmin);
    }   

    // Used for displaying a single public event
    public function getSinglePublicEvent($event_id) {

        $event = DB::table('events')
                      ->where('event_id', $event_id)->first();

        return view('uni_events.public_event')->with('event', $event);
                                     // ->with('rso_id', $rso_id);
    }   


}
