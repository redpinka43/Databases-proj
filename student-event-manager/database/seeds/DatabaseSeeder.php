<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(UniversitySeeder::class);        
        $this->call(RsoSeeder::class);        
        $this->call(EventSeeder::class);        
        $this->call(Rso_evSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(Super_adminSeeder::class); 

        $this->call(Rso_owns_evSeeder::class);
    }
}
