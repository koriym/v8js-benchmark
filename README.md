# V8Js snapshot benchmark


Run V8Js with or without snapshot.

```
$ composer install
$ php init.php
$ php main.php

// digitalocean 1G RAM / 1CPU 

OVERHEAD:    0.000 msec
BASELINE:    0.002 msec
HOST OS:     Linux
PHP VERSION: 7.2.4-1+ubuntu14.04.1+deb.sury.org+1
MIN. TIME:   2000 msec
MIN. MARKS:  30

* Completed: new V8Js without snapshot (570 iterations in 3.0 sec, avg. 5.266 msec)
* Completed: new V8Js with snapshot (300 iterations in 3.1 sec, avg. 10.183 msec)

Results
-------

new V8Js without snapshot ........ 5.233 msec .. 2,399.454 points ....... 51.76% ......... 1.00x
new V8Js with snapshot .......... 10.110 msec .. 4,635.606 points ...... 100.00% ......... 1.93x
OVERHEAD:    0.000 msec
BASELINE:    0.002 msec
HOST OS:     Linux
PHP VERSION: 7.2.4-1+ubuntu14.04.1+deb.sury.org+1
MIN. TIME:   2000 msec
MIN. MARKS:  30

* Completed: executeString() without snapshot (150 iterations in 2.3 sec, avg. 15.486 msec)
* Completed: executeString() with snapshot (4,305 iterations in 2.0 sec, avg. 0.469 msec)

Results
-------

executeString() with snapshot ........... 0.450 msec .... 215.473 points ........ 3.13% ......... 1.00x
executeString() without snapshot ....... 14.367 msec .. 6,878.205 points ...... 100.00% ........ 31.92x
OVERHEAD:    0.000 msec
BASELINE:    0.002 msec
HOST OS:     Linux
PHP VERSION: 7.2.4-1+ubuntu14.04.1+deb.sury.org+1
MIN. TIME:   2000 msec
MIN. MARKS:  30

* Completed: V8 (30 iterations in 4.8 sec, avg. 158.373 msec)
* Completed: V8 + external snapshot  (90 iterations in 4.2 sec, avg. 46.213 msec)
* Completed: V8 + internal snapshot (420 iterations in 2.8 sec, avg. 6.751 msec)

Results
-------

V8 + internal snapshot ......... 6.687 msec .. 2,883.326 points ........ 4.25% ......... 1.00x
V8 + external snapshot  ....... 45.457 msec . 19,599.813 points ....... 28.89% ......... 6.80x
V8 ........................... 157.335 msec . 67,839.129 points ...... 100.00% ........ 23.53x
```

## Single run test

Compare the performance of the PHP template engine and V8Js powered Javascript view library.

```// Twig
new : 6.11
Hello World
exec: 12.26
total: 18.76

// V8Js: Redux React
new : 8.91
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec: 150.69
total: 160.88

// V8Js + Snapshot: Redux React
new  11.84
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec 32.36
total: 46.64


// V8Js: Handlebar
new : 7.32
Hello World
exec: 12.54
total: 20.40
```

## About snapshot

 * [20x performance boost with V8Js snapshots](http://stesie.github.io/2016/02/snapshot-performance)
 * [https://github.com/phpv8/v8js/issues/205](https://github.com/phpv8/v8js/issues/205)

## Testing tool

 * [mindplay/benchpress](https://github.com/mindplay-dk/benchpress) by @mindplay-dk
