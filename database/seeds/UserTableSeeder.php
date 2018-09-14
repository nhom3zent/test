<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'TA DANG QUANG',
            'email' => 'taquang22@gmail.com',
            'password' => '123456',
            'phone_number' => '0123456',
        ]);
    }
}
