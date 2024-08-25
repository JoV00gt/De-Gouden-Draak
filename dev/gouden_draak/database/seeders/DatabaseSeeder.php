<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolePermissionSeeder::class);
        $this->call(DishTypeSeeder::class);
        $this->call(DishSeeder::class);
        $this->call(DealSeeder::class);

        User::factory(2)->state(function (array $attributes) {
            $name = $attributes['name'];
            $username = Str::slug($name, '_');
            return [
                'email' =>  $username . '@goudendraak.nl'
            ];
        })->create();

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@goudendraak.nl',
        ]);
        $user->assignRole('admin');

    }
}
