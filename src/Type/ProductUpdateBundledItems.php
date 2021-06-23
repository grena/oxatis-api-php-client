<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductUpdateBundledItems implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BundleEntity
     */
    private $Bundle;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\BundleEntity $Bundle
     */
    public function __construct($WSIdentitySoap, $Bundle)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->Bundle = $Bundle;
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
     * @return ProductUpdateBundledItems
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\BundleEntity
     */
    public function getBundle()
    {
        return $this->Bundle;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\BundleEntity $Bundle
     * @return ProductUpdateBundledItems
     */
    public function withBundle($Bundle)
    {
        $new = clone $this;
        $new->Bundle = $Bundle;

        return $new;
    }


}

