<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductUpdatePackaging implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingEntity
     */
    protected $ProductPackaging;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingEntity $ProductPackaging
     */
    public function __construct($WSIdentitySoap, $ProductPackaging)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductPackaging = $ProductPackaging;
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
     * @return ProductUpdatePackaging
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductPackagingEntity
     */
    public function getProductPackaging()
    {
        return $this->ProductPackaging;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductPackagingEntity $ProductPackaging
     * @return ProductUpdatePackaging
     */
    public function withProductPackaging($ProductPackaging)
    {
        $new = clone $this;
        $new->ProductPackaging = $ProductPackaging;

        return $new;
    }


}

