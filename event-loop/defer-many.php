<?php

require '../vendor/autoload.php';

use Amp\Loop;

Loop::defer(function() {
    echo "1\n";
});

Loop::defer(function() {
    echo "2\n";
});

Loop::defer(function() {
    echo "3\n";
});

Loop::run();
