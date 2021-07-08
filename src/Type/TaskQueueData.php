<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaskQueueData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaskQueueEntity
     */
    protected $TaskQueue;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaskQueueEntity
     */
    public function getTaskQueue()
    {
        return $this->TaskQueue;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaskQueueEntity $TaskQueue
     * @return TaskQueueData
     */
    public function withTaskQueue($TaskQueue)
    {
        $new = clone $this;
        $new->TaskQueue = $TaskQueue;

        return $new;
    }


}

