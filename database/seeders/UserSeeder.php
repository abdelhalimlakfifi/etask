<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user               =   new User;
        $user->name         =   'Abdelhalim Lakfifi';
        $user->email        =   'alakfifi900@gmail.com';
        $user->password     =   Hash::make('admin');
        $user->save();
    }
}
