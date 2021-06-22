<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfAttributeType
 *
 *
 * XSD Type: ArrayOfAttribute
 */
class ArrayOfAttributeType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AttributeType[] $attribute
     */
    private $attribute = [
        
    ];

    /**
     * Adds as attribute
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\AttributeType $attribute
     */
    public function addToAttribute(AttributeType $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttribute($index)
    {
        return isset($this->attribute[$index]);
    }

    /**
     * unset attribute
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttribute($index)
    {
        unset($this->attribute[$index]);
    }

    /**
     * Gets as attribute
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\AttributeType[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\AttributeType[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute = null)
    {
        $this->attribute = $attribute;
        return $this;
    }


}

