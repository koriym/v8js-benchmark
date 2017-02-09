<?php

require __DIR__ . '/vendor/autoload.php';

use mindplay\benchpress\Benchmark;

$blob = file_get_contents(__DIR__ . '/tmp/blob.bin');
$code = sprintf('
%s
var window = this; render(%s);',
    file_get_contents(__DIR__ . "/apps/redux/ssr.bundle.js"),
    json_encode(['hello' =>['name' => 'World']])
);

$snapCode = sprintf('
var window = this; render(%s);',
    json_encode(['hello' =>['name' => 'World']])
);

new_test: {
    $bench = new Benchmark();
    $bench->add('new V8Js without snapshot', function () {
        new V8Js();
    });
    $bench->add('new V8Js with snapshot', function () use ($blob) {
        new V8Js('s', [], [], true, $blob);
    });
    $bench->run();
}

executeString_test: {
    $bench = new Benchmark();
    $v8 = new V8Js();
    $bench->add('executeString() without snapshot', function () use ($v8, $code) {
        $v8->executeString($code);

    });
    $snapV8 = new V8Js('snapshot', [], [], true, $blob);
    $bench->add('executeString() with snapshot', function () use ($snapV8, $blob, $snapCode) {
    $snapV8->executeString($snapCode);
    });
    $bench->run();
}

new_plus_executeString_test: {
    $bench = new Benchmark();
    $bench->add('V8', function () use ($code) {
        $v8 = new V8Js();
        $v8->executeString($code);

    });
    $bench->add('V8 + external snapshot ', function () use ($blob, $snapCode) {
        $snapV8 = new V8Js('snapshot', [], [], true, $blob);
        $snapV8->executeString($snapCode);
    });
    $bench->add('V8 + internal snapshot', function () use ($snapV8, $blob, $snapCode) {
        new V8Js(); // simulated internal snapshot V8
        $snapV8->executeString($snapCode);
    });
    $bench->run();
}
