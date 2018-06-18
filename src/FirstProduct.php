<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod;

/**
 * Class FirstProduct
 * @package Creational\FactoryMethod
 */
class FirstProduct implements ProductInterface
{

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return get_called_class();
    }
}
