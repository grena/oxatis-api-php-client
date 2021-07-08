<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProductIsItemSKUDuplicated implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageEntity
     */
    protected $ProductItemSKULanguage;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageEntity $ProductItemSKULanguage
     */
    public function __construct($WSIdentitySoap, $ProductItemSKULanguage)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProductItemSKULanguage = $ProductItemSKULanguage;
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
     * @return ProductIsItemSKUDuplicated
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageEntity
     */
    public function getProductItemSKULanguage()
    {
        return $this->ProductItemSKULanguage;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductItemSKULanguageEntity $ProductItemSKULanguage
     * @return ProductIsItemSKUDuplicated
     */
    public function withProductItemSKULanguage($ProductItemSKULanguage)
    {
        $new = clone $this;
        $new->ProductItemSKULanguage = $ProductItemSKULanguage;

        return $new;
    }


}

