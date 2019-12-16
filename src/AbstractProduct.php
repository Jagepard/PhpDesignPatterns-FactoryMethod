<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod;

abstract class AbstractProduct
{
    /**
     * @return string
     */
    public function getClassName(): string
    {
        return get_called_class();
    }
}
