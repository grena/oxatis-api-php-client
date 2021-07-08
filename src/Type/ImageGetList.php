<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ImageGetList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    protected $Pagination;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $Pagination
     */
    public function __construct($WSIdentitySoap, $Pagination)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->Pagination = $Pagination;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return ImageGetList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPagination()
    {
        return $this->Pagination;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $Pagination
     * @return ImageGetList
     */
    public function withPagination($Pagination)
    {
        $new = clone $this;
        $new->Pagination = $Pagination;

        return $new;
    }


}

