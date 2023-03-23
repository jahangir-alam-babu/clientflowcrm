<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminAccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('12345678'),
            'role_type' => 2 // admin
            ];

        DB::table('admins')->insert($admin);
    }
}
