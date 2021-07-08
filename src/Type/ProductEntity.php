<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductEntity extends \Heavymind\Oxatis\ApiClient\Type\ProductBaseEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuantityEntity
     */
    protected $QuantityInStock;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuantityEntity
     */
    protected $QuantityReorder;

    /**
     * @var int
     */
    protected $UnitsForSale;

    /**
     * @var int
     */
    protected $UnitsForSale1;

    /**
     * @var int
     */
    protected $UnitsForSale2;

    /**
     * @var int
     */
    protected $UnitsForSale3;

    /**
     * @var int
     */
    protected $UnitsForSale4;

    /**
     * @var int
     */
    protected $UnitsForSale5;

    /**
     * @var int
     */
    protected $UnitsForSale6;

    /**
     * @var int
     */
    protected $UnitsForSale7;

    /**
     * @var int
     */
    protected $UnitsForSale8;

    /**
     * @var int
     */
    protected $UnitsForSale9;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuantityEntity
     */
    public function getQuantityInStock()
    {
        return $this->QuantityInStock;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuantityEntity $QuantityInStock
     * @return ProductEntity
     */
    public function withQuantityInStock($QuantityInStock)
    {
        $new = clone $this;
        $new->QuantityInStock = $QuantityInStock;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuantityEntity
     */
    public function getQuantityReorder()
    {
        return $this->QuantityReorder;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuantityEntity $QuantityReorder
     * @return ProductEntity
     */
    public function withQuantityReorder($QuantityReorder)
    {
        $new = clone $this;
        $new->QuantityReorder = $QuantityReorder;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale()
    {
        return $this->UnitsForSale;
    }

    /**
     * @param int $UnitsForSale
     * @return ProductEntity
     */
    public function withUnitsForSale($UnitsForSale)
    {
        $new = clone $this;
        $new->UnitsForSale = $UnitsForSale;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale1()
    {
        return $this->UnitsForSale1;
    }

    /**
     * @param int $UnitsForSale1
     * @return ProductEntity
     */
    public function withUnitsForSale1($UnitsForSale1)
    {
        $new = clone $this;
        $new->UnitsForSale1 = $UnitsForSale1;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale2()
    {
        return $this->UnitsForSale2;
    }

    /**
     * @param int $UnitsForSale2
     * @return ProductEntity
     */
    public function withUnitsForSale2($UnitsForSale2)
    {
        $new = clone $this;
        $new->UnitsForSale2 = $UnitsForSale2;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale3()
    {
        return $this->UnitsForSale3;
    }

    /**
     * @param int $UnitsForSale3
     * @return ProductEntity
     */
    public function withUnitsForSale3($UnitsForSale3)
    {
        $new = clone $this;
        $new->UnitsForSale3 = $UnitsForSale3;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale4()
    {
        return $this->UnitsForSale4;
    }

    /**
     * @param int $UnitsForSale4
     * @return ProductEntity
     */
    public function withUnitsForSale4($UnitsForSale4)
    {
        $new = clone $this;
        $new->UnitsForSale4 = $UnitsForSale4;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale5()
    {
        return $this->UnitsForSale5;
    }

    /**
     * @param int $UnitsForSale5
     * @return ProductEntity
     */
    public function withUnitsForSale5($UnitsForSale5)
    {
        $new = clone $this;
        $new->UnitsForSale5 = $UnitsForSale5;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale6()
    {
        return $this->UnitsForSale6;
    }

    /**
     * @param int $UnitsForSale6
     * @return ProductEntity
     */
    public function withUnitsForSale6($UnitsForSale6)
    {
        $new = clone $this;
        $new->UnitsForSale6 = $UnitsForSale6;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale7()
    {
        return $this->UnitsForSale7;
    }

    /**
     * @param int $UnitsForSale7
     * @return ProductEntity
     */
    public function withUnitsForSale7($UnitsForSale7)
    {
        $new = clone $this;
        $new->UnitsForSale7 = $UnitsForSale7;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale8()
    {
        return $this->UnitsForSale8;
    }

    /**
     * @param int $UnitsForSale8
     * @return ProductEntity
     */
    public function withUnitsForSale8($UnitsForSale8)
    {
        $new = clone $this;
        $new->UnitsForSale8 = $UnitsForSale8;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnitsForSale9()
    {
        return $this->UnitsForSale9;
    }

    /**
     * @param int $UnitsForSale9
     * @return ProductEntity
     */
    public function withUnitsForSale9($UnitsForSale9)
    {
        $new = clone $this;
        $new->UnitsForSale9 = $UnitsForSale9;

        return $new;
    }


}

