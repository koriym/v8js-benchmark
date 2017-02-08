
<?php
$code = sprintf('
%s
render(%s);',
    file_get_contents(__DIR__ . "/ssr.bundle.js"),
    json_encode(['name' => 'World'])
);

$t = microtime(true);
$v8 = new V8Js;
echo '// V8: Handlebar' . PHP_EOL;
printf("new : %2.2f\n", (microtime(true) - $t) * 1000);
$t = microtime(true);
echo $v8->executeString($code) . PHP_EOL;
printf("exec: %2.2f\n", (microtime(true) - $t) * 1000);$t = microtime(true);
printf("total: %2.2f\n\n", (microtime(true) -$_SERVER["REQUEST_TIME_FLOAT"]) * 1000);$t = microtime(true);
