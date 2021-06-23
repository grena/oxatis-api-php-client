<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfDataAccountSettingAccountSetting
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataAccountSetting
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataAccountSetting
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataAccountSetting $Data
     * @return SoapDataResultServiceOfDataAccountSettingAccountSetting
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

