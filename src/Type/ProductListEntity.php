<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    protected $PageInformation;

    /**
     * @var \DateTimeInterface
     */
    protected $LatestModifiedDateStart;

    /**
     * @var \DateTimeInterface
     */
    protected $LatestModifiedDateEnd;

    /**
     * @var bool
     */
    protected $Visible;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category4;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category5;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category6;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category7;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category8;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category9;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category10;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductIdEntity
     */
    protected $ProductsID;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return ProductListEntity
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
     * @return ProductListEntity
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
     * @return ProductListEntity
     */
    public function withLatestModifiedDateEnd($LatestModifiedDateEnd)
    {
        $new = clone $this;
        $new->LatestModifiedDateEnd = $LatestModifiedDateEnd;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVisible()
    {
        return $this->Visible;
    }

    /**
     * @param bool $Visible
     * @return ProductListEntity
     */
    public function withVisible($Visible)
    {
        $new = clone $this;
        $new->Visible = $Visible;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory1()
    {
        return $this->Category1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category1
     * @return ProductListEntity
     */
    public function withCategory1($Category1)
    {
        $new = clone $this;
        $new->Category1 = $Category1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory2()
    {
        return $this->Category2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category2
     * @return ProductListEntity
     */
    public function withCategory2($Category2)
    {
        $new = clone $this;
        $new->Category2 = $Category2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory3()
    {
        return $this->Category3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category3
     * @return ProductListEntity
     */
    public function withCategory3($Category3)
    {
        $new = clone $this;
        $new->Category3 = $Category3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory4()
    {
        return $this->Category4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category4
     * @return ProductListEntity
     */
    public function withCategory4($Category4)
    {
        $new = clone $this;
        $new->Category4 = $Category4;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory5()
    {
        return $this->Category5;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category5
     * @return ProductListEntity
     */
    public function withCategory5($Category5)
    {
        $new = clone $this;
        $new->Category5 = $Category5;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory6()
    {
        return $this->Category6;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category6
     * @return ProductListEntity
     */
    public function withCategory6($Category6)
    {
        $new = clone $this;
        $new->Category6 = $Category6;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory7()
    {
        return $this->Category7;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category7
     * @return ProductListEntity
     */
    public function withCategory7($Category7)
    {
        $new = clone $this;
        $new->Category7 = $Category7;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory8()
    {
        return $this->Category8;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category8
     * @return ProductListEntity
     */
    public function withCategory8($Category8)
    {
        $new = clone $this;
        $new->Category8 = $Category8;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory9()
    {
        return $this->Category9;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category9
     * @return ProductListEntity
     */
    public function withCategory9($Category9)
    {
        $new = clone $this;
        $new->Category9 = $Category9;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory10()
    {
        return $this->Category10;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category10
     * @return ProductListEntity
     */
    public function withCategory10($Category10)
    {
        $new = clone $this;
        $new->Category10 = $Category10;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductIdEntity
     */
    public function getProductsID()
    {
        return $this->ProductsID;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductIdEntity $ProductsID
     * @return ProductListEntity
     */
    public function withProductsID($ProductsID)
    {
        $new = clone $this;
        $new->ProductsID = $ProductsID;

        return $new;
    }


}

