<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use function random_bytes;

class LoginControllerTest extends WebTestCase
{
    public function testCanLogin(): void
    {
        $client = static::createClient();
        $client->followRedirects();

        $userRepository = static::getContainer()->get(UserRepository::class);
        $user = new User();
        $user->setEmail(sha1(random_bytes(5)).'@example.com');
        $user->setPassword(
            static::getContainer()->get(UserPasswordHasherInterface::class)->hashPassword(
                $user,
                'password'
            )
        );

        $userRepository->save($user, true);

        $crawler = $client->request('POST', '/login', [
            '_username' => $user->getEmail(),
            '_password' => 'password'
        ]);

        $this->assertResponseIsSuccessful();
    }
}
