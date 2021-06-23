<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DataPlugOnlineInfosEntity
{

    /**
     * @var bool
     */
    private $Active;

    /**
     * @var \DateTimeInterface
     */
    private $LastDateOfUse;

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     * @return DataPlugOnlineInfosEntity
     */
    public function withActive($Active)
    {
        $new = clone $this;
        $new->Active = $Active;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastDateOfUse()
    {
        return $this->LastDateOfUse;
    }

    /**
     * @param \DateTimeInterface $LastDateOfUse
     * @return DataPlugOnlineInfosEntity
     */
    public function withLastDateOfUse($LastDateOfUse)
    {
        $new = clone $this;
        $new->LastDateOfUse = $LastDateOfUse;

        return $new;
    }


}

