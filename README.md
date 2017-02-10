# V8Js snapshot benchmark


Run V8Js pwered redux react helloworld app with or without snapshot.

```
// digitalocean 512M / 1CPU 

OVERHEAD:    0.000 msec
BASELINE:    0.002 msec
HOST OS:     Linux
PHP VERSION: 7.1.1-1+deb.sury.org~xenial+1
MIN. TIME:   2000 msec
MIN. MARKS:  30

new V8Js without snapshot ........ 6.861 msec .. 1,957.176 points ....... 94.71% ......... 1.00x
new V8Js with snapshot ........... 7.244 msec .. 2,066.595 points ...... 100.00% ......... 1.06x

executeString() with snapshot ........... 0.329 msec .... 156.401 points ........ 3.57% ......... 1.00x
executeString() without snapshot ........ 9.222 msec .. 4,383.321 points ...... 100.00% ........ 28.03x

// new + executeString
V8 + internal snapshot ......... 4.484 msec .. 2,138.804 points ........ 4.03% ......... 1.00x
V8 + external snapshot  ....... 33.385 msec . 15,923.576 points ....... 30.03% ......... 7.45x
V8 ........................... 111.167 msec . 53,023.027 points ...... 100.00% ........ 24.79x
```

## Single run test

Compare the performance of the PHP template engine and V8Js powered Javascript view library.

```
$ composer install
$ ./run.ssh

// Twig
new : 8.14
Hello World
exec: 15.95
total: 24.58

// V8Js: Redux React
new : 11.60
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec: 212.91
total: 226.02

// V8Js + Snapshot: Redux React
new  16.93
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec 50.01
total: 70.16


// V8Js: Handlebar
new : 11.56
Hello World
exec: 22.07
total: 34.01

// v8js
V8 Engine Compiled Version => 5.2.371
V8 Engine Linked Version => 5.2.371
Version => 1.3.3
```

## About snapshot

 * [20x performance boost with V8Js snapshots](http://stesie.github.io/2016/02/snapshot-performance)
 * [https://github.com/phpv8/v8js/issues/205](https://github.com/phpv8/v8js/issues/205)

## Testing tool

 * [mindplay/benchpress](https://github.com/mindplay-dk/benchpress) by @mindplay-dk
