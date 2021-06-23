<?php

namespace Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices;

use Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices\AdminPropertiesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices\AdminPropertiesServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class AdminPropertiesServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices\AdminPropertiesServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(AdminPropertiesServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new AdminPropertiesServicesClient($engine, $eventDispatcher);
    }


}

