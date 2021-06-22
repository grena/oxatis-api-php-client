<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductIdEntityType
 *
 *
 * XSD Type: ProductIdEntity
 */
class ProductIdEntityType extends OxatisEntityType
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
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType $optionValues1
     */
    private $optionValues1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType $optionValues2
     */
    private $optionValues2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType $optionValues3
     */
    private $optionValues3 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType $optionTypes1
     */
    private $optionTypes1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType $optionTypes2
     */
    private $optionTypes2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType $optionTypes3
     */
    private $optionTypes3 = null;

    /**
     * @var int $parentItemID
     */
    private $parentItemID = null;

    /**
     * @var string $parentItemSKU
     */
    private $parentItemSKU = null;

    /**
     * @var int $productType
     */
    private $productType = null;

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

    /**
     * Gets as optionValues1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType
     */
    public function getOptionValues1()
    {
        return $this->optionValues1;
    }

    /**
     * Sets a new optionValues1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType $optionValues1
     * @return self
     */
    public function setOptionValues1(OptionValuesEntityType $optionValues1)
    {
        $this->optionValues1 = $optionValues1;
        return $this;
    }

    /**
     * Gets as optionValues2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType
     */
    public function getOptionValues2()
    {
        return $this->optionValues2;
    }

    /**
     * Sets a new optionValues2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType $optionValues2
     * @return self
     */
    public function setOptionValues2(OptionValuesEntityType $optionValues2)
    {
        $this->optionValues2 = $optionValues2;
        return $this;
    }

    /**
     * Gets as optionValues3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType
     */
    public function getOptionValues3()
    {
        return $this->optionValues3;
    }

    /**
     * Sets a new optionValues3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntityType $optionValues3
     * @return self
     */
    public function setOptionValues3(OptionValuesEntityType $optionValues3)
    {
        $this->optionValues3 = $optionValues3;
        return $this;
    }

    /**
     * Gets as optionTypes1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType
     */
    public function getOptionTypes1()
    {
        return $this->optionTypes1;
    }

    /**
     * Sets a new optionTypes1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType $optionTypes1
     * @return self
     */
    public function setOptionTypes1(OptionTypesEntityType $optionTypes1)
    {
        $this->optionTypes1 = $optionTypes1;
        return $this;
    }

    /**
     * Gets as optionTypes2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType
     */
    public function getOptionTypes2()
    {
        return $this->optionTypes2;
    }

    /**
     * Sets a new optionTypes2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType $optionTypes2
     * @return self
     */
    public function setOptionTypes2(OptionTypesEntityType $optionTypes2)
    {
        $this->optionTypes2 = $optionTypes2;
        return $this;
    }

    /**
     * Gets as optionTypes3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType
     */
    public function getOptionTypes3()
    {
        return $this->optionTypes3;
    }

    /**
     * Sets a new optionTypes3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntityType $optionTypes3
     * @return self
     */
    public function setOptionTypes3(OptionTypesEntityType $optionTypes3)
    {
        $this->optionTypes3 = $optionTypes3;
        return $this;
    }

    /**
     * Gets as parentItemID
     *
     * @return int
     */
    public function getParentItemID()
    {
        return $this->parentItemID;
    }

    /**
     * Sets a new parentItemID
     *
     * @param int $parentItemID
     * @return self
     */
    public function setParentItemID($parentItemID)
    {
        $this->parentItemID = $parentItemID;
        return $this;
    }

    /**
     * Gets as parentItemSKU
     *
     * @return string
     */
    public function getParentItemSKU()
    {
        return $this->parentItemSKU;
    }

    /**
     * Sets a new parentItemSKU
     *
     * @param string $parentItemSKU
     * @return self
     */
    public function setParentItemSKU($parentItemSKU)
    {
        $this->parentItemSKU = $parentItemSKU;
        return $this;
    }

    /**
     * Gets as productType
     *
     * @return int
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param int $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }


}

