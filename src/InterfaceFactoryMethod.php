<?php
/**
 * Date: 21.03.18
 * Time: 16:35
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\FactoryMethod;


/**
 * Interface InterfaceFactoryMethod
 * @package Creational\FactoryMethod
 */
interface InterfaceFactoryMethod
{

    /**
     * @param InterfaceProduct $product
     * @return InterfaceProduct
     */
    public function getProduct(InterfaceProduct $product): InterfaceProduct;
}