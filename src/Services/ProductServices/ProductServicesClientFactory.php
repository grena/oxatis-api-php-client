<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductServices;

use Heavymind\Oxatis\ApiClient\Services\ProductServices\ProductServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductServices\ProductServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProductServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProductServices\ProductServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProductServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProductServicesClient($engine, $eventDispatcher);
    }


}

