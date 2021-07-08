<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ImageImportFromUrl implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryUrlEntity
     */
    protected $ImageGalleryUrl;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryUrlEntity $ImageGalleryUrl
     */
    public function __construct($WSIdentitySoap, $ImageGalleryUrl)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ImageGalleryUrl = $ImageGalleryUrl;
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
     * @return ImageImportFromUrl
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryUrlEntity
     */
    public function getImageGalleryUrl()
    {
        return $this->ImageGalleryUrl;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryUrlEntity $ImageGalleryUrl
     * @return ImageImportFromUrl
     */
    public function withImageGalleryUrl($ImageGalleryUrl)
    {
        $new = clone $this;
        $new->ImageGalleryUrl = $ImageGalleryUrl;

        return $new;
    }


}

