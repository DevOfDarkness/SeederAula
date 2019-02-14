<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelsTableSeeder extends Seeder
{
    // Nessa função as operações da seeder são executadas.
    public function run()
    {
		/* Seedando dados usando a migration diretamente. */
		DB::table('hotels')->insert([
			'name' => 'Hans Brinker Budget Hotel',
			'address' => 'https://hansbrinker.com/amsterdam',
			'description' => 'O pior lugar do mundo para você se hospedar é o Hans Brinker Budget Hotel.',
			'telephone' => '(21) 7171-0666',
			'email' => 'hansbrinker@email.com'
		]);

		/* Podem ser uma ou mais linhas, sendo o parâmetro um array de arrays. */
		DB::table('hotels')->insert([[
			'name' => 'Premier',
			'address' => 'Rua Marechal Castelo Branco, 95 - Centro, Nilópolis - RJ, 26525-122',
			'description' => 'Local avaliado como Bom no geral para turismo, lazer e locomoção.',
			'telephone' => '(21) 2791-0613',
			'email' => 'premier@email.com'
		],[
			'name' => 'Mont Blanc Apart Hotel',
			'address' => 'Av. Dr. Mario Guimarães, 533 - Centro, Nova Iguaçu - RJ, 26255-230',
			'description' => 'Em um edifício funcional a 11 minutos de caminhada da estação de trem de Nova Iguaçu, este hotel informal fica a 1,5 km da Catedral de Santo Antônio e a 1,5 km do Vulcão de Nova Iguaçu.',
			'telephone' => '(21) 3759-9600',
			'email' => 'montblank@email.com'
		]]);

		/* Seedando dados usando a Model com Mass Assignment.
		 * Podem ser uma ou mais linhas, também tendo array de arrays como parâmetro. */
		App\Hotel::create([
			'name' => 'Mercure',
			'address' => 'Av. Dr. Mario Guimarães, 520 - Centro, Nova Iguaçu - RJ, 26255-230',
			'description' => 'Este hotel moderno e sofisticado fica a 10 minutos a pé da estação de trem de Nova Iguaçu e a 1,5 km do estádio de futebol Jânio Moraes.',
			'telephone' => '(21) 3257-8500',
			'email' => 'mercure@email.com'
		]);
    }
}
