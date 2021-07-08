<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DataBool
{

    /**
     * @var bool
     */
    protected $IsDuplicated;

    /**
     * @return bool
     */
    public function getIsDuplicated()
    {
        return $this->IsDuplicated;
    }

    /**
     * @param bool $IsDuplicated
     * @return DataBool
     */
    public function withIsDuplicated($IsDuplicated)
    {
        $new = clone $this;
        $new->IsDuplicated = $IsDuplicated;

        return $new;
    }


}

