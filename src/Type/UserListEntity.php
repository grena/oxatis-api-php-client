<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UserListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    private $PageInformation;

    /**
     * @var \DateTimeInterface
     */
    private $LatestModifiedDateStart;

    /**
     * @var \DateTimeInterface
     */
    private $LatestModifiedDateEnd;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfUserIdEntity
     */
    private $UsersID;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return UserListEntity
     */
    public function withPageInformation($PageInformation)
    {
        $new = clone $this;
        $new->PageInformation = $PageInformation;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLatestModifiedDateStart()
    {
        return $this->LatestModifiedDateStart;
    }

    /**
     * @param \DateTimeInterface $LatestModifiedDateStart
     * @return UserListEntity
     */
    public function withLatestModifiedDateStart($LatestModifiedDateStart)
    {
        $new = clone $this;
        $new->LatestModifiedDateStart = $LatestModifiedDateStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLatestModifiedDateEnd()
    {
        return $this->LatestModifiedDateEnd;
    }

    /**
     * @param \DateTimeInterface $LatestModifiedDateEnd
     * @return UserListEntity
     */
    public function withLatestModifiedDateEnd($LatestModifiedDateEnd)
    {
        $new = clone $this;
        $new->LatestModifiedDateEnd = $LatestModifiedDateEnd;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfUserIdEntity
     */
    public function getUsersID()
    {
        return $this->UsersID;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfUserIdEntity $UsersID
     * @return UserListEntity
     */
    public function withUsersID($UsersID)
    {
        $new = clone $this;
        $new->UsersID = $UsersID;

        return $new;
    }


}

