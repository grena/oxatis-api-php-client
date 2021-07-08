<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStateLogsData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateLogsEntity
     */
    protected $OrderProgressStateLogs;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateLogsEntity
     */
    public function getOrderProgressStateLogs()
    {
        return $this->OrderProgressStateLogs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateLogsEntity $OrderProgressStateLogs
     * @return ProgressStateLogsData
     */
    public function withOrderProgressStateLogs($OrderProgressStateLogs)
    {
        $new = clone $this;
        $new->OrderProgressStateLogs = $OrderProgressStateLogs;

        return $new;
    }


}

