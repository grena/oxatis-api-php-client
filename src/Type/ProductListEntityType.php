<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductListEntityType
 *
 *
 * XSD Type: ProductListEntity
 */
class ProductListEntityType
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
     * @var bool $visible
     */
    private $visible = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category1
     */
    private $category1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category2
     */
    private $category2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category3
     */
    private $category3 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category4
     */
    private $category4 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType[] $productsID
     */
    private $productsID = null;

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
     * Gets as visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Sets a new visible
     *
     * @param bool $visible
     * @return self
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Gets as category1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory1()
    {
        return $this->category1;
    }

    /**
     * Sets a new category1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category1
     * @return self
     */
    public function setCategory1(CategoryEntityType $category1)
    {
        $this->category1 = $category1;
        return $this;
    }

    /**
     * Gets as category2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory2()
    {
        return $this->category2;
    }

    /**
     * Sets a new category2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category2
     * @return self
     */
    public function setCategory2(CategoryEntityType $category2)
    {
        $this->category2 = $category2;
        return $this;
    }

    /**
     * Gets as category3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory3()
    {
        return $this->category3;
    }

    /**
     * Sets a new category3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category3
     * @return self
     */
    public function setCategory3(CategoryEntityType $category3)
    {
        $this->category3 = $category3;
        return $this;
    }

    /**
     * Gets as category4
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory4()
    {
        return $this->category4;
    }

    /**
     * Sets a new category4
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category4
     * @return self
     */
    public function setCategory4(CategoryEntityType $category4)
    {
        $this->category4 = $category4;
        return $this;
    }

    /**
     * Adds as productID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $productID
     */
    public function addToProductsID(ProductIdEntityType $productID)
    {
        $this->productsID[] = $productID;
        return $this;
    }

    /**
     * isset productsID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductsID($index)
    {
        return isset($this->productsID[$index]);
    }

    /**
     * unset productsID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductsID($index)
    {
        unset($this->productsID[$index]);
    }

    /**
     * Gets as productsID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType[]
     */
    public function getProductsID()
    {
        return $this->productsID;
    }

    /**
     * Sets a new productsID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType[] $productsID
     * @return self
     */
    public function setProductsID(array $productsID)
    {
        $this->productsID = $productsID;
        return $this;
    }


}

