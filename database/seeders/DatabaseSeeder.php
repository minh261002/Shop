<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserCatalogue;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        UserCatalogue::create([
            'name' => 'Administator',
            'description' => 'Quản trị viên hệ thống',
        ]);

        User::factory()->create([
            'user_catalogue_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '0123456789',
            'address' => '83 Đoàn Phú Tứ, Hoà Khánh Bắc, Liên Chiểu, Đà Nẵng',
        ]);

        User::factory()->count(100)->create();
    }
}