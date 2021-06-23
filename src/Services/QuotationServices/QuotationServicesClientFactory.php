<?php

namespace Heavymind\Oxatis\ApiClient\Services\QuotationServices;

use Heavymind\Oxatis\ApiClient\Services\QuotationServices\QuotationServicesClient;
use Heavymind\Oxatis\ApiClient\Services\QuotationServices\QuotationServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class QuotationServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\QuotationServices\QuotationServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(QuotationServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new QuotationServicesClient($engine, $eventDispatcher);
    }


}

