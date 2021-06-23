<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductUpdatePackagingOptions implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingOptionsEntity
     */
    private $ProductPackagingOptions;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingOptionsEntity $ProductPackagingOptions
     */
    public function __construct($WSIdentitySoap, $ProductPackagingOptions)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductPackagingOptions = $ProductPackagingOptions;
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
     * @return ProductUpdatePackagingOptions
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductPackagingOptionsEntity
     */
    public function getProductPackagingOptions()
    {
        return $this->ProductPackagingOptions;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductPackagingOptionsEntity $ProductPackagingOptions
     * @return ProductUpdatePackagingOptions
     */
    public function withProductPackagingOptions($ProductPackagingOptions)
    {
        $new = clone $this;
        $new->ProductPackagingOptions = $ProductPackagingOptions;

        return $new;
    }


}

