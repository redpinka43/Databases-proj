<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Steve',
                'email' => 'Steve@ucf.com',
                'password' => '12345678',
                'uni_name' => 'University of Central Florida'
            ],
            [
                'name' => 'Jack', 
                'email' => 'Jack@ucf.com',
                'password' => '12345678',
                'uni_name' => 'University of Central Florida'
            ],
        ];
        
        foreach ($users as $user) {
            User::create(array(
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'uni_name' => $user['uni_name']
            ));
        }
    }
}
