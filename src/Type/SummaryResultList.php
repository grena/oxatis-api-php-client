<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SummaryResultList
{

    /**
     * @var
     * \Heavymind\Oxatis\ApiClient\Type\ArrayOfSoapDataResultServiceOfOxIdDataInt32
     */
    private $SummaryResults;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfSoapDataResultServiceOfOxIdDataInt32
     */
    public function getSummaryResults()
    {
        return $this->SummaryResults;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfSoapDataResultServiceOfOxIdDataInt32 $SummaryResults
     * @return SummaryResultList
     */
    public function withSummaryResults($SummaryResults)
    {
        $new = clone $this;
        $new->SummaryResults = $SummaryResults;

        return $new;
    }


}

