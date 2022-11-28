<?php

namespace App\Twig;

use App\Feature\FeatureChecker;
use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{
    public function __construct(public readonly FeatureChecker $feature)
    {
        //
    }

    public function feature(...$params): bool
    {
        return $this->feature->isEnabled(...$params);
    }
}