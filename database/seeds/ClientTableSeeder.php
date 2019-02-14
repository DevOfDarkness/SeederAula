<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Client::class, 50)->create();
    }
}
