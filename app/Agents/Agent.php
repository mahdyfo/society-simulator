<?php

namespace App\Agents;

class Agent
{
    private array $attributes;

    public function setAttribute($name, $attributeObject): static
    {
        $this->attributes[$name] = $attributeObject;

        return $this;
    }

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }
}
