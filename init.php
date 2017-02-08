<?php

$blob = V8Js::createSnapshot(file_get_contents(__DIR__ . "/apps/redux/ssr.bundle.js"));
file_put_contents(__DIR__ . '/tmp/blob.bin', $blob);
