<?php

namespace App\Attribute;

class Emotion
{
    // Main emotions
    private int $joy;
    private int $trust;
    private int $fear;
    private int $surprise;
    private int $sadness;
    private int $disgust;
    private int $anger;
    private int $anticipation;

    // Main emotions setters and getters
    public function getJoy(): int
    {
        return $this->joy;
    }

    public function setJoy(int $joy): static
    {
        $this->joy = $joy;

        return $this;
    }

    public function getTrust(): int
    {
        return $this->trust;
    }

    public function setTrust(int $trust): static
    {
        $this->trust = $trust;

        return $this;
    }

    public function getFear(): int
    {
        return $this->fear;
    }

    public function setFear(int $fear): static
    {
        $this->fear = $fear;

        return $this;
    }

    public function getSurprise(): int
    {
        return $this->surprise;
    }

    public function setSurprise(int $surprise): static
    {
        $this->surprise = $surprise;

        return $this;
    }

    public function getSadness(): int
    {
        return $this->sadness;
    }

    public function setSadness(int $sadness): static
    {
        $this->sadness = $sadness;

        return $this;
    }

    public function getDisgust(): int
    {
        return $this->disgust;
    }

    public function setDisgust(int $disgust): static
    {
        $this->disgust = $disgust;

        return $this;
    }

    public function getAnger(): int
    {
        return $this->anger;
    }

    public function setAnger(int $anger): static
    {
        $this->anger = $anger;

        return $this;
    }

    public function getAnticipation(): int
    {
        return $this->anticipation;
    }

    public function setAnticipation(int $anticipation): static
    {
        $this->anticipation = $anticipation;

        return $this;
    }

    // Sub emotions setters and getters
    public function getOptimism(): int
    {
        return round(($this->getAnticipation() + $this->getJoy()) / 2);
    }

    public function getHope(): int
    {
        return round(($this->getAnticipation() + $this->getTrust()) / 2);
    }

    public function getAnxiety(): int
    {
        return round(($this->getAnticipation() + $this->getFear()) / 2);
    }

    public function getLove(): int
    {
        return round(($this->getJoy() + $this->getTrust()) / 2);
    }

    public function getGuilt(): int
    {
        return round(($this->getJoy() + $this->getFear()) / 2);
    }

    public function getDelight(): int
    {
        return round(($this->getJoy() + $this->getSurprise()) / 2);
    }

    public function getSubmission(): int
    {
        return round(($this->getTrust() + $this->getFear()) / 2);
    }

    public function getCuriosity(): int
    {
        return round(($this->getTrust() + $this->getSurprise()) / 2);
    }

    public function getSentimentality(): int
    {
        return round(($this->getTrust() + $this->getSadness()) / 2);
    }

    public function getAwe(): int
    {
        return round(($this->getFear() + $this->getSurprise()) / 2);
    }

    public function getDespair(): int
    {
        return round(($this->getFear() + $this->getSadness()) / 2);
    }

    public function getShame(): int
    {
        return round(($this->getFear() + $this->getDisgust()) / 2);
    }

    public function getDisapproval(): int
    {
        return round(($this->getSurprise() + $this->getSadness()) / 2);
    }

    public function getUnbelief(): int
    {
        return round(($this->getSurprise() + $this->getDisgust()) / 2);
    }

    public function getOutrage(): int
    {
        return round(($this->getSurprise() + $this->getAnger()) / 2);
    }

    public function getRemorse(): int
    {
        return round(($this->getSadness() + $this->getDisgust()) / 2);
    }

    public function getEnvy(): int
    {
        return round(($this->getSadness() + $this->getAnger()) / 2);
    }

    public function getPessimism(): int
    {
        return round(($this->getSadness() + $this->getAnticipation()) / 2);
    }

    public function getContempt(): int
    {
        return round(($this->getDisgust() + $this->getAnger()) / 2);
    }

    public function getCynicism(): int
    {
        return round(($this->getDisgust() + $this->getAnticipation()) / 2);
    }

    public function getMorbidness(): int
    {
        return round(($this->getDisgust() + $this->getJoy()) / 2);
    }

    public function getAggressiveness(): int
    {
        return round(($this->getAnger() + $this->getAnticipation()) / 2);
    }

    public function getPride(): int
    {
        return round(($this->getAnger() + $this->getJoy()) / 2);
    }

    public function getDominance(): int
    {
        return round(($this->getAnger() + $this->getTrust()) / 2);
    }

    public function getBittersweetness(): int
    {
        return round(($this->getJoy() + $this->getSadness()) / 2);
    }

    public function getAmbivalence(): int
    {
        return round(($this->getTrust() + $this->getDisgust()) / 2);
    }

    public function getFrozenness(): int
    {
        return round(($this->getFear() + $this->getAnger()) / 2);
    }

    public function getConfusion(): int
    {
        return round(($this->getSurprise() + $this->getAnticipation()) / 2);
    }

    public function getMainEmotions(): array
    {
        return [
            'joy' => $this->getJoy(),
            'trust' => $this->getTrust(),
            'fear' => $this->getFear(),
            'surprise' => $this->getSurprise(),
            'sadness' => $this->getSadness(),
            'disgust' => $this->getDisgust(),
            'anger' => $this->getAnger(),
            'anticipation' => $this->getAnticipation(),
        ];
    }

    public function getSubEmotions(): array
    {
        return [
            'optimism' => $this->getOptimism(),
            'hope' => $this->getHope(),
            'anxiety' => $this->getAnxiety(),
            'love' => $this->getLove(),
            'guilt' => $this->getGuilt(),
            'delight' => $this->getDelight(),
            'submission' => $this->getSubmission(),
            'curiosity' => $this->getCuriosity(),
            'sentimentality' => $this->getSentimentality(),
            'awe' => $this->getAwe(),
            'despair' => $this->getDespair(),
            'shame' => $this->getShame(),
            'disapproval' => $this->getDisapproval(),
            'unbelief' => $this->getUnbelief(),
            'outrage' => $this->getOutrage(),
            'remorse' => $this->getRemorse(),
            'envy' => $this->getEnvy(),
            'pessimism' => $this->getPessimism(),
            'contempt' => $this->getContempt(),
            'cynicism' => $this->getCynicism(),
            'morbidness' => $this->getMorbidness(),
            'aggressiveness' => $this->getAggressiveness(),
            'pride' => $this->getPride(),
            'dominance' => $this->getDominance(),
            'bittersweetness' => $this->getBittersweetness(),
            'ambivalence' => $this->getAmbivalence(),
            'frozenness' => $this->getFrozenness(),
            'confusion' => $this->getConfusion(),
        ];
    }

    public function getAllEmotions(): array
    {
        return array_merge($this->getMainEmotions(), $this->getSubEmotions());
    }
}