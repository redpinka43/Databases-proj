<?php

use Illuminate\Database\Seeder;
use App\Models\Super_admin;

class Super_adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admins = [
            [
                'id' => 2,
                'uni_id' => 1
            ]
        ];
        
        foreach ($super_admins as $super_admin) {
            Super_admin::create(array(
                'id' => $super_admin['id'],
                'uni_id' => $super_admin['uni_id']
            ));
        }

    }
}
