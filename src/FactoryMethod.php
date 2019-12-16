<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod;

class FactoryMethod implements FactoryMethodInterface
{
    /**
     * @param string $product
     * @return AbstractProduct
     */
    public function create(string $product): AbstractProduct
    {
        if (class_exists($product)) {
            return new $product();
        }

        throw new \InvalidArgumentException("Class doesn't exist");
    }
}
