<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
          'name'=>'EliteDev Emon',
          'username' => 'elitedev_emon',
          'email'=>'freelanceremonhassan@gmail.com',
          'password'=>Hash::make('12345678'),
          'phone' => '01701297434',
          'address' => 'Shelaidah, Kumarkhali, Kushtia',
          'city' => 'Kushtia',
          'post_code' => '7010',
          'country' => 'Bangladesh',
          'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero unde eaque magnam. Quis rem repellat reiciendis consectetur illo ea quo ullam voluptatibus iure possimus esse, exercitationem minus quae, maiores alias?',
          'level' => '1st',
          'facebook' => 'www.facebook.com',
          'twitter' => 'www.twitter.com',
          'google+' => 'www.googleplus.com',
          'pinterest' => 'www.pinterest.com',
        ];
        User::create($user);
    }
}
