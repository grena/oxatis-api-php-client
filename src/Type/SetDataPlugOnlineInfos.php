<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SetDataPlugOnlineInfos implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosEntity
     */
    protected $DataPlugOnlineInfos;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosEntity $DataPlugOnlineInfos
     */
    public function __construct($WSIdentitySoap, $DataPlugOnlineInfos)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->DataPlugOnlineInfos = $DataPlugOnlineInfos;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return SetDataPlugOnlineInfos
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosEntity
     */
    public function getDataPlugOnlineInfos()
    {
        return $this->DataPlugOnlineInfos;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosEntity $DataPlugOnlineInfos
     * @return SetDataPlugOnlineInfos
     */
    public function withDataPlugOnlineInfos($DataPlugOnlineInfos)
    {
        $new = clone $this;
        $new->DataPlugOnlineInfos = $DataPlugOnlineInfos;

        return $new;
    }


}

