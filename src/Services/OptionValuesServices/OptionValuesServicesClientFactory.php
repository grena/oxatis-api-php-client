<?php

namespace Heavymind\Oxatis\ApiClient\Services\OptionValuesServices;

use Heavymind\Oxatis\ApiClient\Services\OptionValuesServices\OptionValuesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OptionValuesServices\OptionValuesServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class OptionValuesServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\OptionValuesServices\OptionValuesServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(OptionValuesServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new OptionValuesServicesClient($engine, $eventDispatcher);
    }


}

