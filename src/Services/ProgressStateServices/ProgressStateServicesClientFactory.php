<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProgressStateServices;

use Heavymind\Oxatis\ApiClient\Services\ProgressStateServices\ProgressStateServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateServices\ProgressStateServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProgressStateServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProgressStateServices\ProgressStateServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProgressStateServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProgressStateServicesClient($engine, $eventDispatcher);
    }


}

