<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Ангилалгүй',
            'description' => 'Категоригүй',
        ],
        [
            'title' => 'Хувь хүн',
            'description' => 'Иргэдэд зориулсан даатгалын үйлчилгээнүүд',
        ],
        [
            'title' => 'Байгууллага',
            'description' => 'Байгууллагуудад зориулсан даатгалын үйлчилгээнүүд',
        ]);
    }
}
