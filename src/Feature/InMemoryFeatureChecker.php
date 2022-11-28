<?php

namespace App\Feature;

use function in_array;

class InMemoryFeatureChecker implements FeatureChecker
{
    public function __construct(public readonly array $enabled = [])
    {
        //
    }

    public function isEnabled(string $feature): bool
    {
        return in_array($feature, $this->enabled);
    }
}