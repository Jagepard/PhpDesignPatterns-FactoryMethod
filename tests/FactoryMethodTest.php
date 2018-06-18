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
     * @var FactoryMethod
     */
    protected $factory;

    protected function setUp(): void
    {
        $this->factory = new FactoryMethod();
    }

    public function testProducts()
    {
        $this->assertEquals($this->factory->getProduct('FirstProduct')->getClassName(), FirstProduct::class);
        $this->assertEquals($this->factory->getProduct('SecondProduct')->getClassName(), SecondProduct::class);
    }

    public function testFactoryMethod()
    {
        $this->assertInstanceOf(FactoryMethodInterface::class, $this->factory);
        $this->assertInstanceOf(ProductInterface::class, $this->factory->getProduct('FirstProduct'));
        $this->assertInstanceOf(ProductInterface::class, $this->factory->getProduct('SecondProduct'));
    }
}
