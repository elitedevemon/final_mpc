<?php

namespace Database\Seeders;

use App\Models\Marquee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('marquees')->insert([
        'text'=>'Hello this is just for testing purpose'
      ]);
    }
}
