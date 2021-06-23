<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductResetFields implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductResetFieldsEntity
     */
    private $ProductResetFields;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductResetFieldsEntity $ProductResetFields
     */
    public function __construct($WSIdentitySoap, $ProductResetFields)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductResetFields = $ProductResetFields;
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
     * @return ProductResetFields
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductResetFieldsEntity
     */
    public function getProductResetFields()
    {
        return $this->ProductResetFields;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductResetFieldsEntity $ProductResetFields
     * @return ProductResetFields
     */
    public function withProductResetFields($ProductResetFields)
    {
        $new = clone $this;
        $new->ProductResetFields = $ProductResetFields;

        return $new;
    }


}

