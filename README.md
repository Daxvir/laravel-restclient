# laravel-restclient

An elegant and smart Rest API Client with OAuth2 authentication support for laravel

## Install

### Via Composer

Install composer package to your laravel project

``` bash
composer require daxvir/restclient
```

### Usage

Sample use case for rest client assuming config contains valid client credentials

``` bash
$client = new RestClient();
$response = $client->get("packages")->getResponse();
if (!$client->isResponseStatusCode(200)) {
    $client->printResponseOriginContent();
    $responseMessage = $client->getResponseMessage();
    print_r($responseMessage);
} else {
    $response = $client->getResponseData();
    dd($response);
}
```