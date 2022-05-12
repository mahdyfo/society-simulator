<?php

require_once 'vendor/autoload.php';

use App\Simulations\EmotionInteraction;

$simulation = new EmotionInteraction();
$results = $simulation->run();
print_r($results);
