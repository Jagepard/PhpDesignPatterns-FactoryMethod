## Table of contents
- [Creational\FactoryMethod\AbstractProduct](#creational_factorymethod_abstractproduct)
- [Creational\FactoryMethod\FactoryMethod](#creational_factorymethod_factorymethod)
- [Creational\FactoryMethod\FactoryMethodInterface](#creational_factorymethod_factorymethodinterface)
- [Creational\FactoryMethod\FirstProduct](#creational_factorymethod_firstproduct)
- [Creational\FactoryMethod\SecondProduct](#creational_factorymethod_secondproduct)
<hr>

<a id="creational_factorymethod_abstractproduct"></a>

### Class: Creational\FactoryMethod\AbstractProduct
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getClassName</strong>(): string</em><br>Gets the class name<br>Получает название класса|


<a id="creational_factorymethod_factorymethod"></a>

### Class: Creational\FactoryMethod\FactoryMethod
##### implements [Creational\FactoryMethod\FactoryMethodInterface](#creational_factorymethod_factorymethodinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>create</strong>( string $product ): Creational\FactoryMethod\AbstractProduct</em><br>Creates a product<br>Создает продукт|


<a id="creational_factorymethod_factorymethodinterface"></a>

### Class: Creational\FactoryMethod\FactoryMethodInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>create</strong>( string $product ): Creational\FactoryMethod\AbstractProduct</em><br>|


<a id="creational_factorymethod_firstproduct"></a>

### Class: Creational\FactoryMethod\FirstProduct
##### extends [Creational\FactoryMethod\AbstractProduct](#creational_factorymethod_abstractproduct)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getClassName</strong>(): string</em><br>Gets the class name<br>Получает название класса|


<a id="creational_factorymethod_secondproduct"></a>

### Class: Creational\FactoryMethod\SecondProduct
##### extends [Creational\FactoryMethod\AbstractProduct](#creational_factorymethod_abstractproduct)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getClassName</strong>(): string</em><br>Gets the class name<br>Получает название класса|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
