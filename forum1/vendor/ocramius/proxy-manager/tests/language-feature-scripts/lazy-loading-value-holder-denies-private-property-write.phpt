--TEST--
Verifies that generated lazy loading value holders disallow private property direct write
--FILE--
<?php

require_once __DIR__ . '/init.php';

class Kitchen
{
    private $sweets;
}

$factory = new \ProxyManager\Factory\LazyLoadingValueHolderFactory($configuration);

$proxy = $factory->createProxy('Kitchen', function (& $wrapped, $proxy, $method, array $parameters, & $initializer) {
    $initializer = null;
    $wrapped     = new Kitchen();
});

$proxy->sweets = 'stolen';
?>
--EXPECTF--
%SFatal error: Cannot access %s property %s on line %d