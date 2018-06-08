<?php

namespace Pangolinkeys\TestFramework\Eloquent\Models;

use Pangolinkeys\TestFramework\TestCase;

abstract class ModelTestCase extends TestCase
{
    /**
     * @test
     */
    public function test_model_implements_traits()
    {
        foreach ($this->getTraits() as $trait) {
            $this->assertContains($trait, class_uses($this->getModel()));
        }
    }

    /**
     * Return an array of all the traits that should be seen on the model.
     *
     * @return mixed
     */
    protected abstract function getTraits();

    /**
     * Return an instance of the model for evaluation.
     *
     * @return mixed
     */
    protected function getModel()
    {
        return $this->app->make($this->getContract());
    }

    /**
     * Return the contract class that the model should implement.
     *
     * @return mixed
     */
    protected abstract function getContract();

    /**
     * @test
     */
    public function test_model_implements_contract()
    {
        if ( ! empty($this->getContract())) {
            $this->assertInstanceOf($this->getContract(), $this->getModel());
        }
    }

    /**
     * @test
     */
    public function test_model_has_expected_relationships()
    {
        $relationships = $this->getRelationships();

        if (empty($relationships)) {
            $this->assertTrue(true);
        } else {
            foreach ($this->getRelationships() as $relationship => $type) {

                $this->assertInstanceOf($type, $this->getModel()->$relationship());

            }
        }
    }

    /**
     * Return a key value pair of the relationships on the model and their types.
     *
     * @return mixed
     */
    protected abstract function getRelationships();
}