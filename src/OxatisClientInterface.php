<?php

declare(strict_types=1);

namespace Heavymind\Oxatis\ApiClient;

use Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices\AdminPropertiesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\CategoryServices\CategoryServicesClient;
use Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices\DiscountRuleServicesClient;
use Heavymind\Oxatis\ApiClient\Services\IdentityServices\IdentityServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices\ImageGalleryServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OptionTypesServices\OptionTypesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OptionValuesServices\OptionValuesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OrderServices\OrderServicesClient;
use Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices\PaymentTypeServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices\ProductAttributesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductBundleServices\ProductBundleServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices\ProductCharacteristicsServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices\ProductPackagingServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductServices\ProductServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices\ProductWebBlockServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices\ProgressStateLogServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateServices\ProgressStateServicesClient;
use Heavymind\Oxatis\ApiClient\Services\QuotationServices\QuotationServicesClient;
use Heavymind\Oxatis\ApiClient\Services\SalesRepServices\SalesRepServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ShippingTypeServices\ShippingTypeServicesClient;
use Heavymind\Oxatis\ApiClient\Services\TaxRateServices\TaxRateServicesClient;
use Heavymind\Oxatis\ApiClient\Services\UserServices\UserServicesClient;
use Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap;

/**
 * Client to use the Oxatis API.
 *
 * @author Adrien Pétremann <hello@grena.fr>
 */
interface OxatisClientInterface
{
    public function getWSIdentitySoap(): WSIdentitySoap;

    public function  getIdentityServices(): IdentityServicesClient;
    public function  getAdminPropertiesServices(): AdminPropertiesServicesClient;
    public function  getProductServices(): ProductServicesClient;
    public function  getUserServices(): UserServicesClient;
    public function  getOrderServices(): OrderServicesClient;
    public function  getQuotationServices(): QuotationServicesClient;
    public function  getDiscountRuleServices(): DiscountRuleServicesClient;
    public function  getImageGalleryServices(): ImageGalleryServicesClient;
    public function  getSalesRepServices(): SalesRepServicesClient;
    public function  getShippingTypeServices(): ShippingTypeServicesClient;
    public function  getPaymentTypeServices(): PaymentTypeServicesClient;
    public function  getProgressStateServices(): ProgressStateServicesClient;
    public function  getTaxRateServices(): TaxRateServicesClient;
    public function  getOptionTypesServices(): OptionTypesServicesClient;
    public function  getOptionValuesServices(): OptionValuesServicesClient;
    public function  getProgressStateLogServices(): ProgressStateLogServicesClient;
    public function  getProductWebBlockServices(): ProductWebBlockServicesClient;
    public function  getProductCharacteristicsServices(): ProductCharacteristicsServicesClient;
    public function  getProductBundleServices(): ProductBundleServicesClient;
    public function  getProductPackagingServices(): ProductPackagingServicesClient;
    public function  getProductAttributesServices(): ProductAttributesServicesClient;
    public function  getCategoryServices(): CategoryServicesClient;
}
