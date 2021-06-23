<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionTypesEntity
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $SystemName;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return OptionTypesEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getSystemName()
    {
        return $this->SystemName;
    }

    /**
     * @param string $SystemName
     * @return OptionTypesEntity
     */
    public function withSystemName($SystemName)
    {
        $new = clone $this;
        $new->SystemName = $SystemName;

        return $new;
    }


}

