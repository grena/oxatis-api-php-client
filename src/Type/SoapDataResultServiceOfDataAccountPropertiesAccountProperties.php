<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfDataAccountPropertiesAccountProperties extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataAccountProperties
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataAccountProperties
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataAccountProperties $Data
     * @return SoapDataResultServiceOfDataAccountPropertiesAccountProperties
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

