<?php

use Illuminate\Database\Seeder;
use App\Admin;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->first_name = 'Amr';
        $admin->last_name  = 'El Mahdy';
        $admin->username   = 'amrelmhdy';
        $admin->email      = 'info@amrelmahdy.com';
        $admin->password   = bcrypt('password');
        $admin->save();
    }
}
