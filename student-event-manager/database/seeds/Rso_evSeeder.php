<?php

use Illuminate\Database\Seeder;
use App\Models\Rso_ev;

class Rso_evSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rso_evs = [
            [
                'event_id' => 1
            ],
            [
                'event_id' => 2
            ],
            [
                'event_id' => 3
            ]
        ];
        
        foreach ($rso_evs as $rso_ev) {
            Rso_ev::create(array(
                'event_id' => $rso_ev['event_id']
            ));
        }

    }
}
