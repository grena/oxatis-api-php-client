<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class Attribute
{

    /**
     * @var string
     */
    private $DisplayedText;

    /**
     * @var string
     */
    private $AttributeCode;

    /**
     * @var string
     */
    private $AttributeCodeMethod;

    /**
     * @var string
     */
    private $AttributeProductType;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price4;

    /**
     * @return string
     */
    public function getDisplayedText()
    {
        return $this->DisplayedText;
    }

    /**
     * @param string $DisplayedText
     * @return Attribute
     */
    public function withDisplayedText($DisplayedText)
    {
        $new = clone $this;
        $new->DisplayedText = $DisplayedText;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->AttributeCode;
    }

    /**
     * @param string $AttributeCode
     * @return Attribute
     */
    public function withAttributeCode($AttributeCode)
    {
        $new = clone $this;
        $new->AttributeCode = $AttributeCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttributeCodeMethod()
    {
        return $this->AttributeCodeMethod;
    }

    /**
     * @param string $AttributeCodeMethod
     * @return Attribute
     */
    public function withAttributeCodeMethod($AttributeCodeMethod)
    {
        $new = clone $this;
        $new->AttributeCodeMethod = $AttributeCodeMethod;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttributeProductType()
    {
        return $this->AttributeProductType;
    }

    /**
     * @param string $AttributeProductType
     * @return Attribute
     */
    public function withAttributeProductType($AttributeProductType)
    {
        $new = clone $this;
        $new->AttributeProductType = $AttributeProductType;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price
     * @return Attribute
     */
    public function withPrice($Price)
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice1()
    {
        return $this->Price1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price1
     * @return Attribute
     */
    public function withPrice1($Price1)
    {
        $new = clone $this;
        $new->Price1 = $Price1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice2()
    {
        return $this->Price2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price2
     * @return Attribute
     */
    public function withPrice2($Price2)
    {
        $new = clone $this;
        $new->Price2 = $Price2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice3()
    {
        return $this->Price3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price3
     * @return Attribute
     */
    public function withPrice3($Price3)
    {
        $new = clone $this;
        $new->Price3 = $Price3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice4()
    {
        return $this->Price4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price4
     * @return Attribute
     */
    public function withPrice4($Price4)
    {
        $new = clone $this;
        $new->Price4 = $Price4;

        return $new;
    }


}

