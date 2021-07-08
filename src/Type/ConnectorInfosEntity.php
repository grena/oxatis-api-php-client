<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ConnectorInfosEntity
{

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var \DateTimeInterface
     */
    protected $LastDateOfUse;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ConnectorInfosEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastDateOfUse()
    {
        return $this->LastDateOfUse;
    }

    /**
     * @param \DateTimeInterface $LastDateOfUse
     * @return ConnectorInfosEntity
     */
    public function withLastDateOfUse($LastDateOfUse)
    {
        $new = clone $this;
        $new->LastDateOfUse = $LastDateOfUse;

        return $new;
    }


}

