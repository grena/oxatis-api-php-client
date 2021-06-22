<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing DataPlugInfosEntityType
 *
 *
 * XSD Type: DataPlugInfosEntity
 */
class DataPlugInfosEntityType
{

    /**
     * @var string $machineSerialNumber
     */
    private $machineSerialNumber = null;

    /**
     * @var string $dataPlugDataBaseFolder
     */
    private $dataPlugDataBaseFolder = null;

    /**
     * @var string $dataPlugVersion
     */
    private $dataPlugVersion = null;

    /**
     * @var \DateTime $lastDateOfUse
     */
    private $lastDateOfUse = null;

    /**
     * @var int $dataPlugMode
     */
    private $dataPlugMode = null;

    /**
     * @var int $users
     */
    private $users = null;

    /**
     * @var int $products
     */
    private $products = null;

    /**
     * @var int $images
     */
    private $images = null;

    /**
     * @var int $discountRules
     */
    private $discountRules = null;

    /**
     * @var int $productPackaging
     */
    private $productPackaging = null;

    /**
     * @var int $orders
     */
    private $orders = null;

    /**
     * @var int $quotations
     */
    private $quotations = null;

    /**
     * @var int $orderProressStates
     */
    private $orderProressStates = null;

    /**
     * @var int $shippingAddresses
     */
    private $shippingAddresses = null;

    /**
     * @var bool $copyCurrentInfosToOld
     */
    private $copyCurrentInfosToOld = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ConnectorInfosEntityType[] $connectorInfos
     */
    private $connectorInfos = [
        
    ];

    /**
     * Gets as machineSerialNumber
     *
     * @return string
     */
    public function getMachineSerialNumber()
    {
        return $this->machineSerialNumber;
    }

    /**
     * Sets a new machineSerialNumber
     *
     * @param string $machineSerialNumber
     * @return self
     */
    public function setMachineSerialNumber($machineSerialNumber)
    {
        $this->machineSerialNumber = $machineSerialNumber;
        return $this;
    }

    /**
     * Gets as dataPlugDataBaseFolder
     *
     * @return string
     */
    public function getDataPlugDataBaseFolder()
    {
        return $this->dataPlugDataBaseFolder;
    }

    /**
     * Sets a new dataPlugDataBaseFolder
     *
     * @param string $dataPlugDataBaseFolder
     * @return self
     */
    public function setDataPlugDataBaseFolder($dataPlugDataBaseFolder)
    {
        $this->dataPlugDataBaseFolder = $dataPlugDataBaseFolder;
        return $this;
    }

    /**
     * Gets as dataPlugVersion
     *
     * @return string
     */
    public function getDataPlugVersion()
    {
        return $this->dataPlugVersion;
    }

    /**
     * Sets a new dataPlugVersion
     *
     * @param string $dataPlugVersion
     * @return self
     */
    public function setDataPlugVersion($dataPlugVersion)
    {
        $this->dataPlugVersion = $dataPlugVersion;
        return $this;
    }

    /**
     * Gets as lastDateOfUse
     *
     * @return \DateTime
     */
    public function getLastDateOfUse()
    {
        return $this->lastDateOfUse;
    }

    /**
     * Sets a new lastDateOfUse
     *
     * @param \DateTime $lastDateOfUse
     * @return self
     */
    public function setLastDateOfUse(\DateTime $lastDateOfUse)
    {
        $this->lastDateOfUse = $lastDateOfUse;
        return $this;
    }

    /**
     * Gets as dataPlugMode
     *
     * @return int
     */
    public function getDataPlugMode()
    {
        return $this->dataPlugMode;
    }

    /**
     * Sets a new dataPlugMode
     *
     * @param int $dataPlugMode
     * @return self
     */
    public function setDataPlugMode($dataPlugMode)
    {
        $this->dataPlugMode = $dataPlugMode;
        return $this;
    }

    /**
     * Gets as users
     *
     * @return int
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * @param int $users
     * @return self
     */
    public function setUsers($users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * Gets as products
     *
     * @return int
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param int $products
     * @return self
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * Gets as images
     *
     * @return int
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets a new images
     *
     * @param int $images
     * @return self
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Gets as discountRules
     *
     * @return int
     */
    public function getDiscountRules()
    {
        return $this->discountRules;
    }

    /**
     * Sets a new discountRules
     *
     * @param int $discountRules
     * @return self
     */
    public function setDiscountRules($discountRules)
    {
        $this->discountRules = $discountRules;
        return $this;
    }

    /**
     * Gets as productPackaging
     *
     * @return int
     */
    public function getProductPackaging()
    {
        return $this->productPackaging;
    }

    /**
     * Sets a new productPackaging
     *
     * @param int $productPackaging
     * @return self
     */
    public function setProductPackaging($productPackaging)
    {
        $this->productPackaging = $productPackaging;
        return $this;
    }

    /**
     * Gets as orders
     *
     * @return int
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Sets a new orders
     *
     * @param int $orders
     * @return self
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
        return $this;
    }

    /**
     * Gets as quotations
     *
     * @return int
     */
    public function getQuotations()
    {
        return $this->quotations;
    }

    /**
     * Sets a new quotations
     *
     * @param int $quotations
     * @return self
     */
    public function setQuotations($quotations)
    {
        $this->quotations = $quotations;
        return $this;
    }

    /**
     * Gets as orderProressStates
     *
     * @return int
     */
    public function getOrderProressStates()
    {
        return $this->orderProressStates;
    }

    /**
     * Sets a new orderProressStates
     *
     * @param int $orderProressStates
     * @return self
     */
    public function setOrderProressStates($orderProressStates)
    {
        $this->orderProressStates = $orderProressStates;
        return $this;
    }

    /**
     * Gets as shippingAddresses
     *
     * @return int
     */
    public function getShippingAddresses()
    {
        return $this->shippingAddresses;
    }

    /**
     * Sets a new shippingAddresses
     *
     * @param int $shippingAddresses
     * @return self
     */
    public function setShippingAddresses($shippingAddresses)
    {
        $this->shippingAddresses = $shippingAddresses;
        return $this;
    }

    /**
     * Gets as copyCurrentInfosToOld
     *
     * @return bool
     */
    public function getCopyCurrentInfosToOld()
    {
        return $this->copyCurrentInfosToOld;
    }

    /**
     * Sets a new copyCurrentInfosToOld
     *
     * @param bool $copyCurrentInfosToOld
     * @return self
     */
    public function setCopyCurrentInfosToOld($copyCurrentInfosToOld)
    {
        $this->copyCurrentInfosToOld = $copyCurrentInfosToOld;
        return $this;
    }

    /**
     * Adds as connectorInfos
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ConnectorInfosEntityType $connectorInfos
     */
    public function addToConnectorInfos(ConnectorInfosEntityType $connectorInfos)
    {
        $this->connectorInfos[] = $connectorInfos;
        return $this;
    }

    /**
     * isset connectorInfos
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectorInfos($index)
    {
        return isset($this->connectorInfos[$index]);
    }

    /**
     * unset connectorInfos
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectorInfos($index)
    {
        unset($this->connectorInfos[$index]);
    }

    /**
     * Gets as connectorInfos
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ConnectorInfosEntityType[]
     */
    public function getConnectorInfos()
    {
        return $this->connectorInfos;
    }

    /**
     * Sets a new connectorInfos
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ConnectorInfosEntityType[] $connectorInfos
     * @return self
     */
    public function setConnectorInfos(array $connectorInfos)
    {
        $this->connectorInfos = $connectorInfos;
        return $this;
    }


}

