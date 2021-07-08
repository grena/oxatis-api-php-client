<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductWebBlockUpdate implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductWebBlockEntity
     */
    protected $ProductWebBlock;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductWebBlockEntity $ProductWebBlock
     */
    public function __construct($WSIdentitySoap, $ProductWebBlock)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductWebBlock = $ProductWebBlock;
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
     * @return ProductWebBlockUpdate
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductWebBlockEntity
     */
    public function getProductWebBlock()
    {
        return $this->ProductWebBlock;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductWebBlockEntity $ProductWebBlock
     * @return ProductWebBlockUpdate
     */
    public function withProductWebBlock($ProductWebBlock)
    {
        $new = clone $this;
        $new->ProductWebBlock = $ProductWebBlock;

        return $new;
    }


}

