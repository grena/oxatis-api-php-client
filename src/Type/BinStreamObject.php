<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class BinStreamObject
{

    /**
     * @var string
     */
    protected $StrBytes;

    /**
     * @return string
     */
    public function getStrBytes()
    {
        return $this->StrBytes;
    }

    /**
     * @param string $StrBytes
     * @return BinStreamObject
     */
    public function withStrBytes($StrBytes)
    {
        $new = clone $this;
        $new->StrBytes = $StrBytes;

        return $new;
    }


}

