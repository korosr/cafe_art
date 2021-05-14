<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('menus')->insert([
            'name' => 'StrawberryParfait',
            'fee' => 1000,
            'imgpath' => 'photograph-city-01.png',
            'category_id' => 1,
        ]);
        DB::table('menus')->insert([
            'name' => 'BrendCoffee',
            'fee' => 500,
            'imgpath' => 'photograph-city-02.png',
            'category_id' => 2,
        ]);
        DB::table('menus')->insert([
            'name' => 'Sandwitch',
            'fee' => 800,
            'imgpath' => 'photograph-city-03.png',
            'category_id' => 3,
        ]);
        DB::table('menus')->insert([
            'name' => 'CafeLatte',
            'fee' => 600,
            'imgpath' => 'photograph-city-04.png',
            'category_id' => 2,
        ]);
    }
}
