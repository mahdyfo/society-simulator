<?php

namespace App\Simulations;

use App\Agents\Person;
use App\Attributes\Emotion;
use App\Environments\Country;

class EmotionInteraction
{
    private function createAgents($count): array
    {
        $agents = [];
        for ($i = 0; $i < $count; $i++) {
            // Agent
            $person = new Person();

            // Attribute
            $emotion = new Emotion();
            $emotion->setJoy(mt_rand(0, 100))
                ->setTrust(mt_rand(0, 100))
                ->setFear(mt_rand(0, 100))
                ->setSurprise(mt_rand(0, 100))
                ->setSadness(mt_rand(0, 100))
                ->setDisgust(mt_rand(0, 100))
                ->setAnger(mt_rand(0, 100))
                ->setAnticipation(mt_rand(0, 100));

            $person->setAttribute('emotions', $emotion);

            $agents[] = $person;
        }

        return $agents;
    }

    public function run(): array
    {
        $agentsCount = 300;
        $agents = $this->createAgents($agentsCount);

        $environment = new Country();
        $environment->addAgents($agents);
        for ($i = 0; $i < 500; $i++) {
            $environment->run();
        }

        $totalEmotions = [];
        foreach ($environment->getAgents() as $agent) {
            // Sum each emotion
            foreach ($agent->getAttribute('emotions')->getAllEmotions() as $key => $value) {
                if (isset($totalEmotions[$key])) {
                    $totalEmotions[$key] += $value;
                } else {
                    $totalEmotions[$key] = $value;
                }
            }
        }

        // Average the emotions (divide by count)
        return array_map(fn ($item) => $item / $agentsCount, $totalEmotions);
    }
}
