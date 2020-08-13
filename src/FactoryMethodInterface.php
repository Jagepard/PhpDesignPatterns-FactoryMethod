<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod;

interface FactoryMethodInterface
{
    public function create(string $product): AbstractProduct;
}
