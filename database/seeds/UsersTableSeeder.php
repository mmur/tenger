<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'munkhjargal',
            'email' => 'munkhjargal@gmail.com',
            'type' => 'admin',
            'phone' => '99133719',
            'password' => bcrypt('Muujigmn123'),
        ],
        [
            'name' => 'moderator',
            'email' => 'moderator@tengerdaatgal.mn',
            'type' => 'moderator',
            'password' => bcrypt('moderator@tenger'),
        ]);
    }
}
