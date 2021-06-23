<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DiscountRuleImportFromStrBytes implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleBytesEntity
     */
    private $DiscountRuleBytes;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleBytesEntity $DiscountRuleBytes
     */
    public function __construct($WSIdentitySoap, $DiscountRuleBytes)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->DiscountRuleBytes = $DiscountRuleBytes;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return DiscountRuleImportFromStrBytes
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleBytesEntity
     */
    public function getDiscountRuleBytes()
    {
        return $this->DiscountRuleBytes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleBytesEntity $DiscountRuleBytes
     * @return DiscountRuleImportFromStrBytes
     */
    public function withDiscountRuleBytes($DiscountRuleBytes)
    {
        $new = clone $this;
        $new->DiscountRuleBytes = $DiscountRuleBytes;

        return $new;
    }


}

