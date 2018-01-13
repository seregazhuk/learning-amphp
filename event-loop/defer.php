<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::defer(function() {
    echo 'first iteration' . PHP_EOL;
});

Loop::run(function ()  {
    Loop::defer(function() {
        echo 'third iteration' . PHP_EOL;
    });
    echo 'second iteration' . PHP_EOL;
});
