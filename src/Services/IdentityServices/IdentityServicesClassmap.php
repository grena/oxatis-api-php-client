<?php

namespace Heavymind\Oxatis\ApiClient\Services\IdentityServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class IdentityServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('AccountPropertiesGet', Type\AccountPropertiesGet::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('AccountPropertiesGetResponse', Type\AccountPropertiesGetResponse::class),
            new ClassMap('SoapDataResultServiceOfDataAccountPropertiesAccountProperties', Type\SoapDataResultServiceOfDataAccountPropertiesAccountProperties::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('DataAccountProperties', Type\DataAccountProperties::class),
            new ClassMap('AccountProperties', Type\AccountProperties::class),
            new ClassMap('AccountSettingGet', Type\AccountSettingGet::class),
            new ClassMap('AccountSettingGetResponse', Type\AccountSettingGetResponse::class),
            new ClassMap('SoapDataResultServiceOfDataAccountSettingAccountSetting', Type\SoapDataResultServiceOfDataAccountSettingAccountSetting::class),
            new ClassMap('DataAccountSetting', Type\DataAccountSetting::class),
            new ClassMap('AccountSetting', Type\AccountSetting::class),
        ]);
    }


}

