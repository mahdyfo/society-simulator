<?php

require_once 'vendor/autoload.php';

use App\Agent\Person;
use App\Attribute\Emotion;

// Agent
$person = new Person();

// Attribute
$emotion = new Emotion();
$emotion->setJoy(70)
    ->setTrust(20)
    ->setFear(50)
    ->setSurprise(50)
    ->setSadness(80)
    ->setDisgust(80)
    ->setAnger(70)
    ->setAnticipation(100);

$person->setAttribute('emotion', $emotion);

var_dump($person->getAttribute('emotion')->getSubEmotions());
