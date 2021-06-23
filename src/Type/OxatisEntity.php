<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OxatisEntity
{

    /**
     * @var int
     */
    private $OxID;

    /**
     * @return int
     */
    public function getOxID()
    {
        return $this->OxID;
    }

    /**
     * @param int $OxID
     * @return OxatisEntity
     */
    public function withOxID($OxID)
    {
        $new = clone $this;
        $new->OxID = $OxID;

        return $new;
    }


}

