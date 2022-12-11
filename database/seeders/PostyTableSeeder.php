<?php

namespace Database\Seeders;
use App\Models\Posty;

use Database\Factories\PostyFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Posty::factory()->count(5)->create(); // równoznaczne z poniższym
        Posty::factory(5)->create(); 
    }
}
