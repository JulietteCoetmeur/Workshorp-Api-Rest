<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class StockManager
{
    public function getAll()
    {

        $client = HttpClient::create();
        $response = $client->request('GET', 'http://a5846341f3e8.ngrok.io/stock/all');

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        
        return $content;
    }
}
