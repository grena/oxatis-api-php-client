<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProductBundleServices;

use Heavymind\Oxatis\ApiClient\Services\ProductBundleServices\ProductBundleServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductBundleServices\ProductBundleServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ProductBundleServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ProductBundleServices\ProductBundleServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ProductBundleServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ProductBundleServicesClient($engine, $eventDispatcher);
    }


}

