<?php

namespace Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices;

use Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices\PaymentTypeServicesClient;
use Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices\PaymentTypeServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class PaymentTypeServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices\PaymentTypeServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(PaymentTypeServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new PaymentTypeServicesClient($engine, $eventDispatcher);
    }


}

