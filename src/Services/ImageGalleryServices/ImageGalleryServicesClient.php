<?php

namespace Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ImageImportFromUrl $parameters
     * @return ResultInterface|Type\ImageImportFromUrlResponse
     * @throws SoapException
     */
    public function imageImportFromUrl(\Heavymind\Oxatis\ApiClient\Type\ImageImportFromUrl $parameters) : \Heavymind\Oxatis\ApiClient\Type\ImageImportFromUrlResponse
    {
        return $this->call('ImageImportFromUrl', $parameters);
    }

    /**
     * @param RequestInterface|Type\ImageImportFromStrBytes $parameters
     * @return ResultInterface|Type\ImageImportFromStrBytesResponse
     * @throws SoapException
     */
    public function imageImportFromStrBytes(\Heavymind\Oxatis\ApiClient\Type\ImageImportFromStrBytes $parameters) : \Heavymind\Oxatis\ApiClient\Type\ImageImportFromStrBytesResponse
    {
        return $this->call('ImageImportFromStrBytes', $parameters);
    }

    /**
     * @param RequestInterface|Type\ImageDelete $parameters
     * @return ResultInterface|Type\ImageDeleteResponse
     * @throws SoapException
     */
    public function imageDelete(\Heavymind\Oxatis\ApiClient\Type\ImageDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\ImageDeleteResponse
    {
        return $this->call('ImageDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\ImageGet $parameters
     * @return ResultInterface|Type\ImageGetResponse
     * @throws SoapException
     */
    public function imageGet(\Heavymind\Oxatis\ApiClient\Type\ImageGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\ImageGetResponse
    {
        return $this->call('ImageGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\ImageGetList $parameters
     * @return ResultInterface|Type\ImageGetListResponse
     * @throws SoapException
     */
    public function imageGetList(\Heavymind\Oxatis\ApiClient\Type\ImageGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\ImageGetListResponse
    {
        return $this->call('ImageGetList', $parameters);
    }


}

