<?php

namespace Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices;

use Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices\ImageGalleryServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices\ImageGalleryServicesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class ImageGalleryServicesClientFactory
{

    public static function factory(string $wsdl) : \Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices\ImageGalleryServicesClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(ImageGalleryServicesClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new ImageGalleryServicesClient($engine, $eventDispatcher);
    }


}

