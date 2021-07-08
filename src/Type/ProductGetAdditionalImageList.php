<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProductGetAdditionalImageList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductKeyEntity
     */
    protected $ProductKey;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductKeyEntity $ProductKey
     */
    public function __construct($WSIdentitySoap, $ProductKey)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductKey = $ProductKey;
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
     * @return ProductGetAdditionalImageList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductKeyEntity
     */
    public function getProductKey()
    {
        return $this->ProductKey;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductKeyEntity $ProductKey
     * @return ProductGetAdditionalImageList
     */
    public function withProductKey($ProductKey)
    {
        $new = clone $this;
        $new->ProductKey = $ProductKey;

        return $new;
    }


}

