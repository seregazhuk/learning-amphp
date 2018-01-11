<?php

require '../vendor/autoload.php';

$asyncTask = function() {
    yield 'a';
};


$promise = Amp\call($asyncTask);
