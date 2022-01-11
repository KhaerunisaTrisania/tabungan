<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
        'name' => 'Admin Aplikasi',
        'email' => 'admin@admin.com',
        'password' => bcrypt('12345'),
        
        ]);
    }
}
