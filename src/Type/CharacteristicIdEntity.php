<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicIdEntity
{

    /**
     * @var int
     */
    private $OptionTypeID;

    /**
     * @var int
     */
    private $OptionValueID;

    /**
     * @return int
     */
    public function getOptionTypeID()
    {
        return $this->OptionTypeID;
    }

    /**
     * @param int $OptionTypeID
     * @return CharacteristicIdEntity
     */
    public function withOptionTypeID($OptionTypeID)
    {
        $new = clone $this;
        $new->OptionTypeID = $OptionTypeID;

        return $new;
    }

    /**
     * @return int
     */
    public function getOptionValueID()
    {
        return $this->OptionValueID;
    }

    /**
     * @param int $OptionValueID
     * @return CharacteristicIdEntity
     */
    public function withOptionValueID($OptionValueID)
    {
        $new = clone $this;
        $new->OptionValueID = $OptionValueID;

        return $new;
    }


}

