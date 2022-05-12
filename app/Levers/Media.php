<?php

namespace App\Levers;

class Media
{
    private array $emotions = [];

    public function spreadEmotion(string $emotion, float $amount): static
    {
        if (isset($this->emotions[$emotion])) {
            $this->emotions[$emotion] = $amount;
        } else {
            $this->emotions[$emotion] += $amount;
        }

        return $this;
    }

    public function getEmotions(): array
    {
        return $this->emotions;
    }
}