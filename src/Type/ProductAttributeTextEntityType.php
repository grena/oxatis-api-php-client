<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductAttributeTextEntityType
 *
 *
 * XSD Type: ProductAttributeTextEntity
 */
class ProductAttributeTextEntityType
{

    /**
     * @var string $text
     */
    private $text = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * Gets as text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
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


}

