<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::run(function () {
    Loop::delay(1, function() {
        echo 'After timeout' . PHP_EOL;
    });
    echo 'Before timeout' . PHP_EOL;
});
