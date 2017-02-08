<?php


$t = microtime(true);
require_once dirname(__DIR__) . '/vendor/autoload.php';
$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}',
));
$twig = new Twig_Environment($loader);
echo '// Twig' . PHP_EOL;
printf("new : %2.2f\n", (microtime(true) - $t) * 1000);$t = microtime(true);

$t = microtime(true);
echo $twig->render('index', array('name' => 'World')) . PHP_EOL;
printf("exec: %2.2f\n", (microtime(true) - $t) * 1000);$t = microtime(true);

printf("total: %2.2f\n\n", (microtime(true) -$_SERVER["REQUEST_TIME_FLOAT"]) * 1000);$t = microtime(true);
