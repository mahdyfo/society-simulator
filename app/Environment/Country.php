<?php

namespace App\Environment;

class Country
{
    private array $agents;

    public function addAgent($agent): static
    {
        $this->agents[] = $agent;

        return $this;
    }
}
