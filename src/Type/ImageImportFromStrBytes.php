<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ImageImportFromStrBytes implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryEntity
     */
    protected $ImageGallery;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryEntity $ImageGallery
     */
    public function __construct($WSIdentitySoap, $ImageGallery)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ImageGallery = $ImageGallery;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return ImageImportFromStrBytes
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryEntity
     */
    public function getImageGallery()
    {
        return $this->ImageGallery;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryEntity $ImageGallery
     * @return ImageImportFromStrBytes
     */
    public function withImageGallery($ImageGallery)
    {
        $new = clone $this;
        $new->ImageGallery = $ImageGallery;

        return $new;
    }


}

