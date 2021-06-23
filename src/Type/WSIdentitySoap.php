<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class WSIdentitySoap
{

    /**
     * @var string
     */
    private $Appid;

    /**
     * @var string
     */
    private $Token;

    /**
     * @return string
     */
    public function getAppid()
    {
        return $this->Appid;
    }

    /**
     * @param string $Appid
     * @return WSIdentitySoap
     */
    public function withAppid($Appid)
    {
        $new = clone $this;
        $new->Appid = $Appid;

        return $new;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return WSIdentitySoap
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }


}

