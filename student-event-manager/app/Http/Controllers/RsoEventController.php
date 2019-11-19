<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rso;
use App\Models\Event;
use App\Models\Rso_ev;
use App\Models\Rso_owns_ev;
use DB;
use DateTime;

class RsoEventController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add to: events table
        $request->time = DateTime::createFromFormat("YYYY-MM-DD HH:MM:SS", $request->time);
        Event::create($request->except('rso_id'));
        $newEvent = DB::table('events')->latest('event_id')->first();
        
        // Add to: rso_evs table
        Rso_ev::create([
            'event_id' => $newEvent->event_id
        ]);

        // Add to: rso_owns_ev table
        Rso_owns_ev::create([
            'rso_id' => $request->rso_id,            
            'event_id' => $newEvent->event_id
        ]);

        return redirect('/rso/'. $request->rso_id); //->with('id', $request->rso_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
