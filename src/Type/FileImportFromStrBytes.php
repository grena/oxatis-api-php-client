<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class FileImportFromStrBytes implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\FileGalleryEntity
     */
    protected $FileGallery;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\FileGalleryEntity $FileGallery
     */
    public function __construct($WSIdentitySoap, $FileGallery)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->FileGallery = $FileGallery;
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
     * @return FileImportFromStrBytes
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\FileGalleryEntity
     */
    public function getFileGallery()
    {
        return $this->FileGallery;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\FileGalleryEntity $FileGallery
     * @return FileImportFromStrBytes
     */
    public function withFileGallery($FileGallery)
    {
        $new = clone $this;
        $new->FileGallery = $FileGallery;

        return $new;
    }


}

