<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductRelatedItemsEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity
     */
    private $UpSellItems;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity1
     */
    private $CrossSellItems;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity2
     */
    private $LinkedItems;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity
     */
    public function getUpSellItems()
    {
        return $this->UpSellItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity $UpSellItems
     * @return ProductRelatedItemsEntity
     */
    public function withUpSellItems($UpSellItems)
    {
        $new = clone $this;
        $new->UpSellItems = $UpSellItems;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity1
     */
    public function getCrossSellItems()
    {
        return $this->CrossSellItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity1 $CrossSellItems
     * @return ProductRelatedItemsEntity
     */
    public function withCrossSellItems($CrossSellItems)
    {
        $new = clone $this;
        $new->CrossSellItems = $CrossSellItems;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity2
     */
    public function getLinkedItems()
    {
        return $this->LinkedItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity2 $LinkedItems
     * @return ProductRelatedItemsEntity
     */
    public function withLinkedItems($LinkedItems)
    {
        $new = clone $this;
        $new->LinkedItems = $LinkedItems;

        return $new;
    }


}

