<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OxIdData
{

    /**
     * @var int
     */
    protected $OxID;

    /**
     * @return int
     */
    public function getOxID()
    {
        return $this->OxID;
    }

    /**
     * @param int $OxID
     * @return OxIdData
     */
    public function withOxID($OxID)
    {
        $new = clone $this;
        $new->OxID = $OxID;

        return $new;
    }


}

