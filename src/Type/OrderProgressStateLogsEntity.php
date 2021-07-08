<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderProgressStateLogsEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderProgressStateHistoryEntity
     */
    protected $OrderProgressStateLogs;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderProgressStateHistoryEntity
     */
    public function getOrderProgressStateLogs()
    {
        return $this->OrderProgressStateLogs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderProgressStateHistoryEntity $OrderProgressStateLogs
     * @return OrderProgressStateLogsEntity
     */
    public function withOrderProgressStateLogs($OrderProgressStateLogs)
    {
        $new = clone $this;
        $new->OrderProgressStateLogs = $OrderProgressStateLogs;

        return $new;
    }


}

