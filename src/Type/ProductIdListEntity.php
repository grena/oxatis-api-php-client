<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductIdListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductIdEntity
     */
    private $ProductIDArray;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductIdEntity
     */
    public function getProductIDArray()
    {
        return $this->ProductIDArray;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductIdEntity $ProductIDArray
     * @return ProductIdListEntity
     */
    public function withProductIDArray($ProductIDArray)
    {
        $new = clone $this;
        $new->ProductIDArray = $ProductIDArray;

        return $new;
    }


}

