<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DataAccountSetting
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AccountSetting
     */
    private $AccountSetting;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\AccountSetting
     */
    public function getAccountSetting()
    {
        return $this->AccountSetting;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\AccountSetting $AccountSetting
     * @return DataAccountSetting
     */
    public function withAccountSetting($AccountSetting)
    {
        $new = clone $this;
        $new->AccountSetting = $AccountSetting;

        return $new;
    }


}

