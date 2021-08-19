<?php

namespace NorthernEstateAgencies\PackageBoilerplate\Tests;

use NorthernEstateAgencies\PackageBoilerplate\PackageBoilerplateServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PackageBoilerplateServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
