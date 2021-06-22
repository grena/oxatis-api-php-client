<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuantityEntityType
 *
 *
 * XSD Type: QuantityEntity
 */
class QuantityEntityType
{

    /**
     * @var int $value
     */
    private $value = null;

    /**
     * @var bool $append
     */
    private $append = null;

    /**
     * Gets as value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as append
     *
     * @return bool
     */
    public function getAppend()
    {
        return $this->append;
    }

    /**
     * Sets a new append
     *
     * @param bool $append
     * @return self
     */
    public function setAppend($append)
    {
        $this->append = $append;
        return $this;
    }


}

