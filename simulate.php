<?php

require_once 'vendor/autoload.php';

use App\Person;

$person = new Person();
$person->emotion->setJoy(40);
$person->emotion->setTrust(60);
$person->emotion->setFear(50);
$person->emotion->setSurprise(15);
$person->emotion->setSadness(80);
$person->emotion->setDisgust(60);
$person->emotion->setAnger(60);
$person->emotion->setAnticipation(85);

var_dump($person->emotion->getSubEmotions());
