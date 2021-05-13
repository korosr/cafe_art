<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryTebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('galleries')->insert([
            'imgpath' => 'photograph-city-01.png',
        ]);
        DB::table('galleries')->insert([
            'imgpath' => 'photograph-city-02.png',
        ]);
        DB::table('galleries')->insert([
            'imgpath' => 'photograph-city-03.png',
        ]);
        DB::table('galleries')->insert([
            'imgpath' => 'photograph-city-04.png',
        ]);
        DB::table('galleries')->insert([
            'imgpath' => 'photograph-city-05.png',
        ]);
        DB::table('galleries')->insert([
            'imgpath' => 'photograph-city-06.png',
        ]);
    }
}
