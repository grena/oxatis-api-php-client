<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProductAttributesServices.asmx?WSDL', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('Heavymind\Oxatis\ApiClient\Type')
    ->setClientDestination('src/Services/ProductAttributesServices')
    ->setClientName('ProductAttributesServicesClient')
    ->setClientNamespace('Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices')
    ->setClassMapDestination('src/Services/ProductAttributesServices')
    ->setClassMapName('ProductAttributesServicesClassmap')
    ->setClassMapNamespace('Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\IteratorAssembler()),
                new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions()))
            ]),
            '/^ArrayOf/i'
        )
    )
;
