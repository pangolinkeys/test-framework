<?php

namespace Pangolinkeys\TestFramework\Refineries;

use Michaeljennings\Refinery\Refinery;
use Pangolinkeys\TestFramework\TestCase;

abstract class RefineryTestCase extends TestCase
{
    /**
     * Test that the refinery is being constructed.
     *
     * @test
     */
    protected function test_refinery_exists()
    {
        $this->assertNotNull($this->getRefinery());
    }

    /**
     * Get an instantiated instance of the model.
     *
     * @return Refinery
     */
    protected function getRefinery()
    {
        return $this->app->make($this->getRefineryClass());
    }

    /**
     * Get the class for the refinery.
     *
     * @return string
     */
    protected abstract function getRefineryClass();

    protected function test_model_exists()
    {
        return $this->assertNotNull($this->getModel());
    }

    /**
     * Get an instance of the model.
     *
     * @return mixed
     */
    protected function getModel()
    {
        return $this->app->make($this->getModelClass());
    }

    /**
     * Get the class for the model the refinery needs to use.
     *
     * @return mixed
     */
    protected abstract function getModelClass();

    /**
     * Tests the expected values exist post refining.
     *
     * @test
     */
    protected function test_expected_values_are_present()
    {
        foreach ($this->getExpectedItems() as $key) {
            $this->assertArrayHasKey($key, $this->getRefinery()->bring($this->getAttachments())->refine($this->getModel()));
        }
    }

    /**
     * Get the items that you expect to see post refining.
     *
     * @return array
     */
    protected abstract function getExpectedItems();

    /**
     * Get the items that should be attached to the refinery.
     *
     * @return array
     */
    protected abstract function getAttachments();

    /**
     * Check that the disallowed items do not appear after refining.
     *
     * @test
     */
    protected function test_disallowed_items_are_not_present()
    {
        foreach ($this->getDisallowedItems() as $key) {
            $this->assertArrayNotHasKey($key, $this->getRefinery()->bring($this->getAttachments())->refine($this->getModel()));
        }
    }

    /**
     * Get the items that should not be returned after refining
     * (eg. id)
     *
     * @return array
     */
    protected abstract function getDisallowedItems();

}