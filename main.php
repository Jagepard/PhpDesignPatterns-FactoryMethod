<?php

namespace Creational\FactoryMethod;

require_once "vendor/autoload.php";

$factory = new FactoryMethod();

try {
    $firstProduct  = $factory->create(FirstProduct::class);
    $secondProduct = $factory->create(SecondProduct::class);

    printf("%s" . PHP_EOL, $firstProduct->getClassName());
    printf("%s" . PHP_EOL, $secondProduct->getClassName());
} catch (\Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "\n";
}
