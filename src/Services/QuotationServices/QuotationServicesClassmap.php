<?php

namespace Heavymind\Oxatis\ApiClient\Services\QuotationServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class QuotationServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('QuotationDelete', Type\QuotationDelete::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('QuotationIdEntity', Type\QuotationIdEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('QuotationDetailBundledItemsBaseEntity', Type\QuotationDetailBundledItemsBaseEntity::class),
            new ClassMap('QuotationDetailBundledItemEntity', Type\QuotationDetailBundledItemEntity::class),
            new ClassMap('QuotationDetailBaseEntity', Type\QuotationDetailBaseEntity::class),
            new ClassMap('QuotationDetailEntity', Type\QuotationDetailEntity::class),
            new ClassMap('ArrayOfQuotationDetailBundledItemEntity', Type\ArrayOfQuotationDetailBundledItemEntity::class),
            new ClassMap('OrderTaxDetailEntity', Type\OrderTaxDetailEntity::class),
            new ClassMap('QuotationTaxDetailEntity', Type\QuotationTaxDetailEntity::class),
            new ClassMap('QuotationSummaryEntity', Type\QuotationSummaryEntity::class),
            new ClassMap('QuotationBaseEntity', Type\QuotationBaseEntity::class),
            new ClassMap('ArrayOfQuotationTaxDetailEntity', Type\ArrayOfQuotationTaxDetailEntity::class),
            new ClassMap('QuotationEntity', Type\QuotationEntity::class),
            new ClassMap('ArrayOfQuotationDetailEntity', Type\ArrayOfQuotationDetailEntity::class),
            new ClassMap('QuotationDeleteResponse', Type\QuotationDeleteResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('QuotationGet', Type\QuotationGet::class),
            new ClassMap('QuotationGetResponse', Type\QuotationGetResponse::class),
            new ClassMap('SoapDataResultServiceOfQuotationDataQuotationEntity', Type\SoapDataResultServiceOfQuotationDataQuotationEntity::class),
            new ClassMap('QuotationData', Type\QuotationData::class),
            new ClassMap('QuotationGetDetails', Type\QuotationGetDetails::class),
            new ClassMap('QuotationGetDetailsResponse', Type\QuotationGetDetailsResponse::class),
            new ClassMap('QuotationGetMoreDetails', Type\QuotationGetMoreDetails::class),
            new ClassMap('QuotationGetMoreDetailsResponse', Type\QuotationGetMoreDetailsResponse::class),
            new ClassMap('QuotationGetList', Type\QuotationGetList::class),
            new ClassMap('QuotationListEntity', Type\QuotationListEntity::class),
            new ClassMap('QuotationListHeaderEntity', Type\QuotationListHeaderEntity::class),
            new ClassMap('PaginationEntity', Type\PaginationEntity::class),
            new ClassMap('ArrayOfQuotationIdEntity', Type\ArrayOfQuotationIdEntity::class),
            new ClassMap('QuotationGetListResponse', Type\QuotationGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfQuotationListDataQuotationListEntity', Type\SoapDataResultServiceOfQuotationListDataQuotationListEntity::class),
            new ClassMap('QuotationListData', Type\QuotationListData::class),
            new ClassMap('QuotationGetSummaryList', Type\QuotationGetSummaryList::class),
            new ClassMap('QuotationSummaryListEntity', Type\QuotationSummaryListEntity::class),
            new ClassMap('ArrayOfQuotationSummaryEntity', Type\ArrayOfQuotationSummaryEntity::class),
            new ClassMap('QuotationGetSummaryListResponse', Type\QuotationGetSummaryListResponse::class),
            new ClassMap('SoapDataResultServiceOfQuotationSummaryListDataQuotationSummaryListEntity', Type\SoapDataResultServiceOfQuotationSummaryListDataQuotationSummaryListEntity::class),
            new ClassMap('QuotationSummaryListData', Type\QuotationSummaryListData::class),
            new ClassMap('QuotationCount', Type\QuotationCount::class),
            new ClassMap('QuotationCountResponse', Type\QuotationCountResponse::class),
            new ClassMap('SoapDataResultServiceOfCountDataInt32', Type\SoapDataResultServiceOfCountDataInt32::class),
            new ClassMap('CountData', Type\CountData::class),
        ]);
    }


}

