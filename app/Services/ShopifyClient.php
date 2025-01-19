<?php
namespace App\Services;

use GuzzleHttp\Client;

class ShopifyClient
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://coolquarter.myshopify.com/',
            'headers' => [
                'X-Shopify-Access-Token' => '53c37536e9ccae517fbc0a7a521691a3-1737234951', // Reemplaza con tu token
            ],
        ]);
    }

    public function getProducts()
    {
        $response = $this->client->get('/products.json');
        return json_decode($response->getBody(), true);
    }
}
