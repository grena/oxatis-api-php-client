# Oxatis API - PHP Client

This is a PHP API Client for any [Oxatis](https://www.oxatis.com/) SaaS instance.

[![Build Status](https://travis-ci.com/grena/oxatis-api-php-client.svg?branch=main)](https://travis-ci.com/grena/oxatis-api-php-client)

## Requirements
- PHP >= 7.4
- Composer


## Install

```bash
composer require grena/oxatis-api-php-client
```

## How to use

In your project, import the `OxatisClientBuilder` and build a client with your Oxatis AppID and token:
```php
use Heavymind\Oxatis\ApiClient\OxatisClientBuilder;

// Build the Oxatis client with your AppID and Token
$clientBuilder = new OxatisClientBuilder();
$oxatisClient = $clientBuilder->buildAuthenticatedByToken(
    "OXATIS_APP_ID", 
    "OXATIS_TOKEN"
);
```

Now you can use the `OxatisClient` to make requests, for example here, retrieving "Country names" for each tax rate:

```php
use Heavymind\Oxatis\ApiClient\Type\TaxRateGetList;
use Heavymind\Oxatis\ApiClient\Type\TaxRateEntity;

$response = $oxatisClient->getTaxRateServices()->taxRateGetList(
    new TaxRateGetList($oxatisClient->getWSIdentitySoap())
);

foreach ($response->getDataResultService()->getData()->getTaxRateList()->getTaxRateIDs() as $taxRateID)
{
    /** @var TaxRateEntity $taxRateID */
    var_dump($taxRateID->getCountryName());
}
```

## Regenerate the API

This API is mainly auto-generated thanks to `phpro/soap-client`.

If the online Soap WSDL files changed on Oxatis side, this API Client **needs to be regenerated** by running:
```bash
docker-compose run php_74 php generate-soap-api.php
```

This will:
- Generate the needed config files for `phpro/soap-client` in the `config/` folder
- Generate each Type class for each service in `src/Type`
- Generate client and client factory for each service in `src/Services/`

## Contribute

Clone this project, then:

```bash
cp docker-compose.yml.dist docker-compose.yml
docker-compose up --build
docker-compose run php_74 ./composer.phar install
```
