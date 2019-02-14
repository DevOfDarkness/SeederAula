<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	// Retorna todos os quartos do hotel.
    public function rooms() {
        return $this->hasMany('App\Room');
    }

	// Calcula o total de vagas disponíveis no hotel.
    public function vacanciesRemaining(){
        $rooms = $this->rooms;
        $vacancies = 0;

        foreach ($rooms as $room){
            $vacancies += $room->vacancies_remaining;
        }

        return $vacancies;
    }
}
