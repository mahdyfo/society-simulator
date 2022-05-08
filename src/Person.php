<?php

namespace App;

class Person
{
    public Emotion $emotion;

    public function __construct()
    {
        $this->emotion = new Emotion();
    }

    public function setPersonalityType($type)
    {
        //
    }
}