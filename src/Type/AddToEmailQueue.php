<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class AddToEmailQueue implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\EmailQueueEntity
     */
    private $EmailQueue;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\EmailQueueEntity $EmailQueue
     */
    public function __construct($WSIdentitySoap, $EmailQueue)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->EmailQueue = $EmailQueue;
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
     * @return AddToEmailQueue
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\EmailQueueEntity
     */
    public function getEmailQueue()
    {
        return $this->EmailQueue;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\EmailQueueEntity $EmailQueue
     * @return AddToEmailQueue
     */
    public function withEmailQueue($EmailQueue)
    {
        $new = clone $this;
        $new->EmailQueue = $EmailQueue;

        return $new;
    }


}

