<?php

namespace Heavymind\Oxatis\ApiClient\Services\TaxRateServices;

use Heavymind\Oxatis\ApiClient\Services\TaxRateServices\TaxRateServicesClient;
use Heavymind\Oxatis\ApiClient\Services\TaxRateServices\TaxRateServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class TaxRateServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\TaxRateServices\TaxRateServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(TaxRateServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new TaxRateServicesClient($engine, $eventDispatcher);
    }


}

