<?php

namespace Heavymind\Oxatis\ApiClient\Services\OptionTypesServices;

use Heavymind\Oxatis\ApiClient\Services\OptionTypesServices\OptionTypesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OptionTypesServices\OptionTypesServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class OptionTypesServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\OptionTypesServices\OptionTypesServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(OptionTypesServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new OptionTypesServicesClient($engine, $eventDispatcher);
    }


}

