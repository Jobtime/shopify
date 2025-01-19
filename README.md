Shopify Laravel App

This application is built with Laravel 11 and integrates with the Shopify API to display all products from a Shopify store.

Environment Variables

Set the following environment variables in your .env file:

/* TEST VARS */
SHOPIFY_API_KEY=bb7b754366887d4647d91d2c854c896a
SHOPIFY_API_SECRET=061bffa21b1d41907a167dfe7833ef21
SHOPIFY_ACCESS_TOKEN=53c37536e9ccae517fbc0a7a521691a3-1737234951
SHOPIFY_STORE_URL=coolquarter.myshopify.com

/* Change this vars to yours shopify keys */

Variable Details

SHOPIFY_API_KEY: API key provided by Shopify.

SHOPIFY_API_SECRET: Secret key for API validation.

SHOPIFY_ACCESS_TOKEN: Access token to interact with Shopify API.

SHOPIFY_STORE_URL: Shopify store URL.

Installation

Clone the repository

git clone git@github.com:<user>/<repository>.git
cd <repository>

Install dependencies

composer install
npm install

Set up .env

cp .env.example .env

Update with your Shopify credentials.

Generate the app key

php artisan key:generate

Run migrations (if applicable)

php artisan migrate

Start the local server

php artisan serve

Features

Fetch and display products: Connects to Shopify API to retrieve and list all store products.

Detailed product view: View additional details like price, inventory, and variants.

Usage

Open your browser and visit http://127.0.0.1:8000.

Navigate to the products section to view your Shopify store's products.

Resources

Shopify API Documentation

Laravel Documentation

Contributing

Fork the repository.

Create a feature branch.

git checkout -b feature/new-feature

Submit a pull request describing your changes.