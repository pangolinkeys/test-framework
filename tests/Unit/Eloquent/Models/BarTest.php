<?php

namespace Pangolinkeys\TestFramework\Tests\Unit\Eloquent\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Pangolinkeys\TestFramework\Eloquent\Models\ModelTestCase;
use Pangolinkeys\TestFramework\Tests\Example\Eloquent\Models\Bar;

class BarTest extends ModelTestCase
{

    /**
     * Return an array of all the traits that should be seen on the model.
     *
     * @return array
     */
    protected function getTraits()
    {
        return [
            SoftDeletes::class,
        ];
    }

    /**
     * Return the contract class that the model should implement.
     *
     * @return string
     */
    protected function getContract()
    {
        return Bar::class;
    }

    /**
     * Return a key value pair of the relationships on the model and their types.
     *
     * @return array
     */
    protected function getRelationships()
    {
        return [
            'foos' => HasMany::class,
        ];
    }
}