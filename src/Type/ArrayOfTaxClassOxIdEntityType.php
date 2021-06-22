<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfTaxClassOxIdEntityType
 *
 *
 * XSD Type: ArrayOfTaxClassOxIdEntity
 */
class ArrayOfTaxClassOxIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $userTaxClass
     */
    private $userTaxClass = [
        
    ];

    /**
     * Adds as userTaxClass
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType $userTaxClass
     */
    public function addToUserTaxClass(TaxClassOxIdEntityType $userTaxClass)
    {
        $this->userTaxClass[] = $userTaxClass;
        return $this;
    }

    /**
     * isset userTaxClass
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserTaxClass($index)
    {
        return isset($this->userTaxClass[$index]);
    }

    /**
     * unset userTaxClass
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserTaxClass($index)
    {
        unset($this->userTaxClass[$index]);
    }

    /**
     * Gets as userTaxClass
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[]
     */
    public function getUserTaxClass()
    {
        return $this->userTaxClass;
    }

    /**
     * Sets a new userTaxClass
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $userTaxClass
     * @return self
     */
    public function setUserTaxClass(array $userTaxClass = null)
    {
        $this->userTaxClass = $userTaxClass;
        return $this;
    }


}

