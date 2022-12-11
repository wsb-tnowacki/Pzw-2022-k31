<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posty;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            /* User::factory()->create([
                'name' => 'Test user',
                'email' => 'test@example.com',
                'password' => password_hash('tester', PASSWORD_DEFAULT),
            ]); */
            /* Posty::factory()->create([
                'tytul' => 'Wpis seedera 2',
                'autor' => 'Tester 2',
                'email' => 'test2@example.com',
                'tresc' => 'Treść wpisu seederowego 2',
                'created_at' => now(),
            ]); */
            User::factory(10)->create();
            $this->call(PostyTableSeeder::class);
    }
}
