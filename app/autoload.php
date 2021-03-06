<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->register();

$src = array(
    'Controller' => __DIR__ . '/../src'
);

$loader->registerNamespaces($src);
