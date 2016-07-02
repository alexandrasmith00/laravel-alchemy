<?php namespace LexiSmith\LaravelAlchemy;

use Illuminate\Support\ServiceProvider;

class AlchemyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('laravel-alchemy', function() {
            return new Alchemy;
        });
    }
	
		public function boot()
		{
			$this->publishes([
      	__DIR__.'/config/alchemy.php' => config_path('alchemy.php'),
    	]);
			
		}
}