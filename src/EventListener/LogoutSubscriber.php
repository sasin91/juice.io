<?php
namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;

/**
 * @see https://symfony.com/doc/current/security.html#customizing-logout
 */
final class LogoutSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly UrlGeneratorInterface $urlGenerator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [LogoutEvent::class => 'onLogout'];
    }

    public function onLogout(LogoutEvent $event): void
    {
        // configure a custom logout response to the homepage
        $response = new RedirectResponse(
            $this->urlGenerator->generate('welcome'),
            Response::HTTP_SEE_OTHER
        );
        $event->setResponse($response);
    }
}