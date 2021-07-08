<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ImageDelete implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity
     */
    protected $ImageGalleryId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity $ImageGalleryId
     */
    public function __construct($WSIdentitySoap, $ImageGalleryId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ImageGalleryId = $ImageGalleryId;
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
     * @return ImageDelete
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity
     */
    public function getImageGalleryId()
    {
        return $this->ImageGalleryId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity $ImageGalleryId
     * @return ImageDelete
     */
    public function withImageGalleryId($ImageGalleryId)
    {
        $new = clone $this;
        $new->ImageGalleryId = $ImageGalleryId;

        return $new;
    }


}

