<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $agencies = ['Trenitalia', 'Italo', 'Trenord', 'Itabus', 'Frecciarossa', 'Intercity'];
        $stations = ["Roma Termini", "Napoli Centrale", "Milano Centrale", "Sulmona", "Bari Centrale", "Reggio Calabria", "Pavia", "Pescara", "Bologna Centrale", "Firenze S.M.N", "Ancona"];
        $prefix = ["IT", "TI", "TN", "IB", "IC", "TR"];

        for ($i = 0; $i < 20; $i++) {

            $newTrain = new Train();
    
            $newTrain->agency = $faker->randomElement($agencies); // random element restituisce un elemento casuale di un array
            $newTrain->departure_station = $faker->randomElement($stations);
            $newTrain->arrival_station = $faker->randomElement($stations);
            $newTrain->departure_date = $faker->dateTimeBetween(now(), '+10 week'); //dateTimeBetween restituisce una data casuale tra una minima e una massima
            $newTrain->departure_time = $faker->time(); //time restituisce un orario casuale, di default ore minuti e secondi sono divisi dai :, altrimenti possiamo indicare come formattarli
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->randomElement($prefix) . $faker->numberBetween(100, 999);
            $newTrain->total_carriages = $faker->numberBetween(1, 15); //numberBetween restituisce un numero casuale tra un minimo e un massimo
            $newTrain->on_time = $faker->boolean(70); //boolean restituisce un valore booleano casuale, dentro le parentesi possiamo indicare la percentuale di possibilità del true
            $newTrain->if_cancelled = $faker->boolean(15);

            $newTrain->save();

        }

        
    }
}
