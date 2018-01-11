<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::defer(function() {
    echo 'defer before loop' . PHP_EOL;
});

Loop::run(function ()  {
    Loop::defer(function() {
        echo 'defer inside loop' . PHP_EOL;
    });
    echo 'inside loop' . PHP_EOL;
});
