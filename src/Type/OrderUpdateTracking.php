<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OrderUpdateTracking implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateLogEntity
     */
    protected $ProgressState;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateLogEntity $ProgressState
     */
    public function __construct($WSIdentitySoap, $ProgressState)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProgressState = $ProgressState;
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
     * @return OrderUpdateTracking
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateLogEntity
     */
    public function getProgressState()
    {
        return $this->ProgressState;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateLogEntity $ProgressState
     * @return OrderUpdateTracking
     */
    public function withProgressState($ProgressState)
    {
        $new = clone $this;
        $new->ProgressState = $ProgressState;

        return $new;
    }


}

