<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductBundleDataProductBundleEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductBundleData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductBundleData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductBundleData $Data
     * @return SoapDataResultServiceOfProductBundleDataProductBundleEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

