<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices;

use Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices\ProductPackagingServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices\ProductPackagingServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProductPackagingServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices\ProductPackagingServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProductPackagingServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProductPackagingServicesClient($engine, $eventDispatcher);
    }


}

