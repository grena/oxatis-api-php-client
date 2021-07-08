<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SalesRepImport implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepEntity
     */
    protected $SalesRep;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepEntity $SalesRep
     */
    public function __construct($WSIdentitySoap, $SalesRep)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->SalesRep = $SalesRep;
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
     * @return SalesRepImport
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepEntity
     */
    public function getSalesRep()
    {
        return $this->SalesRep;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepEntity $SalesRep
     * @return SalesRepImport
     */
    public function withSalesRep($SalesRep)
    {
        $new = clone $this;
        $new->SalesRep = $SalesRep;

        return $new;
    }


}

