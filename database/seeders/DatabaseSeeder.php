<?php

namespace Database\Seeders;

use App\Models\frontend\Slider;
use App\Models\Marquee;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\frontend\Slider::factory(8)->create();
        \App\Models\frontend\Post::factory(15)->create();
        \App\Models\frontend\PeopleSay::factory(1)->create();
        \App\Models\frontend\Media::factory(7)->create();
        \App\Models\frontend\Categories::factory(8)->create();
        \App\Models\frontend\VideosInformation::factory(20)->create();
        $this->call(MarqueeSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SliderPhotosSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
