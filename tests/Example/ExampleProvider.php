<?php

namespace Pangolinkeys\TestFramework\Tests\Example;

use Illuminate\Support\ServiceProvider;
use Pangolinkeys\TestFramework\Contracts\TestCase;

class ExampleProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Example/database/migrations');
    }

    public function register()
    {
        $this->app->bind(TestCase::class, \Pangolinkeys\TestFramework\Tests\Unit\TestCase::class);
    }
}