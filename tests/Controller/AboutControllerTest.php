<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AboutControllerTest extends WebTestCase
{
    public function testItRendersAPage()
    {
        $client = static::createClient();

        $crawler = $client->request(
            method: 'GET',
            uri: '/about'
        );

        $this->assertResponseIsSuccessful();
    }
}
