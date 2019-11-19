<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'id' => 1,
                'rso_id' => 1
            ]
        ];
        
        foreach ($admins as $admin) {
            Admin::create(array(
                'id' => $admin['id'],
                'rso_id' => $admin['rso_id']
            ));
        }
    }
}
