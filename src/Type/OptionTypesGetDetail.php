<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OptionTypesGetDetail implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    private $OptionTypes;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity $OptionTypes
     */
    public function __construct($WSIdentitySoap, $OptionTypes)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OptionTypes = $OptionTypes;
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
     * @return OptionTypesGetDetail
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    public function getOptionTypes()
    {
        return $this->OptionTypes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity $OptionTypes
     * @return OptionTypesGetDetail
     */
    public function withOptionTypes($OptionTypes)
    {
        $new = clone $this;
        $new->OptionTypes = $OptionTypes;

        return $new;
    }


}

