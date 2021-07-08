<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class RelatedItemsData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductRelatedItemsEntity
     */
    protected $roductRelatedItems;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductRelatedItemsEntity
     */
    public function getRoductRelatedItems()
    {
        return $this->roductRelatedItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductRelatedItemsEntity $roductRelatedItems
     * @return RelatedItemsData
     */
    public function withRoductRelatedItems($roductRelatedItems)
    {
        $new = clone $this;
        $new->roductRelatedItems = $roductRelatedItems;

        return $new;
    }


}

