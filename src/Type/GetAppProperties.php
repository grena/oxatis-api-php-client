<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class GetAppProperties implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AppPropertiesEntity
     */
    private $AppProperties;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\AppPropertiesEntity $AppProperties
     */
    public function __construct($WSIdentitySoap, $AppProperties)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->AppProperties = $AppProperties;
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
     * @return GetAppProperties
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\AppPropertiesEntity
     */
    public function getAppProperties()
    {
        return $this->AppProperties;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\AppPropertiesEntity $AppProperties
     * @return GetAppProperties
     */
    public function withAppProperties($AppProperties)
    {
        $new = clone $this;
        $new->AppProperties = $AppProperties;

        return $new;
    }


}

