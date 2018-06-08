<?php

namespace Pangolinkeys\TestFramework\Contracts;


use Orchestra\Testbench\TestCase as OrchestraTestCase;


interface TestCase
{
    public function setUp(OrchestraTestCase $app);
}