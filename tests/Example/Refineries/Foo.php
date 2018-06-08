<?php

namespace Pangolinkeys\TestFramework\Tests\Example\Refineries;

use Michaeljennings\Refinery\Refinery;

class Foo extends Refinery
{
    /**
     * Set the template the refinery will use for each item passed to it
     *
     * @param mixed $item
     * @return mixed
     */
    protected function setTemplate($item)
    {
        return [
            'created_at' => $item->created_at,
            'updated_at' => $item->updated_at,
        ];
    }

    protected function bar()
    {
        return $this->attach(Bar::class);
    }
}