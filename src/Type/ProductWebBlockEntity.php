<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductWebBlockEntity
{

    /**
     * @var string
     */
    private $DescriptionWebBlock;

    /**
     * @var string
     */
    private $LongDescriptionWebBlock;

    /**
     * @return string
     */
    public function getDescriptionWebBlock()
    {
        return $this->DescriptionWebBlock;
    }

    /**
     * @param string $DescriptionWebBlock
     * @return ProductWebBlockEntity
     */
    public function withDescriptionWebBlock($DescriptionWebBlock)
    {
        $new = clone $this;
        $new->DescriptionWebBlock = $DescriptionWebBlock;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongDescriptionWebBlock()
    {
        return $this->LongDescriptionWebBlock;
    }

    /**
     * @param string $LongDescriptionWebBlock
     * @return ProductWebBlockEntity
     */
    public function withLongDescriptionWebBlock($LongDescriptionWebBlock)
    {
        $new = clone $this;
        $new->LongDescriptionWebBlock = $LongDescriptionWebBlock;

        return $new;
    }


}

