<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductAttributesEntityType
 *
 *
 * XSD Type: ProductAttributesEntity
 */
class ProductAttributesEntityType extends ProductIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductAttributeTextEntityType $textAttribute
     */
    private $textAttribute = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntityType $multipleAttribute1
     */
    private $multipleAttribute1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntityType $multipleAttribute2
     */
    private $multipleAttribute2 = null;

    /**
     * Gets as textAttribute
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductAttributeTextEntityType
     */
    public function getTextAttribute()
    {
        return $this->textAttribute;
    }

    /**
     * Sets a new textAttribute
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductAttributeTextEntityType $textAttribute
     * @return self
     */
    public function setTextAttribute(ProductAttributeTextEntityType $textAttribute)
    {
        $this->textAttribute = $textAttribute;
        return $this;
    }

    /**
     * Gets as multipleAttribute1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntityType
     */
    public function getMultipleAttribute1()
    {
        return $this->multipleAttribute1;
    }

    /**
     * Sets a new multipleAttribute1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntityType $multipleAttribute1
     * @return self
     */
    public function setMultipleAttribute1(ProductMultipleAttributeEntityType $multipleAttribute1)
    {
        $this->multipleAttribute1 = $multipleAttribute1;
        return $this;
    }

    /**
     * Gets as multipleAttribute2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntityType
     */
    public function getMultipleAttribute2()
    {
        return $this->multipleAttribute2;
    }

    /**
     * Sets a new multipleAttribute2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntityType $multipleAttribute2
     * @return self
     */
    public function setMultipleAttribute2(ProductMultipleAttributeEntityType $multipleAttribute2)
    {
        $this->multipleAttribute2 = $multipleAttribute2;
        return $this;
    }


}

