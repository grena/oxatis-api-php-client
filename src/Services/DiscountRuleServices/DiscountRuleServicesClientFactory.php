<?php

namespace Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices;

use Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices\DiscountRuleServicesClient;
use Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices\DiscountRuleServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class DiscountRuleServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices\DiscountRuleServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(DiscountRuleServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new DiscountRuleServicesClient($engine, $eventDispatcher);
    }


}

