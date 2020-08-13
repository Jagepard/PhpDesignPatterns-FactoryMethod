<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod\Tests;

use Creational\FactoryMethod\{FirstProduct, SecondProduct, FactoryMethod, AbstractProduct, FactoryMethodInterface};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    private FactoryMethodInterface $factory;

    protected function setUp(): void
    {
        $this->factory = new FactoryMethod();
    }

    public function testProducts()
    {
        $this->assertEquals(FirstProduct::class, $this->factory->create(FirstProduct::class)->getClassName());
        $this->assertEquals(SecondProduct::class, $this->factory->create(SecondProduct::class)->getClassName());
    }

    public function testInstances()
    {
        $this->assertInstanceOf(FactoryMethodInterface::class, $this->factory);
        $this->assertInstanceOf(AbstractProduct::class, $this->factory->create(FirstProduct::class));
        $this->assertInstanceOf(AbstractProduct::class, $this->factory->create(SecondProduct::class));
    }
}
