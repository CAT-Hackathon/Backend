<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(RoadmapContentSeeder::class);
        $this->call(CompanySeeder::class);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'mentor']);
        Role::create(['name' => 'user']);



        //  User::factory(10)->create()->each(function ($user) {

        //     $user->assignRole('user');

        // });

        // User::factory(10)->create()->each(function ($user) {

        //     $user->assignRole('admin');

        // });
        $user =User::create([

            'name' => 'Admin',
            'email' => 'a@a.a',
            'phone'=>'123456789',
            'password' => Hash::make('a'),
        ]);
        $user->assignRole('admin');

        $user->assignRole('mentor');
        $user->assignRole('user');


    }
}
