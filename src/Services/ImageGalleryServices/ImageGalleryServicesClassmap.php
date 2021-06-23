<?php

namespace Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ImageGalleryServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ImageImportFromUrl', Type\ImageImportFromUrl::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('ImageGalleryUrlEntity', Type\ImageGalleryUrlEntity::class),
            new ClassMap('ImageGalleryHeaderEntity', Type\ImageGalleryHeaderEntity::class),
            new ClassMap('ImageGalleryIdEntity', Type\ImageGalleryIdEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('CategoryEntity', Type\CategoryEntity::class),
            new ClassMap('ImageImportFromUrlResponse', Type\ImageImportFromUrlResponse::class),
            new ClassMap('SoapDataResultServiceOfImageGalleryIdDataImageGalleryIdEntity', Type\SoapDataResultServiceOfImageGalleryIdDataImageGalleryIdEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('ImageGalleryIdData', Type\ImageGalleryIdData::class),
            new ClassMap('ImageImportFromStrBytes', Type\ImageImportFromStrBytes::class),
            new ClassMap('ImageGalleryEntity', Type\ImageGalleryEntity::class),
            new ClassMap('ImageImportFromStrBytesResponse', Type\ImageImportFromStrBytesResponse::class),
            new ClassMap('SoapDataResultServiceOfOxIdDataInt32', Type\SoapDataResultServiceOfOxIdDataInt32::class),
            new ClassMap('OxIdData', Type\OxIdData::class),
            new ClassMap('ImageDelete', Type\ImageDelete::class),
            new ClassMap('ImageDeleteResponse', Type\ImageDeleteResponse::class),
            new ClassMap('ImageGet', Type\ImageGet::class),
            new ClassMap('ImageGetResponse', Type\ImageGetResponse::class),
            new ClassMap('ImageGetList', Type\ImageGetList::class),
            new ClassMap('PaginationEntity', Type\PaginationEntity::class),
            new ClassMap('ImageGetListResponse', Type\ImageGetListResponse::class),
            new ClassMap('SoapDataResultServiceOfImageGalleryIdListDataImageGalleryListEntity', Type\SoapDataResultServiceOfImageGalleryIdListDataImageGalleryListEntity::class),
            new ClassMap('ImageGalleryIdListData', Type\ImageGalleryIdListData::class),
            new ClassMap('ImageGalleryListEntity', Type\ImageGalleryListEntity::class),
            new ClassMap('ArrayOfImageGalleryIdEntity', Type\ArrayOfImageGalleryIdEntity::class),
            new ClassMap('FileObject', Type\FileObject::class),
        ]);
    }


}

