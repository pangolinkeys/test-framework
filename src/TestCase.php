<?php

namespace Pangolinkeys\TestFramework;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Pangolinkeys\TestFramework\Contracts\TestCase as TestCaseContract;
use Pangolinkeys\TestFramework\Tests\Example\ExampleProvider;

class TestCase extends OrchestraTestCase
{
    protected function setUp()
    {
        parent::setUp();

        $testCase = $this->app->make(TestCaseContract::class);

        $testCase->setUp($this);
    }

    protected function getPackageProviders($app)
    {
        if (env('APP_ENV') === 'pangolinkeys_testing') {
            return [
                ExampleProvider::class,
            ];
        }
    }
}