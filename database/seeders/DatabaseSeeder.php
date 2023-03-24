<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Application;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            "name"  => "admin",
            "email" => "admin@admin.com",
        ]);

        Application::create([
            "callback"   => "socketeer.test/api/callback",
            "app_name"   => "mijn_test_app",
            "client_key" => "client_test_key",
            "server_key" => "server_test_key",
            "user_id"    => $user->id
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
