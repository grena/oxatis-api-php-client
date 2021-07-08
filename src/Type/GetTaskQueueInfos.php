<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class GetTaskQueueInfos implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaskQueueEntity
     */
    protected $TaskQueue;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\TaskQueueEntity $TaskQueue
     */
    public function __construct($WSIdentitySoap, $TaskQueue)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->TaskQueue = $TaskQueue;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return GetTaskQueueInfos
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaskQueueEntity
     */
    public function getTaskQueue()
    {
        return $this->TaskQueue;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaskQueueEntity $TaskQueue
     * @return GetTaskQueueInfos
     */
    public function withTaskQueue($TaskQueue)
    {
        $new = clone $this;
        $new->TaskQueue = $TaskQueue;

        return $new;
    }


}

