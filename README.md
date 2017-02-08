# V8Js Benchmarking

Compare the performance of the PHP template engine and V8Js powered Javascript view library.

## Run

```
$ composer install
$ ./run.ssh

// Twig
new : 3.23
Hello World
exec: 9.47
total: 12.94

// V8Js: Redux React
new : 14.42
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec: 75.30
total: 90.99

// V8Js + Snapshot: Redux React
new  17.79
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec 19.26
total: 39.53

// V8Js: Handlebar
new : 13.18
Hello World
exec: 7.39
total: 21.00

// v8js
// V8 Engine Compiled Version => 5.1.281.47
// V8 Engine Linked Version => 5.1.281.47
// Version => 1.3.3
```

## About snapshot

 * [20x performance boost with V8Js snapshots](http://stesie.github.io/2016/02/snapshot-performance)
 * [https://github.com/phpv8/v8js/issues/205](https://github.com/phpv8/v8js/issues/205)
