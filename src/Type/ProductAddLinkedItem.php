<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductAddLinkedItem implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\LinkedProductEntity
     */
    private $LinkedProduct;

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
     * @return ProductAddLinkedItem
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
     * @return ProductAddLinkedItem
     */
    public function withLinkedProduct($LinkedProduct)
    {
        $new = clone $this;
        $new->LinkedProduct = $LinkedProduct;

        return $new;
    }


}

