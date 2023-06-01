<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'fname' => 'Super', 
            'lname' => 'Administrator', 
            'email' => 'admin@vookamba.com',
            'type' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('2023@vookamba')
        ]);
    }
}
