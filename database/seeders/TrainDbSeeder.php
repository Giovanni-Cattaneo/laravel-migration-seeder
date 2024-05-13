<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::factory()->count(15)->create([
            'brand' => 'Italo',
            'departures_station' => 'Milano Centrale',
            'arrival_station' => 'Roma Termini',
            'day_of_departures' => '2024-05-10',
            'departures_hour' => '18:00',
            'arrival_hour' => '23:30',
            'sku' => 152535,
            'carriages' => 25,
            'on_time' => 0,
            'canceled' => 1,

        ]);
    }
}
