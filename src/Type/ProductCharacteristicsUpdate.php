<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductCharacteristicsUpdate implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicsEntity
     */
    private $Characteristics;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicsEntity $Characteristics
     */
    public function __construct($WSIdentitySoap, $Characteristics)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->Characteristics = $Characteristics;
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
     * @return ProductCharacteristicsUpdate
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicsEntity
     */
    public function getCharacteristics()
    {
        return $this->Characteristics;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicsEntity $Characteristics
     * @return ProductCharacteristicsUpdate
     */
    public function withCharacteristics($Characteristics)
    {
        $new = clone $this;
        $new->Characteristics = $Characteristics;

        return $new;
    }


}

