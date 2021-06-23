<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapResultService
{

    /**
     * @var int
     */
    private $StatusCode;

    /**
     * @var string
     */
    private $ErrorDetails;

    /**
     * @var int
     */
    private $StatusSubCode;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return SoapResultService
     */
    public function withStatusCode($StatusCode)
    {
        $new = clone $this;
        $new->StatusCode = $StatusCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->ErrorDetails;
    }

    /**
     * @param string $ErrorDetails
     * @return SoapResultService
     */
    public function withErrorDetails($ErrorDetails)
    {
        $new = clone $this;
        $new->ErrorDetails = $ErrorDetails;

        return $new;
    }

    /**
     * @return int
     */
    public function getStatusSubCode()
    {
        return $this->StatusSubCode;
    }

    /**
     * @param int $StatusSubCode
     * @return SoapResultService
     */
    public function withStatusSubCode($StatusSubCode)
    {
        $new = clone $this;
        $new->StatusSubCode = $StatusSubCode;

        return $new;
    }


}

