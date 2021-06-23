<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices;

use Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices\ProductCharacteristicsServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices\ProductCharacteristicsServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProductCharacteristicsServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices\ProductCharacteristicsServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProductCharacteristicsServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProductCharacteristicsServicesClient($engine, $eventDispatcher);
    }


}

