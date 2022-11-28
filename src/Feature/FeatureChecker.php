<?php

namespace App\Feature;

interface FeatureChecker
{
    /**
     * @param array $enabled The enabled feature flags
     */
    public function __construct(array $enabled = []);

    /**
     * Whether a feature is enabled
     *
     * @param string $feature
     * @return bool
     */
    public function isEnabled(string $feature): bool;
}