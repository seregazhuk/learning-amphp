<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::run(function ()  {
    Loop::repeat(500, function () {
        echo 'Hello world' . PHP_EOL;
    });
});
