<?php

namespace AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CinemaControllerControllerTest extends WebTestCase
{
    public function testDetailcinema()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/detailCinema');
    }

    public function testDetailfilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/detailFilm');
    }

    public function testAddcinema()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCinema');
    }

    public function testAddfilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addFilm');
    }

    public function testGestfilm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gestFilm');
    }

}
