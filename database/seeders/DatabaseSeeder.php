<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Saad',
            'email' => 'saad@gmail.com',
            'password'=>'123456',
            'role'=>'admin'
        ]);
        Role::insert([
            [
                "name" => "admin",
                "guard_name" => "web"
            ],
            [
                "name" => "coach",
                "guard_name" => "web"
            ],
            [
                "name" => "user",
                "guard_name" => "web"
            ],

        ]);

    }
}
