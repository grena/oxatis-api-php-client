<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderValidateEntity extends OrderIdEntity
{

    /**
     * @var string
     */
    protected $ChequeNumber;

    /**
     * @var string
     */
    protected $Notes;

    /**
     * @return string
     */
    public function getChequeNumber()
    {
        return $this->ChequeNumber;
    }

    /**
     * @param string $ChequeNumber
     * @return OrderValidateEntity
     */
    public function withChequeNumber($ChequeNumber)
    {
        $new = clone $this;
        $new->ChequeNumber = $ChequeNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return OrderValidateEntity
     */
    public function withNotes($Notes)
    {
        $new = clone $this;
        $new->Notes = $Notes;

        return $new;
    }


}

