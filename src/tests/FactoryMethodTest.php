<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Creational\FactoryMethod\FactoryMethod;
use Creational\FactoryMethod\InterfaceFactoryMethod;
use Creational\FactoryMethod\InterfaceProduct;
use Creational\FactoryMethod\FirstProduct;
use Creational\FactoryMethod\SecondProduct;


/**
 * Class FactoryMethodTest
 */
class FactoryMethodTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $factory;
    /**
     * @var
     */
    protected $firstProduct;
    /**
     * @var
     */
    protected $secondProduct;

    protected function setUp(): void
    {
        $this->factory       = new FactoryMethod();
        $this->firstProduct  = $this->factory->getProduct(new FirstProduct());
        $this->secondProduct = $this->factory->getProduct(new SecondProduct());
    }

    public function testFactoryMethod()
    {
        $this->assertInstanceOf(InterfaceFactoryMethod::class, $this->getFactory());
        $this->assertInstanceOf(InterfaceProduct::class, $this->getFirstProduct());
        $this->assertInstanceOf(InterfaceProduct::class, $this->getSecondProduct());
    }

    public function testProducts()
    {
        $this->assertEquals($this->getFirstProduct()->getClassName(), FirstProduct::class);
        $this->assertEquals($this->getSecondProduct()->getClassName(), SecondProduct::class);
    }

    /**
     * @return mixed
     */
    public function getFactory(): FactoryMethod
    {
        return $this->factory;
    }

    /**
     * @return FirstProduct
     */
    public function getFirstProduct(): FirstProduct
    {
        return $this->firstProduct;
    }

    /**
     * @return SecondProduct
     */
    public function getSecondProduct(): SecondProduct
    {
        return $this->secondProduct;
    }
}