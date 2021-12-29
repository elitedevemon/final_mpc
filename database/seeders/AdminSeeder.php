<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new Admin();
      $admin->name = "Murad Sir";
      $admin->email = "muradprivatecenter@gmail.com";
      $admin->username = "superadmin";
      $admin->password = Hash::make('123456');
      $admin->save();
    }
}
