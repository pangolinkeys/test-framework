<?php

namespace Pangolinkeys\TestFramework\Tests\Unit\Refineries;

use Pangolinkeys\TestFramework\Refineries\RefineryTestCase;
use Pangolinkeys\TestFramework\Tests\Example\Refineries\Bar;

class BarTest extends RefineryTestCase
{

    /**
     * Get the class for the refinery.
     *
     * @return string
     */
    protected function getRefineryClass()
    {
        return Bar::class;
    }

    /**
     * Get the class for the model the refinery needs to use.
     *
     * @return string
     */
    protected function getModelClass()
    {
        return \Pangolinkeys\TestFramework\Tests\Example\Eloquent\Models\Bar::class;
    }

    /**
     * Get the items that you expect to see post refining.
     *
     * @return array
     */
    protected function getExpectedItems()
    {
        return [
            'foos',
        ];
    }

    /**
     * Get the items that should be attached to the refinery.
     *
     * @return array
     */
    protected function getAttachments()
    {
        return [
            'foos',
        ];
    }

    /**
     * Get the items that should not be returned after refining
     * (eg. id)
     *
     * @return array
     */
    protected function getDisallowedItems()
    {
        return [
            'id'
        ];
    }
}