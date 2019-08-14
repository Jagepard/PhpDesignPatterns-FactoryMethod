<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod;

class FactoryMethod implements FactoryMethodInterface
{
    /**
     * @param string $product
     * @return ProductInterface
     */
    public function create(string $product): ProductInterface
    {
        if (class_exists($product)) {
            return new $product();
        }

        throw new \InvalidArgumentException("Class doesn't exist");
    }
}
