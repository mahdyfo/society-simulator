<?php

namespace App\Environments;

class Country
{
    private array $agents = [];

    public function addAgents(array $agents): static
    {
        $this->agents = array_merge($this->agents, $agents);

        return $this;
    }

    public function getAgents(): array
    {
        return $this->agents;
    }

    public function run(): void
    {
        foreach ($this->agents as $agent) {
            $agent->run($this);
        }
    }
}
