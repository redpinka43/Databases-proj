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

class RsoLeaveController extends Controller
{
    // Member leaves
    public function store(Request $request) 
    {    
        DB::table('member_of_rsos')
                    ->where('id', $request->user()->id)
                    ->where('rso_id', $request->rso_id)
                    ->delete();

        return redirect('/rso/'. $request->rso_id); //->with('id', $request->rso_id);
    }
}
