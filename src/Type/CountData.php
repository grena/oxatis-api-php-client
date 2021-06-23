<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CountData
{

    /**
     * @var int
     */
    private $Count;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param int $Count
     * @return CountData
     */
    public function withCount($Count)
    {
        $new = clone $this;
        $new->Count = $Count;

        return $new;
    }


}

