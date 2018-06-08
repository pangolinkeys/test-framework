<?php

namespace Pangolinkeys\TestFramework\Tests\Example\Refineries;

use Michaeljennings\Refinery\Refinery;

class Bar extends Refinery
{

    /**
     * Set the template the refinery will use for each item passed to it
     *
     * @param mixed $item
     * @return mixed
     */
    protected function setTemplate($item)
    {
        return [];
    }

    protected function foos()
    {
        return $this->attach(Foo::class);
    }
}