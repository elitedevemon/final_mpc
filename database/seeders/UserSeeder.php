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
          'password'=>Hash::make('123456'),
          'phone' => '01701297434',
          'refer_code' => '01701297434',
          'profile_lock_date' => date('Y-m-d', strtotime('+1 month')),
          'address' => 'Shelaidah, Kumarkhali, Kushtia',
          'city' => 'Kushtia',
          'post_code' => '7010',
          'country' => 'Bangladesh',
          'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero unde eaque magnam. Quis rem repellat reiciendis consectetur illo ea quo ullam voluptatibus iure possimus esse, exercitationem minus quae, maiores alias?',
          'level' => '1st',
          'facebook' => 'www.facebook.com',
          'twitter' => 'www.twitter.com',
          'google_plus' => 'www.googleplus.com',
          'pinterest' => 'www.pinterest.com',
        ];
        User::create($user);

        $user = [
          'name'=>'Saad Ahmed',
          'username' => 'saad_ahmed',
          'email'=>'saadahmed@gmail.com',
          'password'=>Hash::make('123456'),
          'phone' => '01715445816',
          'refer_code' => '01715445816',
          'profile_lock_date' => date('Y-m-d', strtotime('+1 month')),
          'address' => 'Shelaidah, Kumarkhali, Kushtia',
          'city' => 'Kushtia',
          'post_code' => '7010',
          'country' => 'Bangladesh',
          'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero unde eaque magnam. Quis rem repellat reiciendis consectetur illo ea quo ullam voluptatibus iure possimus esse, exercitationem minus quae, maiores alias?',
          'level' => '1st',
          'facebook' => 'www.facebook.com',
          'twitter' => 'www.twitter.com',
          'google_plus' => 'www.googleplus.com',
          'pinterest' => 'www.pinterest.com',
        ];
        User::create($user);

        $user = [
          'name'=>'Manik Ahmed',
          'username' => 'manik_ahmed',
          'email'=>'manikahmed@gmail.com',
          'password'=>Hash::make('123456'),
          'phone' => '01715445817',
          'refer_code' => '01715445817',
          'profile_lock_date' => date('Y-m-d', strtotime('+1 month')),
          'address' => 'Shelaidah, Kumarkhali, Kushtia',
          'city' => 'Kushtia',
          'post_code' => '7010',
          'country' => 'Bangladesh',
          'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero unde eaque magnam. Quis rem repellat reiciendis consectetur illo ea quo ullam voluptatibus iure possimus esse, exercitationem minus quae, maiores alias?',
          'level' => '1st',
          'facebook' => 'www.facebook.com',
          'twitter' => 'www.twitter.com',
          'google_plus' => 'www.googleplus.com',
          'pinterest' => 'www.pinterest.com',
        ];
        User::create($user);

        $user = [
          'name'=>'Mahfuz Ahmed',
          'username' => 'mahfuz_ahmed',
          'email'=>'mahfuzahmed@gmail.com',
          'password'=>Hash::make('123456'),
          'phone' => '01715445818',
          'refer_code' => '01715445818',
          'profile_lock_date' => date('Y-m-d', strtotime('+1 month')),
          'address' => 'Shelaidah, Kumarkhali, Kushtia',
          'city' => 'Kushtia',
          'post_code' => '7010',
          'country' => 'Bangladesh',
          'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero unde eaque magnam. Quis rem repellat reiciendis consectetur illo ea quo ullam voluptatibus iure possimus esse, exercitationem minus quae, maiores alias?',
          'level' => '1st',
          'facebook' => 'www.facebook.com',
          'twitter' => 'www.twitter.com',
          'google_plus' => 'www.googleplus.com',
          'pinterest' => 'www.pinterest.com',
        ];
        User::create($user);

        $user = [
          'name'=>'Rasel Ahmed',
          'username' => 'rasel_ahmed',
          'email'=>'raselahmed@gmail.com',
          'password'=>Hash::make('123456'),
          'phone' => '01715445819',
          'refer_code' => '01715445819',
          'profile_lock_date' => date('Y-m-d', strtotime('+1 month')),
          'address' => 'Shelaidah, Kumarkhali, Kushtia',
          'city' => 'Kushtia',
          'post_code' => '7010',
          'country' => 'Bangladesh',
          'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero unde eaque magnam. Quis rem repellat reiciendis consectetur illo ea quo ullam voluptatibus iure possimus esse, exercitationem minus quae, maiores alias?',
          'level' => '1st',
          'facebook' => 'www.facebook.com',
          'twitter' => 'www.twitter.com',
          'google_plus' => 'www.googleplus.com',
          'pinterest' => 'www.pinterest.com',
        ];
        User::create($user);

        $user = [
          'name'=>'Sagor Ahmed',
          'username' => 'sagor_ahmed',
          'email'=>'sagorahmed@gmail.com',
          'password'=>Hash::make('123456'),
          'phone' => '01715445815',
          'refer_code' => '01715445815',
          'profile_lock_date' => date('Y-m-d', strtotime('+1 month')),
          'address' => 'Shelaidah, Kumarkhali, Kushtia',
          'city' => 'Kushtia',
          'post_code' => '7010',
          'country' => 'Bangladesh',
          'about' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero unde eaque magnam. Quis rem repellat reiciendis consectetur illo ea quo ullam voluptatibus iure possimus esse, exercitationem minus quae, maiores alias?',
          'level' => '1st',
          'facebook' => 'www.facebook.com',
          'twitter' => 'www.twitter.com',
          'google_plus' => 'www.googleplus.com',
          'pinterest' => 'www.pinterest.com',
        ];
        User::create($user);
    }
}
