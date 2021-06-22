<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ConnectorInfosEntityType
 *
 *
 * XSD Type: ConnectorInfosEntity
 */
class ConnectorInfosEntityType
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \DateTime $lastDateOfUse
     */
    private $lastDateOfUse = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as lastDateOfUse
     *
     * @return \DateTime
     */
    public function getLastDateOfUse()
    {
        return $this->lastDateOfUse;
    }

    /**
     * Sets a new lastDateOfUse
     *
     * @param \DateTime $lastDateOfUse
     * @return self
     */
    public function setLastDateOfUse(\DateTime $lastDateOfUse)
    {
        $this->lastDateOfUse = $lastDateOfUse;
        return $this;
    }


}

