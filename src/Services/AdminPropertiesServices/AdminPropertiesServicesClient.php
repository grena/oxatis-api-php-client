<?php

namespace Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class AdminPropertiesServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ActivateRestrictedAdmin $parameters
     * @return ResultInterface|Type\ActivateRestrictedAdminResponse
     * @throws SoapException
     */
    public function activateRestrictedAdmin(\Heavymind\Oxatis\ApiClient\Type\ActivateRestrictedAdmin $parameters) : \Heavymind\Oxatis\ApiClient\Type\ActivateRestrictedAdminResponse
    {
        return $this->call('ActivateRestrictedAdmin', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeactivateRestrictedAdmin $parameters
     * @return ResultInterface|Type\DeactivateRestrictedAdminResponse
     * @throws SoapException
     */
    public function deactivateRestrictedAdmin(\Heavymind\Oxatis\ApiClient\Type\DeactivateRestrictedAdmin $parameters) : \Heavymind\Oxatis\ApiClient\Type\DeactivateRestrictedAdminResponse
    {
        return $this->call('DeactivateRestrictedAdmin', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetRestrictedAdminStatus $parameters
     * @return ResultInterface|Type\GetRestrictedAdminStatusResponse
     * @throws SoapException
     */
    public function getRestrictedAdminStatus(\Heavymind\Oxatis\ApiClient\Type\GetRestrictedAdminStatus $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetRestrictedAdminStatusResponse
    {
        return $this->call('GetRestrictedAdminStatus', $parameters);
    }

    /**
     * @param RequestInterface|Type\IsDecimalQtyEnabled $parameters
     * @return ResultInterface|Type\IsDecimalQtyEnabledResponse
     * @throws SoapException
     */
    public function isDecimalQtyEnabled(\Heavymind\Oxatis\ApiClient\Type\IsDecimalQtyEnabled $parameters) : \Heavymind\Oxatis\ApiClient\Type\IsDecimalQtyEnabledResponse
    {
        return $this->call('IsDecimalQtyEnabled', $parameters);
    }

    /**
     * @param RequestInterface|Type\DiscountRuleEnableStockID $parameters
     * @return ResultInterface|Type\DiscountRuleEnableStockIDResponse
     * @throws SoapException
     */
    public function discountRuleEnableStockID(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleEnableStockID $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleEnableStockIDResponse
    {
        return $this->call('DiscountRuleEnableStockID', $parameters);
    }

    /**
     * @param RequestInterface|Type\DiscountRuleDisableStockID $parameters
     * @return ResultInterface|Type\DiscountRuleDisableStockIDResponse
     * @throws SoapException
     */
    public function discountRuleDisableStockID(\Heavymind\Oxatis\ApiClient\Type\DiscountRuleDisableStockID $parameters) : \Heavymind\Oxatis\ApiClient\Type\DiscountRuleDisableStockIDResponse
    {
        return $this->call('DiscountRuleDisableStockID', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetServerDate $parameters
     * @return ResultInterface|Type\GetServerDateResponse
     * @throws SoapException
     */
    public function getServerDate(\Heavymind\Oxatis\ApiClient\Type\GetServerDate $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetServerDateResponse
    {
        return $this->call('GetServerDate', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDataPlugInfos $parameters
     * @return ResultInterface|Type\GetDataPlugInfosResponse
     * @throws SoapException
     */
    public function getDataPlugInfos(\Heavymind\Oxatis\ApiClient\Type\GetDataPlugInfos $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetDataPlugInfosResponse
    {
        return $this->call('GetDataPlugInfos', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDataPlugOnlineInfos $parameters
     * @return ResultInterface|Type\GetDataPlugOnlineInfosResponse
     * @throws SoapException
     */
    public function getDataPlugOnlineInfos(\Heavymind\Oxatis\ApiClient\Type\GetDataPlugOnlineInfos $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetDataPlugOnlineInfosResponse
    {
        return $this->call('GetDataPlugOnlineInfos', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetDataPlugOnlineInfos $parameters
     * @return ResultInterface|Type\SetDataPlugOnlineInfosResponse
     * @throws SoapException
     */
    public function setDataPlugOnlineInfos(\Heavymind\Oxatis\ApiClient\Type\SetDataPlugOnlineInfos $parameters) : \Heavymind\Oxatis\ApiClient\Type\SetDataPlugOnlineInfosResponse
    {
        return $this->call('SetDataPlugOnlineInfos', $parameters);
    }

    /**
     * @param RequestInterface|Type\IsDynamicImagesEnabled $parameters
     * @return ResultInterface|Type\IsDynamicImagesEnabledResponse
     * @throws SoapException
     */
    public function isDynamicImagesEnabled(\Heavymind\Oxatis\ApiClient\Type\IsDynamicImagesEnabled $parameters) : \Heavymind\Oxatis\ApiClient\Type\IsDynamicImagesEnabledResponse
    {
        return $this->call('IsDynamicImagesEnabled', $parameters);
    }

    /**
     * @param RequestInterface|Type\AddToEmailQueue $parameters
     * @return ResultInterface|Type\AddToEmailQueueResponse
     * @throws SoapException
     */
    public function addToEmailQueue(\Heavymind\Oxatis\ApiClient\Type\AddToEmailQueue $parameters) : \Heavymind\Oxatis\ApiClient\Type\AddToEmailQueueResponse
    {
        return $this->call('AddToEmailQueue', $parameters);
    }

    /**
     * @param RequestInterface|Type\FileImportFromStrBytes $parameters
     * @return ResultInterface|Type\FileImportFromStrBytesResponse
     * @throws SoapException
     */
    public function fileImportFromStrBytes(\Heavymind\Oxatis\ApiClient\Type\FileImportFromStrBytes $parameters) : \Heavymind\Oxatis\ApiClient\Type\FileImportFromStrBytesResponse
    {
        return $this->call('FileImportFromStrBytes', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTaskQueueInfos $parameters
     * @return ResultInterface|Type\GetTaskQueueInfosResponse
     * @throws SoapException
     */
    public function getTaskQueueInfos(\Heavymind\Oxatis\ApiClient\Type\GetTaskQueueInfos $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetTaskQueueInfosResponse
    {
        return $this->call('GetTaskQueueInfos', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAppProperties $parameters
     * @return ResultInterface|Type\GetAppPropertiesResponse
     * @throws SoapException
     */
    public function getAppProperties(\Heavymind\Oxatis\ApiClient\Type\GetAppProperties $parameters) : \Heavymind\Oxatis\ApiClient\Type\GetAppPropertiesResponse
    {
        return $this->call('GetAppProperties', $parameters);
    }


}

