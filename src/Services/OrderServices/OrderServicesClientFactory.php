<?php

namespace Heavymind\Oxatis\ApiClient\Services\OrderServices;

use Heavymind\Oxatis\ApiClient\Services\OrderServices\OrderServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OrderServices\OrderServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class OrderServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\OrderServices\OrderServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(OrderServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new OrderServicesClient($engine, $eventDispatcher);
    }


}

