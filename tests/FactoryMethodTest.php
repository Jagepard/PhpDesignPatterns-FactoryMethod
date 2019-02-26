<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod\Tests;

use Creational\FactoryMethod\FirstProduct;
use Creational\FactoryMethod\SecondProduct;
use Creational\FactoryMethod\FactoryMethod;
use Creational\FactoryMethod\ProductInterface;
use Creational\FactoryMethod\FactoryMethodInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class FactoryMethodTest
 */
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
        $this->assertEquals($this->getFactory()->create(FirstProduct::class)->getClassName(), FirstProduct::class);
        $this->assertEquals($this->getFactory()->create(SecondProduct::class)->getClassName(), SecondProduct::class);
    }

    public function testFactoryMethod()
    {
        $this->assertInstanceOf(FactoryMethodInterface::class, $this->getFactory());
        $this->assertInstanceOf(ProductInterface::class, $this->getFactory()->create(FirstProduct::class));
        $this->assertInstanceOf(ProductInterface::class, $this->getFactory()->create(SecondProduct::class));
    }

    /**
     * @return FactoryMethod
     */
    public function getFactory(): FactoryMethodInterface
    {
        return $this->factory;
    }
}
