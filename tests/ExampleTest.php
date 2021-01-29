<?php

namespace Asorasoft\Plasgate\Tests;

use Orchestra\Testbench\TestCase;
use Asorasoft\Plasgate\PlasgateServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PlasgateServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
