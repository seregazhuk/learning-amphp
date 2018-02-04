<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::run(function () {
    Loop::repeat(500, function ($watcherId) {
        static $counter = 1;
        if($counter === 5) {
            Loop::cancel($watcherId);
        }
        echo 'Hello world' . PHP_EOL;
        $counter++;
    });
});

echo 'After the loop' . PHP_EOL;
