<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('Op@update8pdg'),
        ]);
         User::create([
            'name' => 'Humas SMP Negeri 8 Padang',
            'username' => 'adminhumas',
            'password' => Hash::make('Op@update8pdg'),
        ]);
         User::create([
            'name' => 'Admin Dapodik',
            'username' => 'admindapodik',
            'password' => Hash::make('Op@update8pdg'),
        ]);
         User::create([
            'name' => 'Kepala Sekolah SMP Negeri 8 Padang',
            'username' => 'kepseksmpn8pdg',
            'password' => Hash::make('Op@update8pdg'),
        ]);
    }
}
