<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProductGetRelatedItems implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageIdEntity
     */
    protected $ProductItemSKULanguageId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageIdEntity $ProductItemSKULanguageId
     */
    public function __construct($WSIdentitySoap, $ProductItemSKULanguageId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductItemSKULanguageId = $ProductItemSKULanguageId;
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
     * @return ProductGetRelatedItems
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageIdEntity
     */
    public function getProductItemSKULanguageId()
    {
        return $this->ProductItemSKULanguageId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageIdEntity $ProductItemSKULanguageId
     * @return ProductGetRelatedItems
     */
    public function withProductItemSKULanguageId($ProductItemSKULanguageId)
    {
        $new = clone $this;
        $new->ProductItemSKULanguageId = $ProductItemSKULanguageId;

        return $new;
    }


}

