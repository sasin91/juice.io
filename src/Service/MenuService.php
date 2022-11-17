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

    private function trans(string $id): string
    {
        return $this->translator->trans(
            id: "menu.$id",
            domain: 'services'
        );
    }

    public function links()
    {
        return [
            [
                'label' => $this->translator->trans(
                    id: "menu.welcome",
                    domain: 'services'
                ),
                'href' => 'welcome'
            ],
            [
                'label' => $this->translator->trans(
                    id: "menu.about",
                    domain: 'services'
                ),
                'href' => 'about'
            ]
        ];
    }
}