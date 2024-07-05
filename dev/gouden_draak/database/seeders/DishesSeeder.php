<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dish::create(['name' => 'Soep']);
        Dish::create(['name' => 'Voorgerecht']);
        Dish::create(['name' => 'Bami en Nasi Gerechten']);
        Dish::create(['name' => 'Combinatie Gerechten (met witte rijst)']);
        Dish::create(['name' => 'Mihoen Gerechten']);
        Dish::create(['name' => 'Chinese Bami Gerechten']);
        Dish::create(['name' => 'Indische Gerechten']);
        Dish::create(['name' => 'Eiergerechten (met witte rijst)']);
        Dish::create(['name' => 'Groenten Gerechten (met witte rijst)']);
        Dish::create(['name' => 'Vlees Gerechten (met witte rijst)']);
        Dish::create(['name' => 'Kip Gerechten (met witte rijst)']);
        Dish::create(['name' => 'Garnalen Gerechten (met witte rijst)']);
        Dish::create(['name' => 'Ossenhaas Gerechten (met witte rijst)']);
        Dish::create(['name' => 'Vissen Gerechten (met witte rijst)']);
        Dish::create(['name' => 'Peking Eend (met witte rijst)']);
        Dish::create(['name' => 'Tiepan Specialiteiten (met witte rijst)']);
        Dish::create(['name' => 'Vegetarische gerechten (met witte rijst)']);
        Dish::create(['name' => 'Kindermenu']);
        Dish::create(['name' => 'Rijsttafels']);
        Dish::create(['name' => 'Buffet']);
        Dish::create(['name' => 'Diversen']);
    }
}
