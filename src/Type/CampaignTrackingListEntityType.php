<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing CampaignTrackingListEntityType
 *
 *
 * XSD Type: CampaignTrackingListEntity
 */
class CampaignTrackingListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType[] $campaignTrackingArray
     */
    private $campaignTrackingArray = null;

    /**
     * Adds as campaignTracking
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType $campaignTracking
     */
    public function addToCampaignTrackingArray(CampaignTrackingEntityType $campaignTracking)
    {
        $this->campaignTrackingArray[] = $campaignTracking;
        return $this;
    }

    /**
     * isset campaignTrackingArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCampaignTrackingArray($index)
    {
        return isset($this->campaignTrackingArray[$index]);
    }

    /**
     * unset campaignTrackingArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCampaignTrackingArray($index)
    {
        unset($this->campaignTrackingArray[$index]);
    }

    /**
     * Gets as campaignTrackingArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType[]
     */
    public function getCampaignTrackingArray()
    {
        return $this->campaignTrackingArray;
    }

    /**
     * Sets a new campaignTrackingArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType[] $campaignTrackingArray
     * @return self
     */
    public function setCampaignTrackingArray(array $campaignTrackingArray)
    {
        $this->campaignTrackingArray = $campaignTrackingArray;
        return $this;
    }


}

