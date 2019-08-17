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
            'name' => 'tulgaa',
            'email' => 'tulgaa@example.mn',
            'type' => 'moderator',
            'password' => bcrypt('tulgaa@example'),
        ],
        [
            'name' => 'lamba',
            'email' => 'lambo@example.mn',
            'type' => 'moderator',
            'password' => bcrypt('lambo@example'),
        ],
        [
            'name' => 'tugsuu',
            'email' => 'tugsuu@example.mn',
            'type' => 'moderator',
            'password' => bcrypt('tugsuu@example'),
        ]);
    }
}
