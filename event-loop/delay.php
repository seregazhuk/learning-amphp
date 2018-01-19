<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::run(function () {
    Loop::delay(1000, function() {
        echo date('H:i:s') . ' After timeout' . PHP_EOL;
    });
    echo date('H:i:s') . ' Before timeout' . PHP_EOL;
});
