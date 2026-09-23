<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::updateOrCreate(
            ['email' => 'admin@pearlcon.com'],
            [
                'name' => 'Pearlcon Administrator',
                'password' => Hash::make('PearlconAdmin2026!'),
            ]
        );
    }
}
