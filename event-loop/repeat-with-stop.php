<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::run(function () {
    Loop::repeat(1, function ($watcherId) {
        static $counter = 0;
        echo 'Hello world' . PHP_EOL;
        if($counter++ > 5) {
            Loop::cancel($watcherId);
        }
    });
});

echo 'After the loop' . PHP_EOL;
