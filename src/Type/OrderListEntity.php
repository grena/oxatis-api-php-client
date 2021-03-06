<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderListEntity extends OrderListHeaderEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    protected $PageInformation;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity
     */
    protected $OrderIDs;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return OrderListEntity
     */
    public function withPageInformation($PageInformation)
    {
        $new = clone $this;
        $new->PageInformation = $PageInformation;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity
     */
    public function getOrderIDs()
    {
        return $this->OrderIDs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity $OrderIDs
     * @return OrderListEntity
     */
    public function withOrderIDs($OrderIDs)
    {
        $new = clone $this;
        $new->OrderIDs = $OrderIDs;

        return $new;
    }


}

