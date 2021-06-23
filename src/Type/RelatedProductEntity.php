<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class RelatedProductEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    private $Item;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    private $RelatedItem;

    /**
     * @var int
     */
    private $Position;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $Item
     * @return RelatedProductEntity
     */
    public function withItem($Item)
    {
        $new = clone $this;
        $new->Item = $Item;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getRelatedItem()
    {
        return $this->RelatedItem;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $RelatedItem
     * @return RelatedProductEntity
     */
    public function withRelatedItem($RelatedItem)
    {
        $new = clone $this;
        $new->RelatedItem = $RelatedItem;

        return $new;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return RelatedProductEntity
     */
    public function withPosition($Position)
    {
        $new = clone $this;
        $new->Position = $Position;

        return $new;
    }


}

