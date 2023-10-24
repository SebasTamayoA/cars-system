<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Car;
use Database\Factories\CarFactory;

class CarTableSeeder extends Seeder
{
    public function run()
    {
        Car::factory()->count(100)->create();
    }
}

// Ejecutar el seeder
//php artisan db:seed --class=CarTableSeeder
