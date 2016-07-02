<?php namespace LexiSmith\LaravelAlchemy;

use Illuminate\Support\Facades\Facade;

class AlchemyFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'laravel-alchemy';
    }
}