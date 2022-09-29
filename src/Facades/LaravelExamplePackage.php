<?php

namespace Mohd\LaravelExamplePackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mohd\LaravelExamplePackage\LaravelExamplePackage
 */
class LaravelExamplePackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mohd\LaravelExamplePackage\LaravelExamplePackage::class;
    }
}
