<?php

namespace Heavymind\Oxatis\ApiClient\Services\CategoryServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class CategoryServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ProductCategoryGet $parameters
     * @return ResultInterface|Type\ProductCategoryGetResponse
     * @throws SoapException
     */
    public function productCategoryGet(\Heavymind\Oxatis\ApiClient\Type\ProductCategoryGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductCategoryGetResponse
    {
        return $this->call('ProductCategoryGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\ProductCategoryGetTreeCollection $parameters
     * @return ResultInterface|Type\ProductCategoryGetTreeCollectionResponse
     * @throws SoapException
     */
    public function productCategoryGetTreeCollection(\Heavymind\Oxatis\ApiClient\Type\ProductCategoryGetTreeCollection $parameters) : \Heavymind\Oxatis\ApiClient\Type\ProductCategoryGetTreeCollectionResponse
    {
        return $this->call('ProductCategoryGetTreeCollection', $parameters);
    }


}

