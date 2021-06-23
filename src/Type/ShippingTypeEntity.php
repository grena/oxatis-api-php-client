<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ShippingTypeEntity
{

    /**
     * @var float
     */
    private $PriceVATExcluded;

    /**
     * @var float
     */
    private $WeightVolumeEquivalent;

    /**
     * @var float
     */
    private $PercentageOrValueToAdd;

    /**
     * @var string
     */
    private $FormulaType;

    /**
     * @var float
     */
    private $AmountMin;

    /**
     * @var float
     */
    private $AmountMax;

    /**
     * @var \DateTimeInterface
     */
    private $DateBegin;

    /**
     * @var \DateTimeInterface
     */
    private $DateEnd;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $ImgFileName;

    /**
     * @var int
     */
    private $SalesOrderWeightMax;

    /**
     * @var int
     */
    private $SalesOrderWeightMin;

    /**
     * @var bool
     */
    private $PayCOD;

    /**
     * @var bool
     */
    private $ApplyOnWebSite;

    /**
     * @var bool
     */
    private $ApplyOnMobileSite;

    /**
     * @var bool
     */
    private $ApplyOnMOTO;

    /**
     * @var bool
     */
    private $ApplyOnPrice1;

    /**
     * @var bool
     */
    private $ApplyOnPrice2;

    /**
     * @var bool
     */
    private $ApplyOnPrice3;

    /**
     * @var bool
     */
    private $ApplyOnPrice4;

    /**
     * @var bool
     */
    private $ApplyOnPrice5;

    /**
     * @var bool
     */
    private $ApplyOnPrice6;

    /**
     * @var bool
     */
    private $ApplyOnPrice7;

    /**
     * @var bool
     */
    private $ApplyOnPrice8;

    /**
     * @var bool
     */
    private $ApplyOnPrice9;

    /**
     * @var bool
     */
    private $ApplyOnPrice10;

    /**
     * @var int
     */
    private $State;

    /**
     * @var int
     */
    private $Position;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity
     */
    private $TaxClass;

    /**
     * @var float
     */
    private $TaxRate;

    /**
     * @var string
     */
    private $TaxCountryISOCode;

    /**
     * @var string
     */
    private $TransportName;

    /**
     * @var int
     */
    private $TransportSpeed;

    /**
     * @var string
     */
    private $TransportType;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $UserAssociatedCategory;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $UserCategoryExcluded;

    /**
     * @var string
     */
    private $ZipCodeFilter;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var bool
     */
    private $StrictTier;

    /**
     * @var float
     */
    private $StartRange;

    /**
     * @var float
     */
    private $UpRange1;

    /**
     * @var float
     */
    private $Price1VATExcluded;

    /**
     * @var float
     */
    private $UpRange2;

    /**
     * @var float
     */
    private $Price2VATExcluded;

    /**
     * @var float
     */
    private $UpRange3;

    /**
     * @var float
     */
    private $Price3VATExcluded;

    /**
     * @var float
     */
    private $UpRange4;

    /**
     * @var float
     */
    private $Price4VATExcluded;

    /**
     * @var float
     */
    private $UpRange5;

    /**
     * @var float
     */
    private $Price5VATExcluded;

    /**
     * @var float
     */
    private $UpRange6;

    /**
     * @var float
     */
    private $Price6VATExcluded;

    /**
     * @var float
     */
    private $UpRange7;

    /**
     * @var float
     */
    private $Price7VATExcluded;

    /**
     * @var float
     */
    private $UpRange8;

    /**
     * @var float
     */
    private $Price8VATExcluded;

    /**
     * @var float
     */
    private $UpRange9;

    /**
     * @var float
     */
    private $Price9VATExcluded;

    /**
     * @var float
     */
    private $UpRange10;

    /**
     * @var float
     */
    private $Price10VATExcluded;

    /**
     * @var float
     */
    private $UpRange11;

    /**
     * @var float
     */
    private $Price11VATExcluded;

    /**
     * @var float
     */
    private $UpRange12;

    /**
     * @var float
     */
    private $Price12VATExcluded;

    /**
     * @var float
     */
    private $UpRange13;

    /**
     * @var float
     */
    private $Price13VATExcluded;

    /**
     * @var float
     */
    private $UpRange14;

    /**
     * @var float
     */
    private $Price14VATExcluded;

    /**
     * @var float
     */
    private $UpRange15;

    /**
     * @var float
     */
    private $Price15VATExcluded;

    /**
     * @var float
     */
    private $UpRange16;

    /**
     * @var float
     */
    private $Price16VATExcluded;

    /**
     * @var float
     */
    private $UpRange17;

    /**
     * @var float
     */
    private $Price17VATExcluded;

    /**
     * @var float
     */
    private $UpRange18;

    /**
     * @var float
     */
    private $Price18VATExcluded;

    /**
     * @var float
     */
    private $UpRange19;

    /**
     * @var float
     */
    private $Price19VATExcluded;

    /**
     * @var float
     */
    private $UpRange20;

    /**
     * @var float
     */
    private $Price20VATExcluded;

    /**
     * @var float
     */
    private $UpRange21;

    /**
     * @var float
     */
    private $Price21VATExcluded;

    /**
     * @var float
     */
    private $UpRange22;

    /**
     * @var float
     */
    private $Price22VATExcluded;

    /**
     * @var float
     */
    private $UpRange23;

    /**
     * @var float
     */
    private $Price23VATExcluded;

    /**
     * @var float
     */
    private $UpRange24;

    /**
     * @var float
     */
    private $Price24VATExcluded;

    /**
     * @var float
     */
    private $UpRange25;

    /**
     * @var float
     */
    private $Price25VATExcluded;

    /**
     * @var float
     */
    private $UpRange26;

    /**
     * @var float
     */
    private $Price26VATExcluded;

    /**
     * @var float
     */
    private $UpRange27;

    /**
     * @var float
     */
    private $Price27VATExcluded;

    /**
     * @var float
     */
    private $UpRange28;

    /**
     * @var float
     */
    private $Price28VATExcluded;

    /**
     * @var float
     */
    private $UpRange29;

    /**
     * @var float
     */
    private $Price29VATExcluded;

    /**
     * @var float
     */
    private $UpRange30;

    /**
     * @var float
     */
    private $Price30VATExcluded;

    /**
     * @var float
     */
    private $UpRange31;

    /**
     * @var float
     */
    private $Price31VATExcluded;

    /**
     * @var float
     */
    private $UpRange32;

    /**
     * @var float
     */
    private $Price32VATExcluded;

    /**
     * @var float
     */
    private $UpRange33;

    /**
     * @var float
     */
    private $Price33VATExcluded;

    /**
     * @var float
     */
    private $UpRange34;

    /**
     * @var float
     */
    private $Price34VATExcluded;

    /**
     * @var float
     */
    private $UpRange35;

    /**
     * @var float
     */
    private $Price35VATExcluded;

    /**
     * @var float
     */
    private $UpRange36;

    /**
     * @var float
     */
    private $Price36VATExcluded;

    /**
     * @var bool
     */
    private $GeoZone;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfCountryEntity
     */
    private $CountryArray;

    /**
     * @return float
     */
    public function getPriceVATExcluded()
    {
        return $this->PriceVATExcluded;
    }

    /**
     * @param float $PriceVATExcluded
     * @return ShippingTypeEntity
     */
    public function withPriceVATExcluded($PriceVATExcluded)
    {
        $new = clone $this;
        $new->PriceVATExcluded = $PriceVATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getWeightVolumeEquivalent()
    {
        return $this->WeightVolumeEquivalent;
    }

    /**
     * @param float $WeightVolumeEquivalent
     * @return ShippingTypeEntity
     */
    public function withWeightVolumeEquivalent($WeightVolumeEquivalent)
    {
        $new = clone $this;
        $new->WeightVolumeEquivalent = $WeightVolumeEquivalent;

        return $new;
    }

    /**
     * @return float
     */
    public function getPercentageOrValueToAdd()
    {
        return $this->PercentageOrValueToAdd;
    }

    /**
     * @param float $PercentageOrValueToAdd
     * @return ShippingTypeEntity
     */
    public function withPercentageOrValueToAdd($PercentageOrValueToAdd)
    {
        $new = clone $this;
        $new->PercentageOrValueToAdd = $PercentageOrValueToAdd;

        return $new;
    }

    /**
     * @return string
     */
    public function getFormulaType()
    {
        return $this->FormulaType;
    }

    /**
     * @param string $FormulaType
     * @return ShippingTypeEntity
     */
    public function withFormulaType($FormulaType)
    {
        $new = clone $this;
        $new->FormulaType = $FormulaType;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountMin()
    {
        return $this->AmountMin;
    }

    /**
     * @param float $AmountMin
     * @return ShippingTypeEntity
     */
    public function withAmountMin($AmountMin)
    {
        $new = clone $this;
        $new->AmountMin = $AmountMin;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountMax()
    {
        return $this->AmountMax;
    }

    /**
     * @param float $AmountMax
     * @return ShippingTypeEntity
     */
    public function withAmountMax($AmountMax)
    {
        $new = clone $this;
        $new->AmountMax = $AmountMax;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateBegin()
    {
        return $this->DateBegin;
    }

    /**
     * @param \DateTimeInterface $DateBegin
     * @return ShippingTypeEntity
     */
    public function withDateBegin($DateBegin)
    {
        $new = clone $this;
        $new->DateBegin = $DateBegin;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateEnd()
    {
        return $this->DateEnd;
    }

    /**
     * @param \DateTimeInterface $DateEnd
     * @return ShippingTypeEntity
     */
    public function withDateEnd($DateEnd)
    {
        $new = clone $this;
        $new->DateEnd = $DateEnd;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ShippingTypeEntity
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getImgFileName()
    {
        return $this->ImgFileName;
    }

    /**
     * @param string $ImgFileName
     * @return ShippingTypeEntity
     */
    public function withImgFileName($ImgFileName)
    {
        $new = clone $this;
        $new->ImgFileName = $ImgFileName;

        return $new;
    }

    /**
     * @return int
     */
    public function getSalesOrderWeightMax()
    {
        return $this->SalesOrderWeightMax;
    }

    /**
     * @param int $SalesOrderWeightMax
     * @return ShippingTypeEntity
     */
    public function withSalesOrderWeightMax($SalesOrderWeightMax)
    {
        $new = clone $this;
        $new->SalesOrderWeightMax = $SalesOrderWeightMax;

        return $new;
    }

    /**
     * @return int
     */
    public function getSalesOrderWeightMin()
    {
        return $this->SalesOrderWeightMin;
    }

    /**
     * @param int $SalesOrderWeightMin
     * @return ShippingTypeEntity
     */
    public function withSalesOrderWeightMin($SalesOrderWeightMin)
    {
        $new = clone $this;
        $new->SalesOrderWeightMin = $SalesOrderWeightMin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPayCOD()
    {
        return $this->PayCOD;
    }

    /**
     * @param bool $PayCOD
     * @return ShippingTypeEntity
     */
    public function withPayCOD($PayCOD)
    {
        $new = clone $this;
        $new->PayCOD = $PayCOD;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnWebSite()
    {
        return $this->ApplyOnWebSite;
    }

    /**
     * @param bool $ApplyOnWebSite
     * @return ShippingTypeEntity
     */
    public function withApplyOnWebSite($ApplyOnWebSite)
    {
        $new = clone $this;
        $new->ApplyOnWebSite = $ApplyOnWebSite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnMobileSite()
    {
        return $this->ApplyOnMobileSite;
    }

    /**
     * @param bool $ApplyOnMobileSite
     * @return ShippingTypeEntity
     */
    public function withApplyOnMobileSite($ApplyOnMobileSite)
    {
        $new = clone $this;
        $new->ApplyOnMobileSite = $ApplyOnMobileSite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnMOTO()
    {
        return $this->ApplyOnMOTO;
    }

    /**
     * @param bool $ApplyOnMOTO
     * @return ShippingTypeEntity
     */
    public function withApplyOnMOTO($ApplyOnMOTO)
    {
        $new = clone $this;
        $new->ApplyOnMOTO = $ApplyOnMOTO;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice1()
    {
        return $this->ApplyOnPrice1;
    }

    /**
     * @param bool $ApplyOnPrice1
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice1($ApplyOnPrice1)
    {
        $new = clone $this;
        $new->ApplyOnPrice1 = $ApplyOnPrice1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice2()
    {
        return $this->ApplyOnPrice2;
    }

    /**
     * @param bool $ApplyOnPrice2
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice2($ApplyOnPrice2)
    {
        $new = clone $this;
        $new->ApplyOnPrice2 = $ApplyOnPrice2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice3()
    {
        return $this->ApplyOnPrice3;
    }

    /**
     * @param bool $ApplyOnPrice3
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice3($ApplyOnPrice3)
    {
        $new = clone $this;
        $new->ApplyOnPrice3 = $ApplyOnPrice3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice4()
    {
        return $this->ApplyOnPrice4;
    }

    /**
     * @param bool $ApplyOnPrice4
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice4($ApplyOnPrice4)
    {
        $new = clone $this;
        $new->ApplyOnPrice4 = $ApplyOnPrice4;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice5()
    {
        return $this->ApplyOnPrice5;
    }

    /**
     * @param bool $ApplyOnPrice5
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice5($ApplyOnPrice5)
    {
        $new = clone $this;
        $new->ApplyOnPrice5 = $ApplyOnPrice5;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice6()
    {
        return $this->ApplyOnPrice6;
    }

    /**
     * @param bool $ApplyOnPrice6
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice6($ApplyOnPrice6)
    {
        $new = clone $this;
        $new->ApplyOnPrice6 = $ApplyOnPrice6;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice7()
    {
        return $this->ApplyOnPrice7;
    }

    /**
     * @param bool $ApplyOnPrice7
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice7($ApplyOnPrice7)
    {
        $new = clone $this;
        $new->ApplyOnPrice7 = $ApplyOnPrice7;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice8()
    {
        return $this->ApplyOnPrice8;
    }

    /**
     * @param bool $ApplyOnPrice8
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice8($ApplyOnPrice8)
    {
        $new = clone $this;
        $new->ApplyOnPrice8 = $ApplyOnPrice8;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice9()
    {
        return $this->ApplyOnPrice9;
    }

    /**
     * @param bool $ApplyOnPrice9
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice9($ApplyOnPrice9)
    {
        $new = clone $this;
        $new->ApplyOnPrice9 = $ApplyOnPrice9;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyOnPrice10()
    {
        return $this->ApplyOnPrice10;
    }

    /**
     * @param bool $ApplyOnPrice10
     * @return ShippingTypeEntity
     */
    public function withApplyOnPrice10($ApplyOnPrice10)
    {
        $new = clone $this;
        $new->ApplyOnPrice10 = $ApplyOnPrice10;

        return $new;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param int $State
     * @return ShippingTypeEntity
     */
    public function withState($State)
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return ShippingTypeEntity
     */
    public function withPosition($Position)
    {
        $new = clone $this;
        $new->Position = $Position;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity
     */
    public function getTaxClass()
    {
        return $this->TaxClass;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity $TaxClass
     * @return ShippingTypeEntity
     */
    public function withTaxClass($TaxClass)
    {
        $new = clone $this;
        $new->TaxClass = $TaxClass;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return ShippingTypeEntity
     */
    public function withTaxRate($TaxRate)
    {
        $new = clone $this;
        $new->TaxRate = $TaxRate;

        return $new;
    }

    /**
     * @return string
     */
    public function getTaxCountryISOCode()
    {
        return $this->TaxCountryISOCode;
    }

    /**
     * @param string $TaxCountryISOCode
     * @return ShippingTypeEntity
     */
    public function withTaxCountryISOCode($TaxCountryISOCode)
    {
        $new = clone $this;
        $new->TaxCountryISOCode = $TaxCountryISOCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransportName()
    {
        return $this->TransportName;
    }

    /**
     * @param string $TransportName
     * @return ShippingTypeEntity
     */
    public function withTransportName($TransportName)
    {
        $new = clone $this;
        $new->TransportName = $TransportName;

        return $new;
    }

    /**
     * @return int
     */
    public function getTransportSpeed()
    {
        return $this->TransportSpeed;
    }

    /**
     * @param int $TransportSpeed
     * @return ShippingTypeEntity
     */
    public function withTransportSpeed($TransportSpeed)
    {
        $new = clone $this;
        $new->TransportSpeed = $TransportSpeed;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransportType()
    {
        return $this->TransportType;
    }

    /**
     * @param string $TransportType
     * @return ShippingTypeEntity
     */
    public function withTransportType($TransportType)
    {
        $new = clone $this;
        $new->TransportType = $TransportType;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getUserAssociatedCategory()
    {
        return $this->UserAssociatedCategory;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $UserAssociatedCategory
     * @return ShippingTypeEntity
     */
    public function withUserAssociatedCategory($UserAssociatedCategory)
    {
        $new = clone $this;
        $new->UserAssociatedCategory = $UserAssociatedCategory;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getUserCategoryExcluded()
    {
        return $this->UserCategoryExcluded;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $UserCategoryExcluded
     * @return ShippingTypeEntity
     */
    public function withUserCategoryExcluded($UserCategoryExcluded)
    {
        $new = clone $this;
        $new->UserCategoryExcluded = $UserCategoryExcluded;

        return $new;
    }

    /**
     * @return string
     */
    public function getZipCodeFilter()
    {
        return $this->ZipCodeFilter;
    }

    /**
     * @param string $ZipCodeFilter
     * @return ShippingTypeEntity
     */
    public function withZipCodeFilter($ZipCodeFilter)
    {
        $new = clone $this;
        $new->ZipCodeFilter = $ZipCodeFilter;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return ShippingTypeEntity
     */
    public function withComment($Comment)
    {
        $new = clone $this;
        $new->Comment = $Comment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStrictTier()
    {
        return $this->StrictTier;
    }

    /**
     * @param bool $StrictTier
     * @return ShippingTypeEntity
     */
    public function withStrictTier($StrictTier)
    {
        $new = clone $this;
        $new->StrictTier = $StrictTier;

        return $new;
    }

    /**
     * @return float
     */
    public function getStartRange()
    {
        return $this->StartRange;
    }

    /**
     * @param float $StartRange
     * @return ShippingTypeEntity
     */
    public function withStartRange($StartRange)
    {
        $new = clone $this;
        $new->StartRange = $StartRange;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange1()
    {
        return $this->UpRange1;
    }

    /**
     * @param float $UpRange1
     * @return ShippingTypeEntity
     */
    public function withUpRange1($UpRange1)
    {
        $new = clone $this;
        $new->UpRange1 = $UpRange1;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice1VATExcluded()
    {
        return $this->Price1VATExcluded;
    }

    /**
     * @param float $Price1VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice1VATExcluded($Price1VATExcluded)
    {
        $new = clone $this;
        $new->Price1VATExcluded = $Price1VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange2()
    {
        return $this->UpRange2;
    }

    /**
     * @param float $UpRange2
     * @return ShippingTypeEntity
     */
    public function withUpRange2($UpRange2)
    {
        $new = clone $this;
        $new->UpRange2 = $UpRange2;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice2VATExcluded()
    {
        return $this->Price2VATExcluded;
    }

    /**
     * @param float $Price2VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice2VATExcluded($Price2VATExcluded)
    {
        $new = clone $this;
        $new->Price2VATExcluded = $Price2VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange3()
    {
        return $this->UpRange3;
    }

    /**
     * @param float $UpRange3
     * @return ShippingTypeEntity
     */
    public function withUpRange3($UpRange3)
    {
        $new = clone $this;
        $new->UpRange3 = $UpRange3;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice3VATExcluded()
    {
        return $this->Price3VATExcluded;
    }

    /**
     * @param float $Price3VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice3VATExcluded($Price3VATExcluded)
    {
        $new = clone $this;
        $new->Price3VATExcluded = $Price3VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange4()
    {
        return $this->UpRange4;
    }

    /**
     * @param float $UpRange4
     * @return ShippingTypeEntity
     */
    public function withUpRange4($UpRange4)
    {
        $new = clone $this;
        $new->UpRange4 = $UpRange4;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice4VATExcluded()
    {
        return $this->Price4VATExcluded;
    }

    /**
     * @param float $Price4VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice4VATExcluded($Price4VATExcluded)
    {
        $new = clone $this;
        $new->Price4VATExcluded = $Price4VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange5()
    {
        return $this->UpRange5;
    }

    /**
     * @param float $UpRange5
     * @return ShippingTypeEntity
     */
    public function withUpRange5($UpRange5)
    {
        $new = clone $this;
        $new->UpRange5 = $UpRange5;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice5VATExcluded()
    {
        return $this->Price5VATExcluded;
    }

    /**
     * @param float $Price5VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice5VATExcluded($Price5VATExcluded)
    {
        $new = clone $this;
        $new->Price5VATExcluded = $Price5VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange6()
    {
        return $this->UpRange6;
    }

    /**
     * @param float $UpRange6
     * @return ShippingTypeEntity
     */
    public function withUpRange6($UpRange6)
    {
        $new = clone $this;
        $new->UpRange6 = $UpRange6;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice6VATExcluded()
    {
        return $this->Price6VATExcluded;
    }

    /**
     * @param float $Price6VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice6VATExcluded($Price6VATExcluded)
    {
        $new = clone $this;
        $new->Price6VATExcluded = $Price6VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange7()
    {
        return $this->UpRange7;
    }

    /**
     * @param float $UpRange7
     * @return ShippingTypeEntity
     */
    public function withUpRange7($UpRange7)
    {
        $new = clone $this;
        $new->UpRange7 = $UpRange7;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice7VATExcluded()
    {
        return $this->Price7VATExcluded;
    }

    /**
     * @param float $Price7VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice7VATExcluded($Price7VATExcluded)
    {
        $new = clone $this;
        $new->Price7VATExcluded = $Price7VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange8()
    {
        return $this->UpRange8;
    }

    /**
     * @param float $UpRange8
     * @return ShippingTypeEntity
     */
    public function withUpRange8($UpRange8)
    {
        $new = clone $this;
        $new->UpRange8 = $UpRange8;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice8VATExcluded()
    {
        return $this->Price8VATExcluded;
    }

    /**
     * @param float $Price8VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice8VATExcluded($Price8VATExcluded)
    {
        $new = clone $this;
        $new->Price8VATExcluded = $Price8VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange9()
    {
        return $this->UpRange9;
    }

    /**
     * @param float $UpRange9
     * @return ShippingTypeEntity
     */
    public function withUpRange9($UpRange9)
    {
        $new = clone $this;
        $new->UpRange9 = $UpRange9;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice9VATExcluded()
    {
        return $this->Price9VATExcluded;
    }

    /**
     * @param float $Price9VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice9VATExcluded($Price9VATExcluded)
    {
        $new = clone $this;
        $new->Price9VATExcluded = $Price9VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange10()
    {
        return $this->UpRange10;
    }

    /**
     * @param float $UpRange10
     * @return ShippingTypeEntity
     */
    public function withUpRange10($UpRange10)
    {
        $new = clone $this;
        $new->UpRange10 = $UpRange10;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice10VATExcluded()
    {
        return $this->Price10VATExcluded;
    }

    /**
     * @param float $Price10VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice10VATExcluded($Price10VATExcluded)
    {
        $new = clone $this;
        $new->Price10VATExcluded = $Price10VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange11()
    {
        return $this->UpRange11;
    }

    /**
     * @param float $UpRange11
     * @return ShippingTypeEntity
     */
    public function withUpRange11($UpRange11)
    {
        $new = clone $this;
        $new->UpRange11 = $UpRange11;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice11VATExcluded()
    {
        return $this->Price11VATExcluded;
    }

    /**
     * @param float $Price11VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice11VATExcluded($Price11VATExcluded)
    {
        $new = clone $this;
        $new->Price11VATExcluded = $Price11VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange12()
    {
        return $this->UpRange12;
    }

    /**
     * @param float $UpRange12
     * @return ShippingTypeEntity
     */
    public function withUpRange12($UpRange12)
    {
        $new = clone $this;
        $new->UpRange12 = $UpRange12;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice12VATExcluded()
    {
        return $this->Price12VATExcluded;
    }

    /**
     * @param float $Price12VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice12VATExcluded($Price12VATExcluded)
    {
        $new = clone $this;
        $new->Price12VATExcluded = $Price12VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange13()
    {
        return $this->UpRange13;
    }

    /**
     * @param float $UpRange13
     * @return ShippingTypeEntity
     */
    public function withUpRange13($UpRange13)
    {
        $new = clone $this;
        $new->UpRange13 = $UpRange13;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice13VATExcluded()
    {
        return $this->Price13VATExcluded;
    }

    /**
     * @param float $Price13VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice13VATExcluded($Price13VATExcluded)
    {
        $new = clone $this;
        $new->Price13VATExcluded = $Price13VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange14()
    {
        return $this->UpRange14;
    }

    /**
     * @param float $UpRange14
     * @return ShippingTypeEntity
     */
    public function withUpRange14($UpRange14)
    {
        $new = clone $this;
        $new->UpRange14 = $UpRange14;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice14VATExcluded()
    {
        return $this->Price14VATExcluded;
    }

    /**
     * @param float $Price14VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice14VATExcluded($Price14VATExcluded)
    {
        $new = clone $this;
        $new->Price14VATExcluded = $Price14VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange15()
    {
        return $this->UpRange15;
    }

    /**
     * @param float $UpRange15
     * @return ShippingTypeEntity
     */
    public function withUpRange15($UpRange15)
    {
        $new = clone $this;
        $new->UpRange15 = $UpRange15;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice15VATExcluded()
    {
        return $this->Price15VATExcluded;
    }

    /**
     * @param float $Price15VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice15VATExcluded($Price15VATExcluded)
    {
        $new = clone $this;
        $new->Price15VATExcluded = $Price15VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange16()
    {
        return $this->UpRange16;
    }

    /**
     * @param float $UpRange16
     * @return ShippingTypeEntity
     */
    public function withUpRange16($UpRange16)
    {
        $new = clone $this;
        $new->UpRange16 = $UpRange16;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice16VATExcluded()
    {
        return $this->Price16VATExcluded;
    }

    /**
     * @param float $Price16VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice16VATExcluded($Price16VATExcluded)
    {
        $new = clone $this;
        $new->Price16VATExcluded = $Price16VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange17()
    {
        return $this->UpRange17;
    }

    /**
     * @param float $UpRange17
     * @return ShippingTypeEntity
     */
    public function withUpRange17($UpRange17)
    {
        $new = clone $this;
        $new->UpRange17 = $UpRange17;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice17VATExcluded()
    {
        return $this->Price17VATExcluded;
    }

    /**
     * @param float $Price17VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice17VATExcluded($Price17VATExcluded)
    {
        $new = clone $this;
        $new->Price17VATExcluded = $Price17VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange18()
    {
        return $this->UpRange18;
    }

    /**
     * @param float $UpRange18
     * @return ShippingTypeEntity
     */
    public function withUpRange18($UpRange18)
    {
        $new = clone $this;
        $new->UpRange18 = $UpRange18;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice18VATExcluded()
    {
        return $this->Price18VATExcluded;
    }

    /**
     * @param float $Price18VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice18VATExcluded($Price18VATExcluded)
    {
        $new = clone $this;
        $new->Price18VATExcluded = $Price18VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange19()
    {
        return $this->UpRange19;
    }

    /**
     * @param float $UpRange19
     * @return ShippingTypeEntity
     */
    public function withUpRange19($UpRange19)
    {
        $new = clone $this;
        $new->UpRange19 = $UpRange19;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice19VATExcluded()
    {
        return $this->Price19VATExcluded;
    }

    /**
     * @param float $Price19VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice19VATExcluded($Price19VATExcluded)
    {
        $new = clone $this;
        $new->Price19VATExcluded = $Price19VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange20()
    {
        return $this->UpRange20;
    }

    /**
     * @param float $UpRange20
     * @return ShippingTypeEntity
     */
    public function withUpRange20($UpRange20)
    {
        $new = clone $this;
        $new->UpRange20 = $UpRange20;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice20VATExcluded()
    {
        return $this->Price20VATExcluded;
    }

    /**
     * @param float $Price20VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice20VATExcluded($Price20VATExcluded)
    {
        $new = clone $this;
        $new->Price20VATExcluded = $Price20VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange21()
    {
        return $this->UpRange21;
    }

    /**
     * @param float $UpRange21
     * @return ShippingTypeEntity
     */
    public function withUpRange21($UpRange21)
    {
        $new = clone $this;
        $new->UpRange21 = $UpRange21;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice21VATExcluded()
    {
        return $this->Price21VATExcluded;
    }

    /**
     * @param float $Price21VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice21VATExcluded($Price21VATExcluded)
    {
        $new = clone $this;
        $new->Price21VATExcluded = $Price21VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange22()
    {
        return $this->UpRange22;
    }

    /**
     * @param float $UpRange22
     * @return ShippingTypeEntity
     */
    public function withUpRange22($UpRange22)
    {
        $new = clone $this;
        $new->UpRange22 = $UpRange22;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice22VATExcluded()
    {
        return $this->Price22VATExcluded;
    }

    /**
     * @param float $Price22VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice22VATExcluded($Price22VATExcluded)
    {
        $new = clone $this;
        $new->Price22VATExcluded = $Price22VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange23()
    {
        return $this->UpRange23;
    }

    /**
     * @param float $UpRange23
     * @return ShippingTypeEntity
     */
    public function withUpRange23($UpRange23)
    {
        $new = clone $this;
        $new->UpRange23 = $UpRange23;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice23VATExcluded()
    {
        return $this->Price23VATExcluded;
    }

    /**
     * @param float $Price23VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice23VATExcluded($Price23VATExcluded)
    {
        $new = clone $this;
        $new->Price23VATExcluded = $Price23VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange24()
    {
        return $this->UpRange24;
    }

    /**
     * @param float $UpRange24
     * @return ShippingTypeEntity
     */
    public function withUpRange24($UpRange24)
    {
        $new = clone $this;
        $new->UpRange24 = $UpRange24;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice24VATExcluded()
    {
        return $this->Price24VATExcluded;
    }

    /**
     * @param float $Price24VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice24VATExcluded($Price24VATExcluded)
    {
        $new = clone $this;
        $new->Price24VATExcluded = $Price24VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange25()
    {
        return $this->UpRange25;
    }

    /**
     * @param float $UpRange25
     * @return ShippingTypeEntity
     */
    public function withUpRange25($UpRange25)
    {
        $new = clone $this;
        $new->UpRange25 = $UpRange25;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice25VATExcluded()
    {
        return $this->Price25VATExcluded;
    }

    /**
     * @param float $Price25VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice25VATExcluded($Price25VATExcluded)
    {
        $new = clone $this;
        $new->Price25VATExcluded = $Price25VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange26()
    {
        return $this->UpRange26;
    }

    /**
     * @param float $UpRange26
     * @return ShippingTypeEntity
     */
    public function withUpRange26($UpRange26)
    {
        $new = clone $this;
        $new->UpRange26 = $UpRange26;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice26VATExcluded()
    {
        return $this->Price26VATExcluded;
    }

    /**
     * @param float $Price26VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice26VATExcluded($Price26VATExcluded)
    {
        $new = clone $this;
        $new->Price26VATExcluded = $Price26VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange27()
    {
        return $this->UpRange27;
    }

    /**
     * @param float $UpRange27
     * @return ShippingTypeEntity
     */
    public function withUpRange27($UpRange27)
    {
        $new = clone $this;
        $new->UpRange27 = $UpRange27;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice27VATExcluded()
    {
        return $this->Price27VATExcluded;
    }

    /**
     * @param float $Price27VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice27VATExcluded($Price27VATExcluded)
    {
        $new = clone $this;
        $new->Price27VATExcluded = $Price27VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange28()
    {
        return $this->UpRange28;
    }

    /**
     * @param float $UpRange28
     * @return ShippingTypeEntity
     */
    public function withUpRange28($UpRange28)
    {
        $new = clone $this;
        $new->UpRange28 = $UpRange28;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice28VATExcluded()
    {
        return $this->Price28VATExcluded;
    }

    /**
     * @param float $Price28VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice28VATExcluded($Price28VATExcluded)
    {
        $new = clone $this;
        $new->Price28VATExcluded = $Price28VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange29()
    {
        return $this->UpRange29;
    }

    /**
     * @param float $UpRange29
     * @return ShippingTypeEntity
     */
    public function withUpRange29($UpRange29)
    {
        $new = clone $this;
        $new->UpRange29 = $UpRange29;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice29VATExcluded()
    {
        return $this->Price29VATExcluded;
    }

    /**
     * @param float $Price29VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice29VATExcluded($Price29VATExcluded)
    {
        $new = clone $this;
        $new->Price29VATExcluded = $Price29VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange30()
    {
        return $this->UpRange30;
    }

    /**
     * @param float $UpRange30
     * @return ShippingTypeEntity
     */
    public function withUpRange30($UpRange30)
    {
        $new = clone $this;
        $new->UpRange30 = $UpRange30;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice30VATExcluded()
    {
        return $this->Price30VATExcluded;
    }

    /**
     * @param float $Price30VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice30VATExcluded($Price30VATExcluded)
    {
        $new = clone $this;
        $new->Price30VATExcluded = $Price30VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange31()
    {
        return $this->UpRange31;
    }

    /**
     * @param float $UpRange31
     * @return ShippingTypeEntity
     */
    public function withUpRange31($UpRange31)
    {
        $new = clone $this;
        $new->UpRange31 = $UpRange31;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice31VATExcluded()
    {
        return $this->Price31VATExcluded;
    }

    /**
     * @param float $Price31VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice31VATExcluded($Price31VATExcluded)
    {
        $new = clone $this;
        $new->Price31VATExcluded = $Price31VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange32()
    {
        return $this->UpRange32;
    }

    /**
     * @param float $UpRange32
     * @return ShippingTypeEntity
     */
    public function withUpRange32($UpRange32)
    {
        $new = clone $this;
        $new->UpRange32 = $UpRange32;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice32VATExcluded()
    {
        return $this->Price32VATExcluded;
    }

    /**
     * @param float $Price32VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice32VATExcluded($Price32VATExcluded)
    {
        $new = clone $this;
        $new->Price32VATExcluded = $Price32VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange33()
    {
        return $this->UpRange33;
    }

    /**
     * @param float $UpRange33
     * @return ShippingTypeEntity
     */
    public function withUpRange33($UpRange33)
    {
        $new = clone $this;
        $new->UpRange33 = $UpRange33;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice33VATExcluded()
    {
        return $this->Price33VATExcluded;
    }

    /**
     * @param float $Price33VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice33VATExcluded($Price33VATExcluded)
    {
        $new = clone $this;
        $new->Price33VATExcluded = $Price33VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange34()
    {
        return $this->UpRange34;
    }

    /**
     * @param float $UpRange34
     * @return ShippingTypeEntity
     */
    public function withUpRange34($UpRange34)
    {
        $new = clone $this;
        $new->UpRange34 = $UpRange34;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice34VATExcluded()
    {
        return $this->Price34VATExcluded;
    }

    /**
     * @param float $Price34VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice34VATExcluded($Price34VATExcluded)
    {
        $new = clone $this;
        $new->Price34VATExcluded = $Price34VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange35()
    {
        return $this->UpRange35;
    }

    /**
     * @param float $UpRange35
     * @return ShippingTypeEntity
     */
    public function withUpRange35($UpRange35)
    {
        $new = clone $this;
        $new->UpRange35 = $UpRange35;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice35VATExcluded()
    {
        return $this->Price35VATExcluded;
    }

    /**
     * @param float $Price35VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice35VATExcluded($Price35VATExcluded)
    {
        $new = clone $this;
        $new->Price35VATExcluded = $Price35VATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUpRange36()
    {
        return $this->UpRange36;
    }

    /**
     * @param float $UpRange36
     * @return ShippingTypeEntity
     */
    public function withUpRange36($UpRange36)
    {
        $new = clone $this;
        $new->UpRange36 = $UpRange36;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice36VATExcluded()
    {
        return $this->Price36VATExcluded;
    }

    /**
     * @param float $Price36VATExcluded
     * @return ShippingTypeEntity
     */
    public function withPrice36VATExcluded($Price36VATExcluded)
    {
        $new = clone $this;
        $new->Price36VATExcluded = $Price36VATExcluded;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGeoZone()
    {
        return $this->GeoZone;
    }

    /**
     * @param bool $GeoZone
     * @return ShippingTypeEntity
     */
    public function withGeoZone($GeoZone)
    {
        $new = clone $this;
        $new->GeoZone = $GeoZone;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfCountryEntity
     */
    public function getCountryArray()
    {
        return $this->CountryArray;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfCountryEntity $CountryArray
     * @return ShippingTypeEntity
     */
    public function withCountryArray($CountryArray)
    {
        $new = clone $this;
        $new->CountryArray = $CountryArray;

        return $new;
    }


}

