<?php

namespace Database\Seeders;

use App\Models\frontend\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
          'email'=>'muradprivatecenter@gmail.com',
          'phone'=>'01701297434',
          'address'=>'Khoksha, Thana Para',
          'facebook'=>'https://www.facebook.com',
          'twitter'=>'https://www.twitter.com',
          'instagram'=>'https://www.instagram.com',
          'linkedin'=>'https://www.linkedin.com',
          'youtube_1'=>'https://www.youtube_1.com',
          'youtube_2'=>'https://www.youtube_2.com',
          'skype'=>'https://www.skype.com',
          'pinterest'=>'https://www.pinterest.com',
          'whatsapp'=>'https://www.whatsapp.com',
        ];
        Contact::create($contacts);
    }
}
