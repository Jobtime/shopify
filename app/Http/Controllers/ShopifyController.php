<?php
namespace App\Http\Controllers;

use App\Services\ShopifyClient;

class ShopifyController extends Controller
{
    protected $shopifyClient;

    public function __construct(ShopifyClient $shopifyClient)
    {
        $this->shopifyClient = $shopifyClient;
    }

    public function index()
    {
        $products = $this->shopifyClient->getProducts();

        if (isset($products['error'])) {
            return view('shopify.productos', ['error' => $products['error']]);
        }

        return view('shopify.productos', ['products' => $products['products']]);
    }
}
