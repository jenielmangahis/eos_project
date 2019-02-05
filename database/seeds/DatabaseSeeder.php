<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //Create Admin Seed
          DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'supacoderz@gmail.com',
            'password' => Hash::make('password'),
            'roles' => 'administrator',
        ]);

        //Create Admin Seed
        DB::table('users')->insert([
            'lastname' => 'Reyes',
            'firstname' => 'Andrian',
            'number' =>'+639065547930',
            'address' => '',
            'city' =>'',

            'email' => 'andrianreyes@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}
