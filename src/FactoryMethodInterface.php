<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod;

/**
 * Class FactoryMethodInterface
 * @package Creational\FactoryMethod
 */
interface FactoryMethodInterface
{

    /**
     * @param string $name
     * @return ProductInterface
     */
    public function getProduct(string $name): ProductInterface;
}
