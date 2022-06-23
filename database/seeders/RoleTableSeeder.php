<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // المشرفين
        $admin = \App\Models\Role::create([
            'name' => 'admin',
            'display_name' => 'admin',
            'description' => 'admin roles',
        ]);

        // المستخدمين
        $user = \App\Models\Role::create([
            'name' => 'user',
            'display_name' => 'user',
            'description' => 'user roles',
        ]);
    }
}
