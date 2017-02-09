# V8Js snapshot benchmark


Run V8Js pwered redux react helloworld app with or without snapshot.

```
OVERHEAD:    0.000 msec
BASELINE:    0.002 msec
HOST OS:     Darwin
PHP VERSION: 7.1.0
MIN. TIME:   2000 msec
MIN. MARKS:  30

new V8Js without snapshot ........ 6.529 msec .. 4,252.041 points ....... 71.56% ......... 1.00x
new V8Js with snapshot ........... 9.124 msec .. 5,941.913 points ...... 100.00% ......... 1.40x

executeString() with snapshot ........... 0.174 msec .... 117.127 points ........ 2.52% ......... 1.00x
executeString() without snapshot ........ 6.911 msec .. 4,646.427 points ...... 100.00% ........ 39.67x

V8 + internal snapshot ......... 7.459 msec .. 4,961.625 points ....... 10.41% ......... 1.00x // simulated
V8 + external snapshot  ....... 26.858 msec . 17,866.169 points ....... 37.48% ......... 3.60x
V8 ............................ 71.668 msec . 47,674.422 points ...... 100.00% ......... 9.61x
```

## Single run test

Compare the performance of the PHP template engine and V8Js powered Javascript view library.

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

## Testing tool

 * [mindplay/benchpress](https://github.com/mindplay-dk/benchpress) by @mindplay-dk