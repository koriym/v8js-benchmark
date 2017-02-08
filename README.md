# V8Js Benchmarking

Compare `Twig` and `V8Js` powered Redux React.

## Run

```
$ composer install
$ ./run.ssh

// Twig
new : 9.57
Hello World
exec: 21.70
total: 31.49

// V8: Redux React
new : 12.73
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec: 80.92
total: 95.01

// v8 + Snapshot: Redux React
new  15.35
<div data-reactroot="" data-reactid="1" data-react-checksum="1124870957"><!-- react-text: 2 -->Hello <!-- /react-text --><!-- react-text: 3 -->World<!-- /react-text --></div>
exec 18.99
total: 36.77

// V8: Handlebar
new : 12.88
Hello World
exec: 7.32
total: 20.85

// v8js
// V8 Engine Compiled Version => 5.1.281.47
// V8 Engine Linked Version => 5.1.281.47
// Version => 1.3.3
```