<?php

namespace Heavymind\Oxatis\ApiClient\Services\OrderServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class OrderServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('OrderUpdateTracking', Type\OrderUpdateTracking::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('OrderProgressStateLogEntity', Type\OrderProgressStateLogEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('ReplaceFieldEntity', Type\ReplaceFieldEntity::class),
            new ClassMap('OrderUpdateTrackingResponse', Type\OrderUpdateTrackingResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('OrderUpdateLogisticsServiceProvider', Type\OrderUpdateLogisticsServiceProvider::class),
            new ClassMap('OrderLogisticsServiceProviderEntity', Type\OrderLogisticsServiceProviderEntity::class),
            new ClassMap('OrderUpdateLogisticsServiceProviderResponse', Type\OrderUpdateLogisticsServiceProviderResponse::class),
            new ClassMap('OrderUpdateTransportInfo', Type\OrderUpdateTransportInfo::class),
            new ClassMap('OrderEntity', Type\OrderEntity::class),
            new ClassMap('OrderBaseEntity', Type\OrderBaseEntity::class),
            new ClassMap('OrderSummaryEntity', Type\OrderSummaryEntity::class),
            new ClassMap('OrderIdEntity', Type\OrderIdEntity::class),
            new ClassMap('ArrayOfOrderTaxDetailEntity', Type\ArrayOfOrderTaxDetailEntity::class),
            new ClassMap('OrderTaxDetailEntity', Type\OrderTaxDetailEntity::class),
            new ClassMap('ArrayOfOrderDetailEntity', Type\ArrayOfOrderDetailEntity::class),
            new ClassMap('OrderDetailEntity', Type\OrderDetailEntity::class),
            new ClassMap('OrderDetailBaseEntity', Type\OrderDetailBaseEntity::class),
            new ClassMap('ArrayOfTax', Type\ArrayOfTax::class),
            new ClassMap('tax', Type\Tax::class),
            new ClassMap('ArrayOfOrderDetailBundledItemEntity', Type\ArrayOfOrderDetailBundledItemEntity::class),
            new ClassMap('OrderDetailBundledItemEntity', Type\OrderDetailBundledItemEntity::class),
            new ClassMap('OrderDetailBundledItemBaseEntity', Type\OrderDetailBundledItemBaseEntity::class),
            new ClassMap('OrderUpdateTransportInfoResponse', Type\OrderUpdateTransportInfoResponse::class),
            new ClassMap('OrderUpdateValidation', Type\OrderUpdateValidation::class),
            new ClassMap('OrderValidateEntity', Type\OrderValidateEntity::class),
            new ClassMap('OrderUpdateValidationResponse', Type\OrderUpdateValidationResponse::class),
            new ClassMap('OrderDelete', Type\OrderDelete::class),
            new ClassMap('OrderDeleteResponse', Type\OrderDeleteResponse::class),
            new ClassMap('OrderGet', Type\OrderGet::class),
            new ClassMap('OrderGetResponse', Type\OrderGetResponse::class),
            new ClassMap('SoapDataResultServiceOfOrderDataOrderEntity', Type\SoapDataResultServiceOfOrderDataOrderEntity::class),
            new ClassMap('OrderData', Type\OrderData::class),
            new ClassMap('OrderGetDetails', Type\OrderGetDetails::class),
            new ClassMap('OrderGetDetailsResponse', Type\OrderGetDetailsResponse::class),
            new ClassMap('OrderGetMoreDetails', Type\OrderGetMoreDetails::class),
            new ClassMap('OrderGetMoreDetailsResponse', Type\OrderGetMoreDetailsResponse::class),
            new ClassMap('OrderGetBySourceID', Type\OrderGetBySourceID::class),
            new ClassMap('OrderSourceEntity', Type\OrderSourceEntity::class),
            new ClassMap('OrderPeriodEntity', Type\OrderPeriodEntity::class),
            new ClassMap('OrderGetBySourceIDResponse', Type\OrderGetBySourceIDResponse::class),
            new ClassMap('OrderGetList', Type\OrderGetList::class),
            new ClassMap('OrderListEntity', Type\OrderListEntity::class),
            new ClassMap('OrderListHeaderEntity', Type\OrderListHeaderEntity::class),
            new ClassMap('PaginationEntity', Type\PaginationEntity::class),
            new ClassMap('ArrayOfOrderIdEntity', Type\ArrayOfOrderIdEntity::class),
            new ClassMap('OrderGetListResponse', Type\OrderGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfOrderListDataOrderListEntity', Type\SoapDataResultServiceOfOrderListDataOrderListEntity::class),
            new ClassMap('OrderListData', Type\OrderListData::class),
            new ClassMap('OrderGetSummaryList', Type\OrderGetSummaryList::class),
            new ClassMap('OrderSummaryListEntity', Type\OrderSummaryListEntity::class),
            new ClassMap('ArrayOfOrderSummaryEntity', Type\ArrayOfOrderSummaryEntity::class),
            new ClassMap('OrderGetSummaryListResponse', Type\OrderGetSummaryListResponse::class),
            new ClassMap('SoapDataResultServiceOfOrderSummaryListDataOrderSummaryListEntity', Type\SoapDataResultServiceOfOrderSummaryListDataOrderSummaryListEntity::class),
            new ClassMap('OrderSummaryListData', Type\OrderSummaryListData::class),
            new ClassMap('OrderCount', Type\OrderCount::class),
            new ClassMap('OrderCountResponse', Type\OrderCountResponse::class),
            new ClassMap('SoapDataResultServiceOfCountDataInt32', Type\SoapDataResultServiceOfCountDataInt32::class),
            new ClassMap('CountData', Type\CountData::class),
            new ClassMap('OrderAdd', Type\OrderAdd::class),
            new ClassMap('OrderBO', Type\OrderBO::class),
            new ClassMap('OrderBOBase', Type\OrderBOBase::class),
            new ClassMap('ContactBO', Type\ContactBO::class),
            new ClassMap('AddressBO', Type\AddressBO::class),
            new ClassMap('ArrayOfOrderItemBO', Type\ArrayOfOrderItemBO::class),
            new ClassMap('OrderItemBO', Type\OrderItemBO::class),
            new ClassMap('OrderItemBOBase', Type\OrderItemBOBase::class),
            new ClassMap('OrderAddResponse', Type\OrderAddResponse::class),
            new ClassMap('OrderPaymentRequest', Type\OrderPaymentRequest::class),
            new ClassMap('OrderPaymentRequestResponse', Type\OrderPaymentRequestResponse::class),
            new ClassMap('OrderGetManuallyConfirmed', Type\OrderGetManuallyConfirmed::class),
            new ClassMap('OrderGetManuallyConfirmedResponse', Type\OrderGetManuallyConfirmedResponse::class),
            new ClassMap('SoapDataResultServiceOfOrderIdListDataOrderIdListEntity', Type\SoapDataResultServiceOfOrderIdListDataOrderIdListEntity::class),
            new ClassMap('OrderIdListData', Type\OrderIdListData::class),
            new ClassMap('OrderIdListEntity', Type\OrderIdListEntity::class),
            new ClassMap('BinStreamObject', Type\BinStreamObject::class),
        ]);
    }


}

