<?php

namespace App\Agents;

use App\Attributes\Emotion;
use App\Levers\Media;

class Person extends Agent
{
    private function watchMedia($environment)
    {
        // How much effect does the media have on this person, can be even calculated using their emotions, -100 to 100
        $effectThresholdMin = -20;
        $effectThresholdMax = 20;

        /** @var Media $media */
        $media = $environment->getMedia();

        if ($media) {
            $mediaEmotions = $media->getEmotions();
            $agentEmotions = $this->getAttribute('emotions');

            foreach ($mediaEmotions as $key => $value) {
                $value += $value * mt_rand(-$effectThresholdMin, $effectThresholdMax) / 100;
                $agentEmotions->{'set' . $key}($agentEmotions->{'get' . $key}() + $value);
            }
        }
    }

    public function run($environment)
    {
        $this->watchMedia($environment);

//        $population = count($environment->getAgents());
//
//        /** @var $randomPerson Person */
//        /** @var $randomPersonEmotions Emotion */
//        /** @var $personEmotions Emotion */
//        $randomPerson = $environment->getAgents()[mt_rand(0, $population - 1)];
//        $randomPersonEmotions = $randomPerson->getAttribute('emotions');
//
//        $personEmotions = $this->getAttribute('emotions');
//
//        if ($randomPersonEmotions->getHope() > 50) {
//            $personEmotions->setJoy($personEmotions->getJoy() + 10);
//        }
//        if ($randomPersonEmotions->getPessimism() > 50) {
//            $personEmotions->setJoy($personEmotions->getJoy() - 10);
//        }
    }
}
