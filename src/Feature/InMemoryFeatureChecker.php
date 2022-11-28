<?php

namespace App\Feature;

class InMemoryFeatureChecker implements FeatureChecker
{
    public function __construct(public readonly array $enabled = [])
    {
        //
    }

    public function isEnabled(string $feature): bool
    {
        return $this->enabled[$feature] ?? false;
    }
}