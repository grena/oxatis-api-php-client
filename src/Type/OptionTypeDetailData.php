<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionTypeDetailData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypeDetailEntity
     */
    protected $OptionTypeDetail;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypeDetailEntity
     */
    public function getOptionTypeDetail()
    {
        return $this->OptionTypeDetail;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypeDetailEntity $OptionTypeDetail
     * @return OptionTypeDetailData
     */
    public function withOptionTypeDetail($OptionTypeDetail)
    {
        $new = clone $this;
        $new->OptionTypeDetail = $OptionTypeDetail;

        return $new;
    }


}

