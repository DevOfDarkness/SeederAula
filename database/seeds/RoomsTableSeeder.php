<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        /* Gerando valores aleatórios usando Factory.
		 * O primeiro par:ametro é a Model usada,
		 * o segundo é a quantidade de linhas geradas na tabela. */
		factory(App\Room::class, 50)->create();
    }
}
