<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DishType;

class DishTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DishType::create(['name' => 'Soep']);
        DishType::create(['name' => 'Voorgerecht']);
        DishType::create(['name' => 'Bami en Nasi Gerechten']);
        DishType::create(['name' => 'Combinatie Gerechten (met witte rijst)']);
        DishType::create(['name' => 'Mihoen Gerechten']);
        DishType::create(['name' => 'Chinese Bami Gerechten']);
        DishType::create(['name' => 'Indische Gerechten']);
        DishType::create(['name' => 'Eiergerechten (met witte rijst)']);
        DishType::create(['name' => 'Groenten Gerechten (met witte rijst)']);
        DishType::create(['name' => 'Vlees Gerechten (met witte rijst)']);
        DishType::create(['name' => 'Kip Gerechten (met witte rijst)']);
        DishType::create(['name' => 'Garnalen Gerechten (met witte rijst)']);
        DishType::create(['name' => 'Ossenhaas Gerechten (met witte rijst)']);
        DishType::create(['name' => 'Vissen Gerechten (met witte rijst)']);
        DishType::create(['name' => 'Peking Eend (met witte rijst)']);
        DishType::create(['name' => 'Tiepan Specialiteiten (met witte rijst)']);
        DishType::create(['name' => 'Vegetarische gerechten (met witte rijst)']);
        DishType::create(['name' => 'Kindermenu']);
        DishType::create(['name' => 'Rijsttafels']);
        DishType::create(['name' => 'Buffet']);
        DishType::create(['name' => 'Diversen']);
    }
}
