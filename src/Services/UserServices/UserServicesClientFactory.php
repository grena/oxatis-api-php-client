<?php

namespace Heavymind\Oxatis\ApiClient\Services\UserServices;

use Heavymind\Oxatis\ApiClient\Services\UserServices\UserServicesClient;
use Heavymind\Oxatis\ApiClient\Services\UserServices\UserServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class UserServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\UserServices\UserServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(UserServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new UserServicesClient($engine, $eventDispatcher);
    }


}

