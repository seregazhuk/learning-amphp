<?php

$logger = call_user_func(function() {
    while(true) {
        echo 'Log: ' . yield . "\n";
    }
});

$logger->send('Hello ');
$logger->send('world');
