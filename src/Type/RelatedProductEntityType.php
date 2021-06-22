<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing RelatedProductEntityType
 *
 *
 * XSD Type: RelatedProductEntity
 */
class RelatedProductEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $item
     */
    private $item = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $relatedItem
     */
    private $relatedItem = null;

    /**
     * @var int $position
     */
    private $position = null;

    /**
     * Gets as item
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $item
     * @return self
     */
    public function setItem(ProductIdEntityType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as relatedItem
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * Sets a new relatedItem
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $relatedItem
     * @return self
     */
    public function setRelatedItem(ProductIdEntityType $relatedItem)
    {
        $this->relatedItem = $relatedItem;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }


}

