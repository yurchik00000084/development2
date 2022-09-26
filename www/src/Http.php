<?php
//╔╗╔╗╔╗╔╗╔═══╗╔══╗╔╗╔══╗╔══╗╔╗╔══╗──╔══╗╔╗╔╗
//║║║║║║║║║╔═╗║║╔═╝║║║╔═╝╚╗╔╝║║║╔═╝──║╔╗║║║║║
//║╚╝║║║║║║╚═╝║║║──║╚╝║───║║─║╚╝║────║║║║║╚╝║
//╚═╗║║║║║║╔╗╔╝║║──║╔╗║───║║─║╔╗║────║║║║╚═╗║
//─╔╝║║╚╝║║║║║─║╚═╗║║║╚═╗╔╝╚╗║║║╚═╗╔╗║╚╝║──║║
//─╚═╝╚══╝╚╝╚╝─╚══╝╚╝╚══╝╚══╝╚╝╚══╝╚╝╚══╝──╚╝
namespace Higherror\RelokiaTestProject;

use GuzzleHttp\Client;

class Http
{
    public static function get_data(string $uri)
    {
        $client = new Client([
            'base_uri' => 'https://test9082.freshdesk.com/api/v2/',
            'timeout'  => 2.0,
            'auth' => ['lbslsZ7YvZCcGiYtanrR', '']
        ]);

        $response = $client->request(
            'GET', $uri
        );
        $json = $response->getBody();
        return json_decode($json, true);
    }

    public static function get_data2(string $uri)
    {
        $client = new Client([
            'base_uri' => 'https://relokia8170.zendesk.com/api/v2/',
            'timeout'  => 2.0,
            'auth' => ['y.petrovskyi@relokia.com', 'QAZWSX*1327831']
        ]);

        $response = $client->request(
            'GET', $uri
        );
        $json = $response->getBody();
        return json_decode($json, true);
    }



    public static function send_data($data)
    {
        $client = new Client([
            'base_uri' => 'https://relokia8170.zendesk.com/api/v2/',
            'timeout'  => 2.0,
            'auth' => ['y.petrovskyi@relokia.com', 'QAZWSX*1327831'],
            'headers' => [ 'Content-Type' => 'application/json'],
            'body' => $data
        ]);

        $response = $client->post("https://relokia8170.zendesk.com/api/v2/users/create_or_update");
        return $response->getStatusCode();
    }

    public static function send_dataTicket($data)
    {
        $client = new Client([
            'base_uri' => 'https://relokia8170.zendesk.com/api/v2/',
            'timeout'  => 2.0,
            'auth' => ['y.petrovskyi@relokia.com', 'QAZWSX*1327831'],
            'headers' => [ 'Content-Type' => 'application/json'],
            'body' => $data
        ]);

        $response = $client->post("https://relokia8170.zendesk.com/api/v2/imports/tickets");
        return $response->getStatusCode();
    }
}
