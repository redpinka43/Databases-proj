<?php

use Illuminate\Database\Seeder;
use App\Models\University;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $universities = [
            [  
                'name' => 'University of Central Florida',
                'website' => 'https://www.ucf.edu/'
            ],
            [  
                'name' => 'Clown College',
                'website' => 'https://www.theclownschool.com/'
            ],
        ];
    
        foreach ($universities as $university) {
            University::create(array(
                'name' => $university['name'],  
                'website' => $university['website']
            ));
        }   
    }
}
