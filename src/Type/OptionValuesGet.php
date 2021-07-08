<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OptionValuesGet implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    protected $OptionValues;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity $OptionValues
     */
    public function __construct($WSIdentitySoap, $OptionValues)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OptionValues = $OptionValues;
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
     * @return OptionValuesGet
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    public function getOptionValues()
    {
        return $this->OptionValues;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity $OptionValues
     * @return OptionValuesGet
     */
    public function withOptionValues($OptionValues)
    {
        $new = clone $this;
        $new->OptionValues = $OptionValues;

        return $new;
    }


}

