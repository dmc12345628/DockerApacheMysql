<?php

namespace FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BonjourControllerTest extends WebTestCase
{
    public function testSalut()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/salut');
    }

}
