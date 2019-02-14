<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
		// Comando para os valores da Faker serem pt-br.
		$this->app->singleton(\Faker\Generator::class, function () {
			return \Faker\Factory::create('pt_BR');
		});
    }

    public function boot()
    {
		// Resolve o problema do StringLength com o Maria DB
        Schema::defaultStringLength(191);
    }
}
