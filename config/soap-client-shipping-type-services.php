<?php

use Laminas\Code\Generator\PropertyGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\CurlHttpClient;

$wsdlUri = 'https://webservices.oxatis.com/webservices/HttpServices/SOAP/ShippingTypeServices.asmx?WSDL';
$typeNamespace = 'Heavymind\Oxatis\ApiClient\Type';

$config = Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults($wsdlUri, [])
            ->disableWsdlCache()
    ))
    ->setRuleSet(new Rules\RuleSet([
            new Rules\AssembleRule(new Assembler\PropertyAssembler('protected')),
    ]))
    ->setTypeDestination('src/Type')
    ->setTypeNamespace($typeNamespace)
    ->setClientDestination('src/Services/ShippingTypeServices')
    ->setClientName('ShippingTypeServicesClient')
    ->setClientNamespace('Heavymind\Oxatis\ApiClient\Services\ShippingTypeServices')
    ->setClassMapDestination('src/Services/ShippingTypeServices')
    ->setClassMapName('ShippingTypeServicesClassmap')
    ->setClassMapNamespace('Heavymind\Oxatis\ApiClient\Services\ShippingTypeServices')
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

$httpClient = new CurlHttpClient();
$wsdlResponse = $httpClient->request('GET', $wsdlUri);

$crawler = new Crawler($wsdlResponse->getContent());
$extendConfig = [];

foreach ($crawler->filter('s|extension') as $domElement) {
    $tnsName = $domElement->attributes->getNamedItem('base')->nodeValue;
    $extendedClassName = \sprintf(
        '%s\\%s',
        $typeNamespace,
        \explode('tns:', $tnsName)[1]
    );
    $subClassString = $domElement->parentNode->parentNode->attributes->getNamedItem('name')->nodeValue;
    $parentClassString = \explode('tns:', $tnsName)[1];
    $config->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\AssembleRule(new Assembler\ExtendAssembler($extendedClassName)),
            \sprintf('/\b%s\b/', $subClassString)
        )
    );
    $config->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\AssembleRule(new Assembler\PropertyAssembler(PropertyGenerator::VISIBILITY_PROTECTED)),
            \sprintf('/\b%s\b/', $parentClassString)
        )
    );
}

return $config;
