<?php
/**
 * Date: 21.03.18
 * Time: 16:39
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\FactoryMethod;


/**
 * Class FirstProduct
 * @package Creational\FactoryMethod
 */
class FirstProduct implements InterfaceProduct
{

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return get_called_class();
    }
}