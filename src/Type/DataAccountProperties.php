<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DataAccountProperties
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AccountProperties
     */
    protected $AccountProperties;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\AccountProperties
     */
    public function getAccountProperties()
    {
        return $this->AccountProperties;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\AccountProperties $AccountProperties
     * @return DataAccountProperties
     */
    public function withAccountProperties($AccountProperties)
    {
        $new = clone $this;
        $new->AccountProperties = $AccountProperties;

        return $new;
    }


}

