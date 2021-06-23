<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductCategoryGetTreeCollection implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\RootCategoryEntity
     */
    private $RootCategory;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\RootCategoryEntity $RootCategory
     */
    public function __construct($WSIdentitySoap, $RootCategory)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->RootCategory = $RootCategory;
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
     * @return ProductCategoryGetTreeCollection
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\RootCategoryEntity
     */
    public function getRootCategory()
    {
        return $this->RootCategory;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\RootCategoryEntity $RootCategory
     * @return ProductCategoryGetTreeCollection
     */
    public function withRootCategory($RootCategory)
    {
        $new = clone $this;
        $new->RootCategory = $RootCategory;

        return $new;
    }


}

