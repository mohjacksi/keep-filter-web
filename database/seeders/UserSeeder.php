<?php

namespace Database\Seeders;

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
        // مستخدم افتراضي
        $default_user = \App\Models\User::create([
            'name'      => 'admin',
            'phone'     => '01029751626',
            'location'  => 'sharqia/zagazig',
            'code'      => '123987',
            'email'     => 'a@a.a',
            'password'  => Hash::make('123123123'),
        ]);

        $default_user->attachRole('admin');
        $default_user->attachRole('user');

    }
}
