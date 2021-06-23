<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices;

use Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices\ProductWebBlockServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices\ProductWebBlockServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProductWebBlockServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices\ProductWebBlockServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProductWebBlockServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProductWebBlockServicesClient($engine, $eventDispatcher);
    }


}

