<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ImageGet implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    protected $OxatisEntity;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OxatisEntity $OxatisEntity
     */
    public function __construct($WSIdentitySoap, $OxatisEntity)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OxatisEntity = $OxatisEntity;
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
     * @return ImageGet
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
     */
    public function getOxatisEntity()
    {
        return $this->OxatisEntity;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OxatisEntity $OxatisEntity
     * @return ImageGet
     */
    public function withOxatisEntity($OxatisEntity)
    {
        $new = clone $this;
        $new->OxatisEntity = $OxatisEntity;

        return $new;
    }


}

