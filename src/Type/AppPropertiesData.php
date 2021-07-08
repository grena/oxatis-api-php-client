<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class AppPropertiesData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AppPropertiesEntity
     */
    protected $AppProperties;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\AppPropertiesEntity
     */
    public function getAppProperties()
    {
        return $this->AppProperties;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\AppPropertiesEntity $AppProperties
     * @return AppPropertiesData
     */
    public function withAppProperties($AppProperties)
    {
        $new = clone $this;
        $new->AppProperties = $AppProperties;

        return $new;
    }


}

