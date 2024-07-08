<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $comic= new Comic();
            $comic->title=$faker->name;
            $comic->description=$faker->text;
            $comic->thumb=$faker->imageUrl;
            $comic->series=$faker->name;
            $comic->sale_date=$faker->date();
            $comic->type=$faker->text;
            $comic->save();
            }  
    }
}
