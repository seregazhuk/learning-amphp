<?php

require '../vendor/autoload.php';

use Amp\Loop;

$hello = function () {
    echo 'Hello world' . PHP_EOL;
};
$greeting = function () {
    echo 'Hi' . PHP_EOL;
};

Loop::run(
    function () use ($hello, $greeting) {
        Loop::delay(1, $hello);
        $greeting();
    }
);
