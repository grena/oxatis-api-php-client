<?php

namespace Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProgressStateLogServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('GetOrderProgressStateLogs', Type\GetOrderProgressStateLogs::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('OrderIdEntity', Type\OrderIdEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('OrderProgressStateHistoryEntity', Type\OrderProgressStateHistoryEntity::class),
            new ClassMap('OrderDetailBundledItemBaseEntity', Type\OrderDetailBundledItemBaseEntity::class),
            new ClassMap('OrderDetailBundledItemEntity', Type\OrderDetailBundledItemEntity::class),
            new ClassMap('OrderDetailBaseEntity', Type\OrderDetailBaseEntity::class),
            new ClassMap('ArrayOfTax', Type\ArrayOfTax::class),
            new ClassMap('tax', Type\Tax::class),
            new ClassMap('OrderDetailEntity', Type\OrderDetailEntity::class),
            new ClassMap('ArrayOfOrderDetailBundledItemEntity', Type\ArrayOfOrderDetailBundledItemEntity::class),
            new ClassMap('OrderTaxDetailEntity', Type\OrderTaxDetailEntity::class),
            new ClassMap('OrderSummaryEntity', Type\OrderSummaryEntity::class),
            new ClassMap('OrderBaseEntity', Type\OrderBaseEntity::class),
            new ClassMap('ArrayOfOrderTaxDetailEntity', Type\ArrayOfOrderTaxDetailEntity::class),
            new ClassMap('OrderEntity', Type\OrderEntity::class),
            new ClassMap('ArrayOfOrderDetailEntity', Type\ArrayOfOrderDetailEntity::class),
            new ClassMap('GetOrderProgressStateLogsResponse', Type\GetOrderProgressStateLogsResponse::class),
            new ClassMap('SoapDataResultServiceOfProgressStateLogsDataOrderProgressStateLogsEntity', Type\SoapDataResultServiceOfProgressStateLogsDataOrderProgressStateLogsEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('ProgressStateLogsData', Type\ProgressStateLogsData::class),
            new ClassMap('OrderProgressStateLogsEntity', Type\OrderProgressStateLogsEntity::class),
            new ClassMap('ArrayOfOrderProgressStateHistoryEntity', Type\ArrayOfOrderProgressStateHistoryEntity::class),
            new ClassMap('GetUpdatedOrderList', Type\GetUpdatedOrderList::class),
            new ClassMap('ProgressStatePeriodEntity', Type\ProgressStatePeriodEntity::class),
            new ClassMap('PaginationEntity', Type\PaginationEntity::class),
            new ClassMap('ArrayOfOrderIdEntity', Type\ArrayOfOrderIdEntity::class),
            new ClassMap('GetUpdatedOrderListResponse', Type\GetUpdatedOrderListResponse::class),
            new ClassMap('SoapDataResultServiceOfProgressStatePeriodDataProgressStatePeriodEntity', Type\SoapDataResultServiceOfProgressStatePeriodDataProgressStatePeriodEntity::class),
            new ClassMap('ProgressStatePeriodData', Type\ProgressStatePeriodData::class),
        ]);
    }


}

