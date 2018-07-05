<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->insert([
            'title' => 'Бидний тухай',
            'en_title' => 'About us',
            'description' => 'Бидний тухай',
            'order' => 1,
            'parent_id' => 0,
            'position' => 'top',
        ],
        [
            'title' => 'Мэдээ',
            'en_title' => 'News',
            'description' => 'News',
            'order' => 2,
            'parent_id' => 0,
            'position' => 'top',
        ],
        [
            'title' => 'Холбоо барих',
            'en_title' => 'Contact',
            'description' => 'Contact us',
            'order' => 3,
            'parent_id' => 0,
            'position' => 'top',
        ],
        [
            'title' => 'Бидний Түүх',
            'en_title' => 'Our History',
            'description' => 'түүх',
            'order' => 1,
            'parent_id' => 1,
            'position' => 'left',
        ],
        [
            'title' => 'Тайлан',
            'en_title' => 'Report',
            'description' => 'Тайлан',
            'order' => 2,
            'parent_id' => 1,
            'position' => 'left',
        ],
        [
            'title' => 'Удирдлагын баг',
            'en_title' => 'Leadership',
            'description' => 'Leaders',
            'order' => 3,
            'parent_id' => 1,
            'position' => 'left',
        ],
        [
            'title' => 'Хүний Нөөц',
            'en_title' => 'Human Resources',
            'description' => 'HR',
            'order' => 4,
            'parent_id' => 1,
            'position' => 'left',
        ]
    );
    }
}
