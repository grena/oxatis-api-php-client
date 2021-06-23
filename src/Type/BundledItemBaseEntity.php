<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class BundledItemBaseEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    private $ProductId;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $ProductId
     * @return BundledItemBaseEntity
     */
    public function withProductId($ProductId)
    {
        $new = clone $this;
        $new->ProductId = $ProductId;

        return $new;
    }


}

