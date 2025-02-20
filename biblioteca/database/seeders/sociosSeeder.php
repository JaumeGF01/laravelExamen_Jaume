<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Socio;
Use Faker\Factory as Faker;

class sociosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {   
            $socio = new Socio();
            $socio->nombre = $faker->firstNameMale;
            $socio->email = $faker->email;
            $socio->created_at = date("Y-m-d H:m:s");
            $socio->updated_at = date("Y-m-d H:m:s");
            $socio->save();
        }
    }
}
