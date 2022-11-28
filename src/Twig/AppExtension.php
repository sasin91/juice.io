<?php

namespace App\Twig;

use App\Feature\FeatureChecker;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Twig extensions allow for custom filters, functions, tests & operators
 *
 * @see https://symfony.com/doc/current/templating/twig_extension.html
 */
final class AppExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('feature', [AppRuntime::class, 'feature'])
        ];
    }
}