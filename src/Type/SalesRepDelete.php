<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SalesRepDelete implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntity
     */
    private $SalesRepId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntity $SalesRepId
     */
    public function __construct($WSIdentitySoap, $SalesRepId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->SalesRepId = $SalesRepId;
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
     * @return SalesRepDelete
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntity
     */
    public function getSalesRepId()
    {
        return $this->SalesRepId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntity $SalesRepId
     * @return SalesRepDelete
     */
    public function withSalesRepId($SalesRepId)
    {
        $new = clone $this;
        $new->SalesRepId = $SalesRepId;

        return $new;
    }


}

