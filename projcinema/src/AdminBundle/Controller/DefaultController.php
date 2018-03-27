<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Cinema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Unirest\Request;

class DefaultController extends Controller
{
    public static function getHttp($url, $headers = []) {
        return self::sendHttp($url, 'GET', '', $headers);
    }

    public static function postHttp($url, $requestBody, $headers) {
        return self::sendHttp($url, 'POST', $requestBody, $headers);
    }

    public static function putHttp($url, $requestBody, $headers) {
        return self::sendHttp($url, 'PUT', $requestBody, $headers);
    }

    public static function patchHttp($url, $requestBody, $headers) {
        return self::sendHttp($url, 'PATCH', $requestBody, $headers);
    }

    public static function deleteHttp($url, $headers = []) {
        return self::sendHttp($url, 'DELETE', '', $headers);
    }

    public static function sendHttp($url, $method, $requestBody, $headers) {
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
      curl_setopt($ch, CURLOPT_POST, $method != 'GET');
      curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);  //Post Fields
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $response = curl_exec ($ch);

      curl_close ($ch);

      return json_decode($response);
    }

    /**
     * @Route("/")
    */
    public function indexAction() {
        $headers = array('Accept' => 'application/json');

        $response = self::getHttp('http://cine.ws/cinemas', $headers, null);

        return $this->render('AdminBundle:Default:index.html.twig',
            array(
                'cinemas' => $response,
                'films' => []
            ));
    }
}
