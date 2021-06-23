<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfTaskQueueDataTaskQueueEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaskQueueData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaskQueueData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaskQueueData $Data
     * @return SoapDataResultServiceOfTaskQueueDataTaskQueueEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

