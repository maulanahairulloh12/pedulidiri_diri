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
        DB::table('users')->insert([
            'name' => 'bonyok',
            'email' => 'maulana12@gmail.com',
            'username' => 'bonyok' ,
            'remember_token' => str_random(60),
            'password' => bcrypt('guagede')
        ]);
    }
}
