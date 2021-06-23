<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices;

use Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices\ProductAttributesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices\ProductAttributesServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProductAttributesServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices\ProductAttributesServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProductAttributesServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProductAttributesServicesClient($engine, $eventDispatcher);
    }


}

