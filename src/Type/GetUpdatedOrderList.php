<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class GetUpdatedOrderList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodEntity
     */
    private $ProgressStatePeriod;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodEntity $ProgressStatePeriod
     */
    public function __construct($WSIdentitySoap, $ProgressStatePeriod)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ProgressStatePeriod = $ProgressStatePeriod;
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
     * @return GetUpdatedOrderList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodEntity
     */
    public function getProgressStatePeriod()
    {
        return $this->ProgressStatePeriod;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodEntity $ProgressStatePeriod
     * @return GetUpdatedOrderList
     */
    public function withProgressStatePeriod($ProgressStatePeriod)
    {
        $new = clone $this;
        $new->ProgressStatePeriod = $ProgressStatePeriod;

        return $new;
    }


}

