<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            'email_verified_at' =>  now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Utilisateur 1',
            'email' => 'user@user1.com',
            'role_id' => 2,
            'email_verified_at' =>  now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10)
        ]);
    }
}
