<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfCampaignTrackingEntityType
 *
 *
 * XSD Type: ArrayOfCampaignTrackingEntity
 */
class ArrayOfCampaignTrackingEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType[] $campaignTracking
     */
    private $campaignTracking = [
        
    ];

    /**
     * Adds as campaignTracking
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType $campaignTracking
     */
    public function addToCampaignTracking(CampaignTrackingEntityType $campaignTracking)
    {
        $this->campaignTracking[] = $campaignTracking;
        return $this;
    }

    /**
     * isset campaignTracking
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCampaignTracking($index)
    {
        return isset($this->campaignTracking[$index]);
    }

    /**
     * unset campaignTracking
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCampaignTracking($index)
    {
        unset($this->campaignTracking[$index]);
    }

    /**
     * Gets as campaignTracking
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType[]
     */
    public function getCampaignTracking()
    {
        return $this->campaignTracking;
    }

    /**
     * Sets a new campaignTracking
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CampaignTrackingEntityType[] $campaignTracking
     * @return self
     */
    public function setCampaignTracking(array $campaignTracking = null)
    {
        $this->campaignTracking = $campaignTracking;
        return $this;
    }


}

