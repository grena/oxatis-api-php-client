<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OxatisEntityType
 *
 *
 * XSD Type: OxatisEntity
 */
class OxatisEntityType
{

    /**
     * @var int $oxID
     */
    private $oxID = null;

    /**
     * Gets as oxID
     *
     * @return int
     */
    public function getOxID()
    {
        return $this->oxID;
    }

    /**
     * Sets a new oxID
     *
     * @param int $oxID
     * @return self
     */
    public function setOxID($oxID)
    {
        $this->oxID = $oxID;
        return $this;
    }


}

