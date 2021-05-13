<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuCategoryTebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menucategories')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('menucategories')->insert([
            'category_name' => 'フード',
        ]);
        DB::table('menucategories')->insert([
            'category_name' => 'ドリンク',
        ]);
        DB::table('menucategories')->insert([
            'category_name' => '期間限定',
        ]);
    }
}
