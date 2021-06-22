<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing UserListEntityType
 *
 *
 * XSD Type: UserListEntity
 */
class UserListEntityType
{

    /**
     * @var \DateTime $latestModifiedDateStart
     */
    private $latestModifiedDateStart = null;

    /**
     * @var \DateTime $latestModifiedDateEnd
     */
    private $latestModifiedDateEnd = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType[] $usersID
     */
    private $usersID = null;

    /**
     * Gets as latestModifiedDateStart
     *
     * @return \DateTime
     */
    public function getLatestModifiedDateStart()
    {
        return $this->latestModifiedDateStart;
    }

    /**
     * Sets a new latestModifiedDateStart
     *
     * @param \DateTime $latestModifiedDateStart
     * @return self
     */
    public function setLatestModifiedDateStart(\DateTime $latestModifiedDateStart)
    {
        $this->latestModifiedDateStart = $latestModifiedDateStart;
        return $this;
    }

    /**
     * Gets as latestModifiedDateEnd
     *
     * @return \DateTime
     */
    public function getLatestModifiedDateEnd()
    {
        return $this->latestModifiedDateEnd;
    }

    /**
     * Sets a new latestModifiedDateEnd
     *
     * @param \DateTime $latestModifiedDateEnd
     * @return self
     */
    public function setLatestModifiedDateEnd(\DateTime $latestModifiedDateEnd)
    {
        $this->latestModifiedDateEnd = $latestModifiedDateEnd;
        return $this;
    }

    /**
     * Adds as userID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType $userID
     */
    public function addToUsersID(UserIdEntityType $userID)
    {
        $this->usersID[] = $userID;
        return $this;
    }

    /**
     * isset usersID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsersID($index)
    {
        return isset($this->usersID[$index]);
    }

    /**
     * unset usersID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsersID($index)
    {
        unset($this->usersID[$index]);
    }

    /**
     * Gets as usersID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType[]
     */
    public function getUsersID()
    {
        return $this->usersID;
    }

    /**
     * Sets a new usersID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType[] $usersID
     * @return self
     */
    public function setUsersID(array $usersID)
    {
        $this->usersID = $usersID;
        return $this;
    }


}

