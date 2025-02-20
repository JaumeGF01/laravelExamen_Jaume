<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;
use Faker\Factory as Faker;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {   
            $libro = new Libro();
            $libro->titulo = "El libro de ".$faker->firstNameMale;
            $libro->autor = $faker->firstNameFemale;
            $libro->editorial = $faker->randomElement(["Norma","Kibook","Planeta"]);
            $libro->created_at = date("Y-m-d H:m:s");
            $libro->updated_at = date("Y-m-d H:m:s");
            $libro->save();
        }
    }
}
