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

class RsoJoinController extends Controller
{
    // Member joins
    public function store(Request $request)
    {   
        Member_of_rso::create([
            'id' => $request->user()->id,
            'rso_id' => $request->rso_id
        ]);        

        return redirect('/rso/'. $request->rso_id); //->with('id', $request->rso_id);
    }
}
