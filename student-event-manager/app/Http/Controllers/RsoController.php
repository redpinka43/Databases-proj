<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rso;
use App\Models\Event;
use App\Models\Rso_ev;
use App\Models\Rso_owns_ev;
use App\Models\Member_of_rso;
use DB;
use DateTime;

class RsoController extends Controller
{
    /* Resource functions */

    /* ---- */

    // Used for rso_index
    public function index() {
        $rsos = Rso::all();
        return view('home.rso_index')->with('rsos', $rsos);
    }   

	private function isUserEmailIsPartOfUniversity() {}
	
	// Create RSO
	public function create_rso( Request $request)
    {   
		// First, make sure all user emails are from the same university
		if ( !(isUserEmailIsPartOfUniversity($request->email_1, $request->uni_id) && 
			   isUserEmailIsPartOfUniversity($request->email_2, $request->uni_id) && 
			   isUserEmailIsPartOfUniversity($request->email_3, $request->uni_id) && 
			   isUserEmailIsPartOfUniversity($request->email_4, $request->uni_id) && 
			   isUserEmailIsPartOfUniversity($request->email_5, $request->uni_id) ) {
			
			return redirect('/create-rso-try-again');
		}

		// Create new RSO, with the user as the admin
		Rso::create([
			'admin_id' => $request->user->id,
			'name' => $request->name,
			'description' => $request->description
		]);

        return redirect('/rso'); 
    }

    // Used for rso_page
    public function getEvents($id, Request $request){

        $rso_events = DB::table('events')
                      ->join('rso_owns_evs', 'events.event_id', '=', 'rso_owns_evs.event_id')
                      ->where('rso_id', $id)
                      ->get();

        // Check if user_id is the admin_id for this rso ($id)
        $user_id = $request->user()->id;
        $isAdmin = (Rso::where('rso_id', $id)->first()->admin_id == $user_id);

        // Check if user is a member of this page's RSO
        $isMember = DB::table('member_of_rsos')
                    ->where('id', $user_id)
                    ->where('rso_id', $id)
                    ->exists();

        // Return package of rso name, and all events of that rso
        return view('home.rso_page')->with('rso_name', Rso::where('rso_id', $id)->first()->name)
                               ->with('rso_desc', Rso::where('rso_id', $id)->first()->description)
                               ->with('rso_events', $rso_events)
                               ->with('rso_id', $id)
                               ->with('isAdmin', $isAdmin)
                               ->with('isMember', $isMember);
    }   

    // Used for rso_event
    public function getSingleEvent($rso_id, $event_id, Request $request) {

        /*$event = DB::table('events')
                 ->join('users', 'events.event_id', '=', 'users.id')
                 ->where('event_id', $event_id)->first();
        */
        $event = DB::table('events')
                 ->where('event_id', $event_id)->first();
        

        /*$comments = DB::table('comments')
                    ->where('event_id', $event_id)
                    // ->where('id', $request->user()->id)
                    ->get(); */

        // Return package of rso name, and all events of that rso
        return view('home.rso_event')->with('event', $event)
                                     ->with('rso_id', $rso_id);
                                     // ->with('comments', $comments);
    }   
    
    // Used for rso/{id}/create-event
    public function viewCreateEventPage($rso_id) {
  
        $rso = Rso::where('rso_id', $rso_id)->first();
        return view('home.rso_create_event')->with('rso', $rso);
    }

    // Join RSO
    public function joinRso($rso_id, Request $request) {
    
        // Add entry to member_of_rsos
        Rso_owns_ev::create([
            'id' => $request->user()->id,            
            'rso_id' => $rso_id
        ]);
        return getEvents($rso_id, $request);
    }
}
