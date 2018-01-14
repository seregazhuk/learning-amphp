<?php

require '../vendor/autoload.php';

use Amp\Loop;

$watcherId = Loop::repeat(500, function() {
    echo 'Repeat' . PHP_EOL;
});

Loop::delay(1500, function() use ($watcherId) {
    echo 'Pausing watcher' . PHP_EOL;
    Loop::disable($watcherId);
});

Loop::delay(2000, function() use ($watcherId){
    echo 'Resuming watcher' . PHP_EOL;
    Loop::enable($watcherId);
});

Loop::run();