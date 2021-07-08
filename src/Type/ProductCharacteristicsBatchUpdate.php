<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ProductCharacteristicsBatchUpdate implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicsBatchEntity
     */
    protected $CharacteristicsBatch;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicsBatchEntity $CharacteristicsBatch
     */
    public function __construct($WSIdentitySoap, $CharacteristicsBatch)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->CharacteristicsBatch = $CharacteristicsBatch;
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
     * @return ProductCharacteristicsBatchUpdate
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicsBatchEntity
     */
    public function getCharacteristicsBatch()
    {
        return $this->CharacteristicsBatch;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicsBatchEntity $CharacteristicsBatch
     * @return ProductCharacteristicsBatchUpdate
     */
    public function withCharacteristicsBatch($CharacteristicsBatch)
    {
        $new = clone $this;
        $new->CharacteristicsBatch = $CharacteristicsBatch;

        return $new;
    }


}

