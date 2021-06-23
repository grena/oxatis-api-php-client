<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class PaginationEntity
{

    /**
     * @var int
     */
    private $PageNumber;

    /**
     * @var int
     */
    private $PageSize;

    /**
     * @var int
     */
    private $TotalItems;

    /**
     * @var int
     */
    private $TotalPages;

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }

    /**
     * @param int $PageNumber
     * @return PaginationEntity
     */
    public function withPageNumber($PageNumber)
    {
        $new = clone $this;
        $new->PageNumber = $PageNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return PaginationEntity
     */
    public function withPageSize($PageSize)
    {
        $new = clone $this;
        $new->PageSize = $PageSize;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalItems()
    {
        return $this->TotalItems;
    }

    /**
     * @param int $TotalItems
     * @return PaginationEntity
     */
    public function withTotalItems($TotalItems)
    {
        $new = clone $this;
        $new->TotalItems = $TotalItems;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->TotalPages;
    }

    /**
     * @param int $TotalPages
     * @return PaginationEntity
     */
    public function withTotalPages($TotalPages)
    {
        $new = clone $this;
        $new->TotalPages = $TotalPages;

        return $new;
    }


}

