<?php

namespace Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class PaymentTypeServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('PaymentTypeGet', Type\PaymentTypeGet::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('PaymentTypeEntity', Type\PaymentTypeEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('PaymentTypeGetResponse', Type\PaymentTypeGetResponse::class),
            new ClassMap('SoapDataResultServiceOfPaymentTypeDataPaymentTypeEntity', Type\SoapDataResultServiceOfPaymentTypeDataPaymentTypeEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('PaymentTypeData', Type\PaymentTypeData::class),
            new ClassMap('PaymentTypeGetList', Type\PaymentTypeGetList::class),
            new ClassMap('PaymentTypeGetListResponse', Type\PaymentTypeGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfPaymentTypeListDataPaymentTypeListEntity', Type\SoapDataResultServiceOfPaymentTypeListDataPaymentTypeListEntity::class),
            new ClassMap('PaymentTypeListData', Type\PaymentTypeListData::class),
            new ClassMap('PaymentTypeListEntity', Type\PaymentTypeListEntity::class),
            new ClassMap('ArrayOfPaymentTypeEntity', Type\ArrayOfPaymentTypeEntity::class),
        ]);
    }


}

