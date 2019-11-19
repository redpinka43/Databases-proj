<?php

use Illuminate\Database\Seeder;
use App\Models\Rso_owns_ev;

class Rso_owns_evSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rso_owns_evs = [
            [
                'rso_id' => 1,
                'event_id' => 1
            ],
            [
                'rso_id' => 1,
                'event_id' => 2
            ],
            [
                'rso_id' => 1,
                'event_id' => 3
            ]
        ];
        
        foreach ($rso_owns_evs as $rso_owns_ev) {
            Rso_owns_ev::create(array(
                'rso_id' => $rso_owns_ev['rso_id'],
                'event_id' => $rso_owns_ev['event_id']
            ));
        }        
    }
}
