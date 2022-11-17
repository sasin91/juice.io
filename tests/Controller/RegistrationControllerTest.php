<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testCanRegisterANewUser()
    {
        $client = static::createClient();

        $crawler = $client->request(
            method:'POST',
            uri: '/register',
            parameters: [
                'registration_form[email]' => 'john@example.com',
                'registration_form[plainPassword]' => 'password',
                'registration_form[agreeTerms]' => 'yes'
            ]
        );

        $this->assertResponseIsSuccessful();
    }
}
