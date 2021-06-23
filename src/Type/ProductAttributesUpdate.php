<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductAttributesUpdate implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductAttributesEntity
     */
    private $ProductAttributes;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductAttributesEntity $ProductAttributes
     */
    public function __construct($WSIdentitySoap, $ProductAttributes)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductAttributes = $ProductAttributes;
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
     * @return ProductAttributesUpdate
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductAttributesEntity
     */
    public function getProductAttributes()
    {
        return $this->ProductAttributes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductAttributesEntity $ProductAttributes
     * @return ProductAttributesUpdate
     */
    public function withProductAttributes($ProductAttributes)
    {
        $new = clone $this;
        $new->ProductAttributes = $ProductAttributes;

        return $new;
    }


}

