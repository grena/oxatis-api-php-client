<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DTData
{

    /**
     * @var \DateTimeInterface
     */
    private $DateTime;

    /**
     * @return \DateTimeInterface
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }

    /**
     * @param \DateTimeInterface $DateTime
     * @return DTData
     */
    public function withDateTime($DateTime)
    {
        $new = clone $this;
        $new->DateTime = $DateTime;

        return $new;
    }


}

