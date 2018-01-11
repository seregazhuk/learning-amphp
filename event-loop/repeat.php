<?php

require '../vendor/autoload.php';

use Amp\Loop;

$hello = function () {
    echo 'Hello world' . PHP_EOL;
};

Loop::run(
    function () use ($hello) {
        Loop::repeat(1, $hello);
        Loop::stop();
    }
);
