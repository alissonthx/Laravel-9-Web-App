<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ['name' => 'Exterminadores FC'],
            ['name' => 'Paysanduba FC'],
            ['name' => 'Olhos-de-bode'],
            ['name' => 'Fim de Jogo FC'],
            ['name' => 'Galos de Briga'],
            ['name' => 'Infantaria'],
            ['name' => 'Jaguars'],
            ['name' => 'Cheers For Beers'],
        ];

        while (count($teams) > 0) {
            $i = rand(0, count($teams) - 1);
            $team = $teams[$i];
            unset($teams[$i]);
            $teams = array_values($teams);
            Team::create($team);
        }
    }
}
