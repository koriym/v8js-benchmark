<?php
$t = microtime(true);
$blob = file_get_contents(dirname(__DIR__, 2) . '/tmp/blob.bin');
$code = sprintf('
var window = this; render(%s);',
    json_encode(['hello' =>['name' => 'World']])
);
$t = microtime(true);
$v8 = new V8Js('PHP', [], [], true, $blob);
echo '// v8 + Snapshot: Redux React' . PHP_EOL;
printf("new  %2.2f\n", (microtime(true) - $t) * 1000);

$t = microtime(true);
echo $v8->executeString($code) . PHP_EOL;
printf("exec %2.2f\n", (microtime(true) - $t) * 1000);
printf("total: %2.2f\n\n", (microtime(true) -$_SERVER["REQUEST_TIME_FLOAT"]) * 1000);$t = microtime(true);
