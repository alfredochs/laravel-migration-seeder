<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTravel = new Travel();
            $newTravel->title = 'test';
            $newTravel->description = 'testo di prova';
            $newTravel->save();
        }
    }
}
