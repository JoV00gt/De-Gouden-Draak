<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DishTypeSeeder::class);
        $this->call(DishSeeder::class);
        User::factory()->create([
            'name' => 'Jos Voogt',
            'email' => 'josvoogt@goudendraak.nl',
        ]);
    }
}
