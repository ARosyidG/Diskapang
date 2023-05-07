<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('Admins')->insert([
            'name' => 'Ganausi',
            'username' => 'Ganausi',
            'password' => Hash::make('qscaxz12'),
            'role' => 'Admin'
        ]);
        DB::table('Admins')->insert([
            'name' => 'PPID',
            'username' => 'PPID',
            'password' => Hash::make('qscaxz12'),
            'role' => 'PPID'
        ]);
        // Admin::factory(3)->create();
        Berita::factory(30)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
