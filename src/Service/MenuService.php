<?php

namespace App\Service;

use Symfony\Contracts\Translation\TranslatorInterface;

class MenuService
{
    public function __construct(
        public readonly TranslatorInterface $translator
    )
    {

    }

    public function links()
    {
        return [
            [
                'label' => $this->translator->trans('menu.welcome'),
                'href' => 'welcome'
            ]
        ];
    }
}