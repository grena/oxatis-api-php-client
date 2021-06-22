<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductMultipleAttributeEntityType
 *
 *
 * XSD Type: ProductMultipleAttributeEntity
 */
class ProductMultipleAttributeEntityType
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AttributeType[] $attributes
     */
    private $attributes = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\AttributeType $attribute
     */
    public function addToAttributes(AttributeType $attribute)
    {
        $this->attributes[] = $attribute;
        return $this;
    }

    /**
     * isset attributes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributes($index)
    {
        return isset($this->attributes[$index]);
    }

    /**
     * unset attributes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributes($index)
    {
        unset($this->attributes[$index]);
    }

    /**
     * Gets as attributes
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\AttributeType[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Sets a new attributes
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\AttributeType[] $attributes
     * @return self
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }


}

