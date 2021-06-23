<?php

namespace Heavymind\Oxatis\ApiClient\Services\CategoryServices;

use Heavymind\Oxatis\ApiClient\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class CategoryServicesClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('ProductCategoryGet', Type\ProductCategoryGet::class),
            new ClassMap('WSIdentitySoap', Type\WSIdentitySoap::class),
            new ClassMap('CategoryEntity', Type\CategoryEntity::class),
            new ClassMap('OxatisEntity', Type\OxatisEntity::class),
            new ClassMap('ProductCategoryEntity', Type\ProductCategoryEntity::class),
            new ClassMap('ProductCategoryGetResponse', Type\ProductCategoryGetResponse::class),
            new ClassMap('SoapDataResultServiceOfProductCategoryDataProductCategoryEntity', Type\SoapDataResultServiceOfProductCategoryDataProductCategoryEntity::class),
            new ClassMap('SoapResultService', Type\SoapResultService::class),
            new ClassMap('ProductCategoryData', Type\ProductCategoryData::class),
            new ClassMap('ProductCategoryGetTreeCollection', Type\ProductCategoryGetTreeCollection::class),
            new ClassMap('RootCategoryEntity', Type\RootCategoryEntity::class),
            new ClassMap('ProductCategoryGetTreeCollectionResponse', Type\ProductCategoryGetTreeCollectionResponse::class),
            new ClassMap('SoapDataResultServiceOfProductCategoryTreeCollectionDataProductCategoryTreeCollectionEntity', Type\SoapDataResultServiceOfProductCategoryTreeCollectionDataProductCategoryTreeCollectionEntity::class),
            new ClassMap('ProductCategoryTreeCollectionData', Type\ProductCategoryTreeCollectionData::class),
            new ClassMap('ProductCategoryTreeCollectionEntity', Type\ProductCategoryTreeCollectionEntity::class),
            new ClassMap('ProductCategoryTreeEntity', Type\ProductCategoryTreeEntity::class),
            new ClassMap('ArrayOfProductCategoryTreeEntity', Type\ArrayOfProductCategoryTreeEntity::class),
        ]);
    }


}

