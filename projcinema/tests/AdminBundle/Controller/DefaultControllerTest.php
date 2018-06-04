<?php

namespace AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        var_dump($client->getResponse()->getStatusCode());

        //$this->assertContains('Hello World', $client->getResponse()->getContent());
        $this->assertGreaterThan(1, $crawler->filter('a.btn.btn-info')->count());

        $link = $crawler->selectLink('Détail')->first()->link();
        $crawler = $client->click($link);


        $this->assertContains('Gran Plaza 1', $client->getResponse()->getContent());
    }
}
