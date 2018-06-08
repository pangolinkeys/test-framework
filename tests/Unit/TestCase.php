<?php

namespace Pangolinkeys\TestFramework\Tests\Unit;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Pangolinkeys\TestFramework\Contracts\TestCase as TestCaseContract;


class TestCase implements TestCaseContract
{
    public function setUp(OrchestraTestCase $case)
    {
    }
}
