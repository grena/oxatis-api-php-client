<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices;

use Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices\ProgressStateLogServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices\ProgressStateLogServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProgressStateLogServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices\ProgressStateLogServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProgressStateLogServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProgressStateLogServicesClient($engine, $eventDispatcher);
    }


}

