<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deal;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deal::create(['menu_id' => 1, 'price' => 2.22, 'start_date' => '2024-08-16', 'expire_date' => '2024-08-31']);
    }
}
