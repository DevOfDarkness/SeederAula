<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/* Aqui são declaradas todas as seeders
	 * que queremos executar */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
    }
}
