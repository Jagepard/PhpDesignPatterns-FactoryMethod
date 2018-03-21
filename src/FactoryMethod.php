<?php
/**
 * Date: 21.03.18
 * Time: 16:36
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\FactoryMethod;


/**
 * Class FactoryMethod
 * @package Creational\FactoryMethod
 */
class FactoryMethod implements InterfaceFactoryMethod
{

    /**
     * @param InterfaceProduct $product
     * @return InterfaceProduct
     */
    public function getProduct(InterfaceProduct $product): InterfaceProduct
    {
        return $product;
    }
}