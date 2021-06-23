<?php

namespace Heavymind\Oxatis\ApiClient\Services\SalesRepServices;

use Heavymind\Oxatis\ApiClient\Services\SalesRepServices\SalesRepServicesClient;
use Heavymind\Oxatis\ApiClient\Services\SalesRepServices\SalesRepServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class SalesRepServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\SalesRepServices\SalesRepServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(SalesRepServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new SalesRepServicesClient($engine, $eventDispatcher);
    }


}

