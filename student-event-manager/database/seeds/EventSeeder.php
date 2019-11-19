<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $events = [
            [
                'time' => '2019-05-25 17:30:00', 
                'description' => 'It will be a party alright!',
                'name' => 'Gator Party',
                'phone_num' => '100-022-2484',
                'email_address' => 'party@gmail.com',
                'type' => '', 
                'event_category' => ''
            ],
            [
                'time' => '2019-05-24 17:30:00', 
                'description' => 'uhhhhhhh lol.',
                'name' => 'Dunsparce Celebration',
                'phone_num' => '100-022-2384',
                'email_address' => 'dunsparce@gmail.com',
                'type' => '', 
                'event_category' => ''
            ],
            [
                'time' => '2019-05-23 17:30:00', 
                'description' => 'help.',
                'name' => 'Magikarp the Gathering',
                'phone_num' => '666-022-2384',
                'email_address' => 'magikarp@gmail.com',
                'type' => '', 
                'event_category' => ''
            ]
        ];
        
        foreach ($events as $event) {
            Event::create(array(
                'time' => $event['time'],
                'description' => $event['description'],
                'name' => $event['name'],
                'phone_num' => $event['phone_num'],
                'email_address' => $event['email_address'],
                'type' => $event['type'],
                'event_category' => $event['event_category']
            ));
        }

    }
}
