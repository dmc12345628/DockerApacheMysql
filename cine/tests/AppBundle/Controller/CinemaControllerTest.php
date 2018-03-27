<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 28/02/2018
 * Time: 11:28
 */

namespace Tests\AppBundle\Controller;

use AppBundle\Controller\CinemaController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CinemaControllerTest extends WebTestCase
{
    // tests
    public function testGetCinemasAction()
    {
        $client = static::createClient();

        $client->request('GET', 'http://cine.ws/cinemas');
        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));

        $cinemas = $response->getContent();
        $this->assertJson($cinemas);

        $cinemas = json_decode($cinemas);
        $this->assertGreaterThan(1, count($cinemas));
    }

    public function testGetCinemaAction()
    {
        $client = static::createClient();

        $client->request('GET', 'http://cine.ws/cinemas/2');
        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));

        $cinema = $response->getContent();
        $this->assertJson($cinema);

        $this->getCinema(2, 'Gran Plaza 1');
    }

    public function testPostCinemaAction()
    {
        $client = static::createClient();

        $nomCinema = 'Test cinema 4';

        $client->request('POST', 'http://cine.ws/cinemas', array(
            'nom' => $nomCinema,
            'adresse' => 'Calle test'));
        $response = $client->getResponse();
        $this->assertEquals(201, $response->getStatusCode());
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));

        $cinema = $response->getContent();
        $this->assertJson($cinema);

        $this->validCinema($cinema, $nomCinema);

        $cinema = json_decode($cinema);
        $this->getCinema($cinema->id, $nomCinema);
    }

    public function testRemoveCinemaAction()
    {

    }

    public function testUpdateCinemaAction()
    {

    }

    public function testPatchCinemaAction()
    {

    }

    // private methods
    private function validCinema($cinema, $nomCinema)
    {
        $cinema = json_decode($cinema, true);
        $this->assertArrayHasKey('id', $cinema);
        $this->assertArrayHasKey('nom', $cinema);
        $this->assertArrayHasKey('adresse', $cinema);
        $this->assertArrayHasKey('accessibilite', $cinema);
        $this->assertArrayHasKey('salles', $cinema);
        $this->assertEquals($cinema['nom'], $nomCinema);
    }

    private function getCinema($id, $nom)
    {
        $client = static::createClient();

        $client->request('GET', 'http://cine.ws/cinemas/' . $id);
        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));

        $cinema = $response->getContent();
        $this->assertJson($cinema);

        $this->validCinema($cinema, $nom);
    }
}
