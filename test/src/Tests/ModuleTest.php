<?php

namespace LrphptTest\DoctrineHydrationModule\Tests;

use Lrphpt\DoctrineHydrationModule\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest.
 */
class ModuleTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_be_initializable()
    {
        $module = new Module();
        $this->assertInstanceOf('Lrphpt\DoctrineHydrationModule\Module', $module);
    }

    /**
     * @test
     */
    public function it_should_provide_configuration()
    {
        $module = new Module();
        $this->assertInternalType('array', $module->getConfig());
    }
}
