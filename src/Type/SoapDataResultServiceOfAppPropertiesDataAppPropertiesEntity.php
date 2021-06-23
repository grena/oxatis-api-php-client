<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfAppPropertiesDataAppPropertiesEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AppPropertiesData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\AppPropertiesData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\AppPropertiesData $Data
     * @return SoapDataResultServiceOfAppPropertiesDataAppPropertiesEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

