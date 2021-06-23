<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DataPlugInfosEntity
{

    /**
     * @var string
     */
    private $MachineSerialNumber;

    /**
     * @var string
     */
    private $DataBaseFolder;

    /**
     * @var string
     */
    private $Version;

    /**
     * @var \DateTimeInterface
     */
    private $LastDateOfUse;

    /**
     * @var int
     */
    private $QuickConnectMode;

    /**
     * @var int
     */
    private $Users;

    /**
     * @var int
     */
    private $Products;

    /**
     * @var int
     */
    private $Images;

    /**
     * @var int
     */
    private $DiscountRules;

    /**
     * @var int
     */
    private $ProductPackaging;

    /**
     * @var int
     */
    private $Orders;

    /**
     * @var int
     */
    private $Quotations;

    /**
     * @var int
     */
    private $OrderProressStates;

    /**
     * @var int
     */
    private $ShippingAddresses;

    /**
     * @var bool
     */
    private $CopyCurrentInfosToOld;

    /**
     * @var string
     */
    private $Connectors;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ConnectorInfosEntity
     */
    private $ConnectorInfos;

    /**
     * @return string
     */
    public function getMachineSerialNumber()
    {
        return $this->MachineSerialNumber;
    }

    /**
     * @param string $MachineSerialNumber
     * @return DataPlugInfosEntity
     */
    public function withMachineSerialNumber($MachineSerialNumber)
    {
        $new = clone $this;
        $new->MachineSerialNumber = $MachineSerialNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getDataBaseFolder()
    {
        return $this->DataBaseFolder;
    }

    /**
     * @param string $DataBaseFolder
     * @return DataPlugInfosEntity
     */
    public function withDataBaseFolder($DataBaseFolder)
    {
        $new = clone $this;
        $new->DataBaseFolder = $DataBaseFolder;

        return $new;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return DataPlugInfosEntity
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastDateOfUse()
    {
        return $this->LastDateOfUse;
    }

    /**
     * @param \DateTimeInterface $LastDateOfUse
     * @return DataPlugInfosEntity
     */
    public function withLastDateOfUse($LastDateOfUse)
    {
        $new = clone $this;
        $new->LastDateOfUse = $LastDateOfUse;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuickConnectMode()
    {
        return $this->QuickConnectMode;
    }

    /**
     * @param int $QuickConnectMode
     * @return DataPlugInfosEntity
     */
    public function withQuickConnectMode($QuickConnectMode)
    {
        $new = clone $this;
        $new->QuickConnectMode = $QuickConnectMode;

        return $new;
    }

    /**
     * @return int
     */
    public function getUsers()
    {
        return $this->Users;
    }

    /**
     * @param int $Users
     * @return DataPlugInfosEntity
     */
    public function withUsers($Users)
    {
        $new = clone $this;
        $new->Users = $Users;

        return $new;
    }

    /**
     * @return int
     */
    public function getProducts()
    {
        return $this->Products;
    }

    /**
     * @param int $Products
     * @return DataPlugInfosEntity
     */
    public function withProducts($Products)
    {
        $new = clone $this;
        $new->Products = $Products;

        return $new;
    }

    /**
     * @return int
     */
    public function getImages()
    {
        return $this->Images;
    }

    /**
     * @param int $Images
     * @return DataPlugInfosEntity
     */
    public function withImages($Images)
    {
        $new = clone $this;
        $new->Images = $Images;

        return $new;
    }

    /**
     * @return int
     */
    public function getDiscountRules()
    {
        return $this->DiscountRules;
    }

    /**
     * @param int $DiscountRules
     * @return DataPlugInfosEntity
     */
    public function withDiscountRules($DiscountRules)
    {
        $new = clone $this;
        $new->DiscountRules = $DiscountRules;

        return $new;
    }

    /**
     * @return int
     */
    public function getProductPackaging()
    {
        return $this->ProductPackaging;
    }

    /**
     * @param int $ProductPackaging
     * @return DataPlugInfosEntity
     */
    public function withProductPackaging($ProductPackaging)
    {
        $new = clone $this;
        $new->ProductPackaging = $ProductPackaging;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrders()
    {
        return $this->Orders;
    }

    /**
     * @param int $Orders
     * @return DataPlugInfosEntity
     */
    public function withOrders($Orders)
    {
        $new = clone $this;
        $new->Orders = $Orders;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuotations()
    {
        return $this->Quotations;
    }

    /**
     * @param int $Quotations
     * @return DataPlugInfosEntity
     */
    public function withQuotations($Quotations)
    {
        $new = clone $this;
        $new->Quotations = $Quotations;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrderProressStates()
    {
        return $this->OrderProressStates;
    }

    /**
     * @param int $OrderProressStates
     * @return DataPlugInfosEntity
     */
    public function withOrderProressStates($OrderProressStates)
    {
        $new = clone $this;
        $new->OrderProressStates = $OrderProressStates;

        return $new;
    }

    /**
     * @return int
     */
    public function getShippingAddresses()
    {
        return $this->ShippingAddresses;
    }

    /**
     * @param int $ShippingAddresses
     * @return DataPlugInfosEntity
     */
    public function withShippingAddresses($ShippingAddresses)
    {
        $new = clone $this;
        $new->ShippingAddresses = $ShippingAddresses;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCopyCurrentInfosToOld()
    {
        return $this->CopyCurrentInfosToOld;
    }

    /**
     * @param bool $CopyCurrentInfosToOld
     * @return DataPlugInfosEntity
     */
    public function withCopyCurrentInfosToOld($CopyCurrentInfosToOld)
    {
        $new = clone $this;
        $new->CopyCurrentInfosToOld = $CopyCurrentInfosToOld;

        return $new;
    }

    /**
     * @return string
     */
    public function getConnectors()
    {
        return $this->Connectors;
    }

    /**
     * @param string $Connectors
     * @return DataPlugInfosEntity
     */
    public function withConnectors($Connectors)
    {
        $new = clone $this;
        $new->Connectors = $Connectors;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ConnectorInfosEntity
     */
    public function getConnectorInfos()
    {
        return $this->ConnectorInfos;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ConnectorInfosEntity $ConnectorInfos
     * @return DataPlugInfosEntity
     */
    public function withConnectorInfos($ConnectorInfos)
    {
        $new = clone $this;
        $new->ConnectorInfos = $ConnectorInfos;

        return $new;
    }


}

