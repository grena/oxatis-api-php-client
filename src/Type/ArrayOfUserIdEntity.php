<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfUserIdEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    private $UserID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->UserID) ? $this->UserID : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntity $UserID
     * @return ArrayOfUserIdEntity
     */
    public function withUserID($UserID)
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    public function getUserID()
    {
        return $this->UserID;
    }


}

