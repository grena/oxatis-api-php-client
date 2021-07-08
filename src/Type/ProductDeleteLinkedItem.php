<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProductDeleteLinkedItem implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\LinkedProductEntity
     */
    protected $LinkedProduct;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\LinkedProductEntity $LinkedProduct
     */
    public function __construct($WSIdentitySoap, $LinkedProduct)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->LinkedProduct = $LinkedProduct;
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
     * @return ProductDeleteLinkedItem
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\LinkedProductEntity
     */
    public function getLinkedProduct()
    {
        return $this->LinkedProduct;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\LinkedProductEntity $LinkedProduct
     * @return ProductDeleteLinkedItem
     */
    public function withLinkedProduct($LinkedProduct)
    {
        $new = clone $this;
        $new->LinkedProduct = $LinkedProduct;

        return $new;
    }


}

