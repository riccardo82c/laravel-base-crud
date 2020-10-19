<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i = 0; $i < 10; $i++) {
            $newComic = new Comic;
            $newComic->titolo = $faker->text(15);
            $newComic->autore = $faker->name;
            $newComic->quantita = $faker->numberBetween(0, 255);
            $newComic->prezzo = $faker->numberBetween(2, 9);
            $newComic->save();
        }
    }
}
