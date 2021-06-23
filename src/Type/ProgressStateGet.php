<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProgressStateGet implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateIdEntity
     */
    private $ProgressStateId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateIdEntity $ProgressStateId
     */
    public function __construct($WSIdentitySoap, $ProgressStateId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProgressStateId = $ProgressStateId;
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
     * @return ProgressStateGet
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateIdEntity
     */
    public function getProgressStateId()
    {
        return $this->ProgressStateId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateIdEntity $ProgressStateId
     * @return ProgressStateGet
     */
    public function withProgressStateId($ProgressStateId)
    {
        $new = clone $this;
        $new->ProgressStateId = $ProgressStateId;

        return $new;
    }


}

