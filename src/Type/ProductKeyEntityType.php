<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductKeyEntityType
 *
 *
 * XSD Type: ProductKeyEntity
 */
class ProductKeyEntityType extends OxatisEntityType
{

    /**
     * @var string $itemSKU
     */
    private $itemSKU = null;

    /**
     * @var string $productLanguage
     */
    private $productLanguage = null;

    /**
     * Gets as itemSKU
     *
     * @return string
     */
    public function getItemSKU()
    {
        return $this->itemSKU;
    }

    /**
     * Sets a new itemSKU
     *
     * @param string $itemSKU
     * @return self
     */
    public function setItemSKU($itemSKU)
    {
        $this->itemSKU = $itemSKU;
        return $this;
    }

    /**
     * Gets as productLanguage
     *
     * @return string
     */
    public function getProductLanguage()
    {
        return $this->productLanguage;
    }

    /**
     * Sets a new productLanguage
     *
     * @param string $productLanguage
     * @return self
     */
    public function setProductLanguage($productLanguage)
    {
        $this->productLanguage = $productLanguage;
        return $this;
    }


}

