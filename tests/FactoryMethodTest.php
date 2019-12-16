<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod\Tests;

use Creational\FactoryMethod\FirstAbstractProduct;
use Creational\FactoryMethod\SecondAbstractProduct;
use Creational\FactoryMethod\FactoryMethod;
use Creational\FactoryMethod\AbstractProduct;
use Creational\FactoryMethod\FactoryMethodInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var FactoryMethodInterface
     */
    private $factory;

    protected function setUp(): void
    {
        $this->factory = new FactoryMethod();
    }

    public function testProducts()
    {
        $this->assertEquals($this->factory->create(FirstAbstractProduct::class)->getClassName(), FirstAbstractProduct::class);
        $this->assertEquals($this->factory->create(SecondAbstractProduct::class)->getClassName(), SecondAbstractProduct::class);
    }

    public function testInstances()
    {
        $this->assertInstanceOf(FactoryMethodInterface::class, $this->factory);
        $this->assertInstanceOf(AbstractProduct::class, $this->factory->create(FirstAbstractProduct::class));
        $this->assertInstanceOf(AbstractProduct::class, $this->factory->create(SecondAbstractProduct::class));
    }
}
