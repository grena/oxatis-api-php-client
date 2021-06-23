<?php

namespace Heavymind\Oxatis\ApiClient\Services\IdentityServices;

use Heavymind\Oxatis\ApiClient\Services\IdentityServices\IdentityServicesClient;
use Heavymind\Oxatis\ApiClient\Services\IdentityServices\IdentityServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class IdentityServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\IdentityServices\IdentityServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(IdentityServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new IdentityServicesClient($engine, $eventDispatcher);
    }


}

