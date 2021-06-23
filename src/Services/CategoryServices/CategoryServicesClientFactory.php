<?php

namespace Heavymind\Oxatis\ApiClient\Services\CategoryServices;

use Heavymind\Oxatis\ApiClient\Services\CategoryServices\CategoryServicesClient;
use Heavymind\Oxatis\ApiClient\Services\CategoryServices\CategoryServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class CategoryServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\CategoryServices\CategoryServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(CategoryServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new CategoryServicesClient($engine, $eventDispatcher);
    }


}

