<?php

declare(strict_types=1);

namespace Heavymind\Oxatis\ApiClient;

use Heavymind\Oxatis\ApiClient\Security\Authentication;
use Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices\AdminPropertiesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\AdminPropertiesServices\AdminPropertiesServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\CategoryServices\CategoryServicesClient;
use Heavymind\Oxatis\ApiClient\Services\CategoryServices\CategoryServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices\DiscountRuleServicesClient;
use Heavymind\Oxatis\ApiClient\Services\DiscountRuleServices\DiscountRuleServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\IdentityServices\IdentityServicesClient;
use Heavymind\Oxatis\ApiClient\Services\IdentityServices\IdentityServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices\ImageGalleryServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ImageGalleryServices\ImageGalleryServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\OptionTypesServices\OptionTypesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OptionTypesServices\OptionTypesServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\OptionValuesServices\OptionValuesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OptionValuesServices\OptionValuesServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\OrderServices\OrderServicesClient;
use Heavymind\Oxatis\ApiClient\Services\OrderServices\OrderServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices\PaymentTypeServicesClient;
use Heavymind\Oxatis\ApiClient\Services\PaymentTypeServices\PaymentTypeServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices\ProductAttributesServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductAttributesServices\ProductAttributesServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProductBundleServices\ProductBundleServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductBundleServices\ProductBundleServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices\ProductCharacteristicsServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductCharacteristicsServices\ProductCharacteristicsServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices\ProductPackagingServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductPackagingServices\ProductPackagingServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProductServices\ProductServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductServices\ProductServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices\ProductWebBlockServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProductWebBlockServices\ProductWebBlockServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices\ProgressStateLogServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateLogServices\ProgressStateLogServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateServices\ProgressStateServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ProgressStateServices\ProgressStateServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\QuotationServices\QuotationServicesClient;
use Heavymind\Oxatis\ApiClient\Services\QuotationServices\QuotationServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\SalesRepServices\SalesRepServicesClient;
use Heavymind\Oxatis\ApiClient\Services\SalesRepServices\SalesRepServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\ShippingTypeServices\ShippingTypeServicesClient;
use Heavymind\Oxatis\ApiClient\Services\ShippingTypeServices\ShippingTypeServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\TaxRateServices\TaxRateServicesClient;
use Heavymind\Oxatis\ApiClient\Services\TaxRateServices\TaxRateServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Services\UserServices\UserServicesClient;
use Heavymind\Oxatis\ApiClient\Services\UserServices\UserServicesClientFactory;
use Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap;

/**
 * Client implementation to use the Oxatis API.
 *
 * @author Adrien Pétremann <hello@grena.fr>
 */
class OxatisClient implements OxatisClientInterface
{
    private Authentication $authentication;

    public function __construct(Authentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function getWSIdentitySoap(): WSIdentitySoap
    {
        $WSIdentitySoap = new WSIdentitySoap();

        return $WSIdentitySoap
            ->withAppid($this->authentication->getAppId())
            ->withToken($this->authentication->getToken());
    }

    public function getIdentityServices(): IdentityServicesClient
    {
        return IdentityServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/IdentityServices.asmx?WSDL");
    }

    public function getAdminPropertiesServices(): AdminPropertiesServicesClient
    {
        return AdminPropertiesServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/AdminPropertiesServices.asmx?WSDL");
    }

    public function getProductServices(): ProductServicesClient
    {
        return ProductServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProductServices.asmx?WSDL");
    }

    public function getUserServices(): UserServicesClient
    {
        return UserServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/UserServices.asmx?WSDL");
    }

    public function getOrderServices(): OrderServicesClient
    {
        return OrderServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/OrderServices.asmx?WSDL");
    }

    public function getQuotationServices(): QuotationServicesClient
    {
        return QuotationServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/QuotationServices.asmx?WSDL");
    }

    public function getDiscountRuleServices(): DiscountRuleServicesClient
    {
        return DiscountRuleServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/DiscountRuleServices.asmx?WSDL");
    }

    public function getImageGalleryServices(): ImageGalleryServicesClient
    {
        return ImageGalleryServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ImageGalleryServices.asmx?WSDL");
    }

    public function getSalesRepServices(): SalesRepServicesClient
    {
        return SalesRepServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/SalesRepServices.asmx?WSDL");
    }

    public function getShippingTypeServices(): ShippingTypeServicesClient
    {
        return ShippingTypeServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ShippingTypeServices.asmx?WSDL");
    }

    public function getPaymentTypeServices(): PaymentTypeServicesClient
    {
        return PaymentTypeServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/PaymentTypeServices.asmx?WSDL");
    }

    public function getProgressStateServices(): ProgressStateServicesClient
    {
        return ProgressStateServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProgressStateServices.asmx?WSDL");
    }

    public function getTaxRateServices(): TaxRateServicesClient
    {
        return TaxRateServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/TaxRateServices.asmx?WSDL");
    }

    public function getOptionTypesServices(): OptionTypesServicesClient
    {
        return OptionTypesServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/OptionTypesServices.asmx?WSDL");
    }

    public function getOptionValuesServices(): OptionValuesServicesClient
    {
        return OptionValuesServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/OptionValuesServices.asmx?WSDL");
    }

    public function getProgressStateLogServices(): ProgressStateLogServicesClient
    {
        return ProgressStateLogServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProgressStateLogServices.asmx?WSDL");
    }

    public function getProductWebBlockServices(): ProductWebBlockServicesClient
    {
        return ProductWebBlockServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProductWebBlockServices.asmx?WSDL");
    }

    public function getProductCharacteristicsServices(): ProductCharacteristicsServicesClient
    {
        return ProductCharacteristicsServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProductCharacteristicsServices.asmx?WSDL");
    }

    public function getProductBundleServices(): ProductBundleServicesClient
    {
        return ProductBundleServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProductBundleServices.asmx?WSDL");
    }

    public function getProductPackagingServices(): ProductPackagingServicesClient
    {
        return ProductPackagingServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProductPackagingServices.asmx?WSDL");
    }

    public function getProductAttributesServices(): ProductAttributesServicesClient
    {
        return ProductAttributesServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/ProductAttributesServices.asmx?WSDL");
    }

    public function getCategoryServices(): CategoryServicesClient
    {
        return CategoryServicesClientFactory::factory("https://webservices.oxatis.com/webservices/HttpServices/SOAP/CategoryServices.asmx?WSDL");
    }
}
