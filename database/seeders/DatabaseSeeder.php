<?php

namespace Database\Seeders;

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
        $this->call(MenuCategoryTebleSeeder::class);
        $this->call(GalleryTebleSeeder::class);
        $this->call(MenuTebleSeeder::class);
    }
}