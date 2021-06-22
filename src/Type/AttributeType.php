<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing AttributeType
 *
 *
 * XSD Type: Attribute
 */
class AttributeType
{

    /**
     * @var string $displayedText
     */
    private $displayedText = null;

    /**
     * @var string $attributeCode
     */
    private $attributeCode = null;

    /**
     * @var string $attributeCodeMethod
     */
    private $attributeCodeMethod = null;

    /**
     * @var string $attributeProductType
     */
    private $attributeProductType = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price
     */
    private $price = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price1
     */
    private $price1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price2
     */
    private $price2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price3
     */
    private $price3 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price4
     */
    private $price4 = null;

    /**
     * Gets as displayedText
     *
     * @return string
     */
    public function getDisplayedText()
    {
        return $this->displayedText;
    }

    /**
     * Sets a new displayedText
     *
     * @param string $displayedText
     * @return self
     */
    public function setDisplayedText($displayedText)
    {
        $this->displayedText = $displayedText;
        return $this;
    }

    /**
     * Gets as attributeCode
     *
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->attributeCode;
    }

    /**
     * Sets a new attributeCode
     *
     * @param string $attributeCode
     * @return self
     */
    public function setAttributeCode($attributeCode)
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }

    /**
     * Gets as attributeCodeMethod
     *
     * @return string
     */
    public function getAttributeCodeMethod()
    {
        return $this->attributeCodeMethod;
    }

    /**
     * Sets a new attributeCodeMethod
     *
     * @param string $attributeCodeMethod
     * @return self
     */
    public function setAttributeCodeMethod($attributeCodeMethod)
    {
        $this->attributeCodeMethod = $attributeCodeMethod;
        return $this;
    }

    /**
     * Gets as attributeProductType
     *
     * @return string
     */
    public function getAttributeProductType()
    {
        return $this->attributeProductType;
    }

    /**
     * Sets a new attributeProductType
     *
     * @param string $attributeProductType
     * @return self
     */
    public function setAttributeProductType($attributeProductType)
    {
        $this->attributeProductType = $attributeProductType;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price
     * @return self
     */
    public function setPrice(PriceVATModeEntityType $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as price1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice1()
    {
        return $this->price1;
    }

    /**
     * Sets a new price1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price1
     * @return self
     */
    public function setPrice1(PriceVATModeEntityType $price1)
    {
        $this->price1 = $price1;
        return $this;
    }

    /**
     * Gets as price2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice2()
    {
        return $this->price2;
    }

    /**
     * Sets a new price2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price2
     * @return self
     */
    public function setPrice2(PriceVATModeEntityType $price2)
    {
        $this->price2 = $price2;
        return $this;
    }

    /**
     * Gets as price3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice3()
    {
        return $this->price3;
    }

    /**
     * Sets a new price3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price3
     * @return self
     */
    public function setPrice3(PriceVATModeEntityType $price3)
    {
        $this->price3 = $price3;
        return $this;
    }

    /**
     * Gets as price4
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice4()
    {
        return $this->price4;
    }

    /**
     * Sets a new price4
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price4
     * @return self
     */
    public function setPrice4(PriceVATModeEntityType $price4)
    {
        $this->price4 = $price4;
        return $this;
    }


}

