<?php

namespace Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class AdminPropertiesServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ActivateRestrictedAdmin', Type\ActivateRestrictedAdmin::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ActivateRestrictedAdminResponse', Type\ActivateRestrictedAdminResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('DeactivateRestrictedAdmin', Type\DeactivateRestrictedAdmin::class),
            new ClassMap('DeactivateRestrictedAdminResponse', Type\DeactivateRestrictedAdminResponse::class),
            new ClassMap('GetRestrictedAdminStatus', Type\GetRestrictedAdminStatus::class),
            new ClassMap('GetRestrictedAdminStatusResponse', Type\GetRestrictedAdminStatusResponse::class),
            new ClassMap('IsDecimalQtyEnabled', Type\IsDecimalQtyEnabled::class),
            new ClassMap('IsDecimalQtyEnabledResponse', Type\IsDecimalQtyEnabledResponse::class),
            new ClassMap('DiscountRuleEnableStockID', Type\DiscountRuleEnableStockID::class),
            new ClassMap('DiscountRuleEnableStockIDResponse', Type\DiscountRuleEnableStockIDResponse::class),
            new ClassMap('DiscountRuleDisableStockID', Type\DiscountRuleDisableStockID::class),
            new ClassMap('DiscountRuleDisableStockIDResponse', Type\DiscountRuleDisableStockIDResponse::class),
            new ClassMap('GetServerDate', Type\GetServerDate::class),
            new ClassMap('GetServerDateResponse', Type\GetServerDateResponse::class),
            new ClassMap('SoapDataResultServiceOfDTDataDateTime', Type\SoapDataResultServiceOfDTDataDateTime::class),
            new ClassMap('DTData', Type\DTData::class),
            new ClassMap('GetDataPlugInfos', Type\GetDataPlugInfos::class),
            new ClassMap('GetDataPlugInfosResponse', Type\GetDataPlugInfosResponse::class),
            new ClassMap('SoapDataResultServiceOfDataPlugInfosDataDataPlugInfosEntity', Type\SoapDataResultServiceOfDataPlugInfosDataDataPlugInfosEntity::class),
            new ClassMap('DataPlugInfosData', Type\DataPlugInfosData::class),
            new ClassMap('DataPlugInfosEntity', Type\DataPlugInfosEntity::class),
            new ClassMap('ConnectorInfosEntity', Type\ConnectorInfosEntity::class),
            new ClassMap('GetDataPlugOnlineInfos', Type\GetDataPlugOnlineInfos::class),
            new ClassMap('GetDataPlugOnlineInfosResponse', Type\GetDataPlugOnlineInfosResponse::class),
            new ClassMap('SoapDataResultServiceOfDataPlugOnlineInfosDataDataPlugOnlineInfosEntity', Type\SoapDataResultServiceOfDataPlugOnlineInfosDataDataPlugOnlineInfosEntity::class),
            new ClassMap('DataPlugOnlineInfosData', Type\DataPlugOnlineInfosData::class),
            new ClassMap('DataPlugOnlineInfosEntity', Type\DataPlugOnlineInfosEntity::class),
            new ClassMap('SetDataPlugOnlineInfos', Type\SetDataPlugOnlineInfos::class),
            new ClassMap('SetDataPlugOnlineInfosResponse', Type\SetDataPlugOnlineInfosResponse::class),
            new ClassMap('IsDynamicImagesEnabled', Type\IsDynamicImagesEnabled::class),
            new ClassMap('IsDynamicImagesEnabledResponse', Type\IsDynamicImagesEnabledResponse::class),
            new ClassMap('AddToEmailQueue', Type\AddToEmailQueue::class),
            new ClassMap('EmailQueueEntity', Type\EmailQueueEntity::class),
            new ClassMap('AddToEmailQueueResponse', Type\AddToEmailQueueResponse::class),
            new ClassMap('FileImportFromStrBytes', Type\FileImportFromStrBytes::class),
            new ClassMap('FileGalleryEntity', Type\FileGalleryEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('FileImportFromStrBytesResponse', Type\FileImportFromStrBytesResponse::class),
            new ClassMap('GetTaskQueueInfos', Type\GetTaskQueueInfos::class),
            new ClassMap('TaskQueueEntity', Type\TaskQueueEntity::class),
            new ClassMap('ArrayOfErrorEntity', Type\ArrayOfErrorEntity::class),
            new ClassMap('ErrorEntity', Type\ErrorEntity::class),
            new ClassMap('ArrayOfInt', Type\ArrayOfInt::class),
            new ClassMap('GetTaskQueueInfosResponse', Type\GetTaskQueueInfosResponse::class),
            new ClassMap('SoapDataResultServiceOfTaskQueueDataTaskQueueEntity', Type\SoapDataResultServiceOfTaskQueueDataTaskQueueEntity::class),
            new ClassMap('TaskQueueData', Type\TaskQueueData::class),
            new ClassMap('GetAppProperties', Type\GetAppProperties::class),
            new ClassMap('AppPropertiesEntity', Type\AppPropertiesEntity::class),
            new ClassMap('GetAppPropertiesResponse', Type\GetAppPropertiesResponse::class),
            new ClassMap('SoapDataResultServiceOfAppPropertiesDataAppPropertiesEntity', Type\SoapDataResultServiceOfAppPropertiesDataAppPropertiesEntity::class),
            new ClassMap('AppPropertiesData', Type\AppPropertiesData::class),
            new ClassMap('BinStreamObject', Type\BinStreamObject::class),
        ]);
    }


}

