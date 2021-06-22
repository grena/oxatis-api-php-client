<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfUserIdEntityType
 *
 *
 * XSD Type: ArrayOfUserIdEntity
 */
class ArrayOfUserIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType[] $userID
     */
    private $userID = [
        
    ];

    /**
     * Adds as userID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType $userID
     */
    public function addToUserID(UserIdEntityType $userID)
    {
        $this->userID[] = $userID;
        return $this;
    }

    /**
     * isset userID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserID($index)
    {
        return isset($this->userID[$index]);
    }

    /**
     * unset userID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserID($index)
    {
        unset($this->userID[$index]);
    }

    /**
     * Gets as userID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType[]
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType[] $userID
     * @return self
     */
    public function setUserID(array $userID = null)
    {
        $this->userID = $userID;
        return $this;
    }


}

