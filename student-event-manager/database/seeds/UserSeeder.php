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
                'name' => 'steve',
                'email' => 'steve@ucf.ucf',
                'password' => '$2y$10$OgozV7G45J4XvkGQ.t2WdeuxscHX2BRdEwaECyGMlhkmuy7hnOZyC',
                'uni_name' => 'University of Central Florida'
            ],
            [
                'name' => 'sparrow',
                'email' => 'sparrow@ucf.ucf',
                'password' => '$2y$10$O9mnStfhXnpzFHfY4V6KtOcbB.1i4gfvRsaITSC4jZ.MfQ.jd1vSu',
                'uni_name' => 'University of Central Florida'
            ],
            [
                'name' => 'cardinal',
                'email' => 'cardinal@ucf.ucf',
                'password' => '$2y$10$qkS.7JashnEV9.DyYzbt.eY5oaZ94IYtjWBfoo3FGsf/yF5UMSP92',
                'uni_name' => 'University of Central Florida'
            ],
            [
                'name' => 'cockatiel',
                'email' => 'cockatiel@ucf.ucf',
                'password' => '$2y$10$rvdBTo089SIXLJ3MtGCSaeBnE8fGQA0yICX/WKldxXvAJVesnAQFq',
                'uni_name' => 'University of Central Florida'
            ],
            [
                'name' => 'parrot',
                'email' => 'parrot@ucf.ucf',
                'password' => '$2y$10$PoXWRtM71jirxRoIvCLzp.U7vNunInBGHRtvyCp9GkBbGsCc1bkDG',
                'uni_name' => 'University of Central Florida'
            ],
            [
                'name' => 'steve',
                'email' => 'steve@ucf.ucf',
                'password' => '$2y$10$f99hoNehdTbXJ2saTroYEOPgCiyBoLkfPVfzUbQwaZPEwllaJMzsm',
                'uni_name' => 'Clown College'
            ]
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
