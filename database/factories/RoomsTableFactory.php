<?php

use Faker\Generator as Faker;

// Factory geradora de valores para atabela Rooms
$factory->define(App\Room::class, function (Faker $faker) {

	// Tipos de quartos pré-selecionados.
	$tipos = ['solteiro', 'casal', 'suite', 'suite presidencial'];

	// Pega um id aleatório de um hotel cadastrado.
	$hotel_id = App\Hotel::all()->pluck('id')->random();

    return [
		// Selecional um dos tipos de quarto aleatoriamente.
		'type' => $tipos[array_rand($tipos)], 

		// Cria um parágrafo aleatório usando Faker.
		'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
		'vacancies' => rand(7, 8),
		'vacancies_remaining' => rand(0, 7),
		'hotel_id' => $hotel_id 
    ];
});
