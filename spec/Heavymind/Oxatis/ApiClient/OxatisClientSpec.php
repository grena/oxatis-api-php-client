<?php

namespace spec\Heavymind\Oxatis\ApiClient;

use Heavymind\Oxatis\ApiClient\OxatisClient;
use Heavymind\Oxatis\ApiClient\OxatisClientInterface;
use Heavymind\Oxatis\ApiClient\Security\Authentication;
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
use PhpSpec\ObjectBehavior;

class OxatisClientSpec extends ObjectBehavior
{
    function let(Authentication $authentication)
    {
        $this->beConstructedWith(
            $authentication,
        );
    }

    function it_is_initializable()
    {
        $this->shouldImplement(OxatisClientInterface::class);
        $this->shouldHaveType(OxatisClient::class);
    }

    function it_returns_an_identity_soap_based_on_authentication(Authentication $authentication)
    {
        $authentication->getAppId()->willReturn('APP_ID');
        $authentication->getToken()->willReturn('TOKEN');

        $this->getWSIdentitySoap()->getAppid()->shouldBe('APP_ID');
        $this->getWSIdentitySoap()->getToken()->shouldBe('TOKEN');
    }

    function it_gets_identity_services()
    {
        $this->getIdentityServices()->shouldBeAnInstanceOf(IdentityServicesClient::class);
    }

    function it_gets_admin_properties_services()
    {
        $this->getAdminPropertiesServices()->shouldBeAnInstanceOf(AdminPropertiesServicesClient::class);
    }

    function it_gets_product_services()
    {
        $this->getProductServices()->shouldBeAnInstanceOf(ProductServicesClient::class);
    }

    function it_gets_user_services()
    {
        $this->getUserServices()->shouldBeAnInstanceOf(UserServicesClient::class);
    }

    function it_gets_order_services()
    {
        $this->getOrderServices()->shouldBeAnInstanceOf(OrderServicesClient::class);
    }

    function it_gets_quotation_services()
    {
        $this->getQuotationServices()->shouldBeAnInstanceOf(QuotationServicesClient::class);
    }

    function it_gets_discount_rule_services()
    {
        $this->getDiscountRuleServices()->shouldBeAnInstanceOf(DiscountRuleServicesClient::class);
    }

    function it_gets_image_gallery_services()
    {
        $this->getImageGalleryServices()->shouldBeAnInstanceOf(ImageGalleryServicesClient::class);
    }

    function it_gets_sales_rep_services()
    {
        $this->getSalesRepServices()->shouldBeAnInstanceOf(SalesRepServicesClient::class);
    }

    function it_gets_shipping_type_services()
    {
        $this->getShippingTypeServices()->shouldBeAnInstanceOf(ShippingTypeServicesClient::class);
    }

    function it_gets_payment_type_services()
    {
        $this->getPaymentTypeServices()->shouldBeAnInstanceOf(PaymentTypeServicesClient::class);
    }

    function it_gets_progress_state_services()
    {
        $this->getProgressStateServices()->shouldBeAnInstanceOf(ProgressStateServicesClient::class);
    }

    function it_gets_tax_rate_services()
    {
        $this->getTaxRateServices()->shouldBeAnInstanceOf(TaxRateServicesClient::class);
    }

    function it_gets_option_types_services()
    {
        $this->getOptionTypesServices()->shouldBeAnInstanceOf(OptionTypesServicesClient::class);
    }

    function it_gets_option_values_services()
    {
        $this->getOptionValuesServices()->shouldBeAnInstanceOf(OptionValuesServicesClient::class);
    }

    function it_gets_progress_state_log_services()
    {
        $this->getProgressStateLogServices()->shouldBeAnInstanceOf(ProgressStateLogServicesClient::class);
    }

    function it_gets_product_web_block_services()
    {
        $this->getProductWebBlockServices()->shouldBeAnInstanceOf(ProductWebBlockServicesClient::class);
    }

    function it_gets_product_characteristics_services()
    {
        $this->getProductCharacteristicsServices()->shouldBeAnInstanceOf(ProductCharacteristicsServicesClient::class);
    }

    function it_gets_product_bundle_services()
    {
        $this->getProductBundleServices()->shouldBeAnInstanceOf(ProductBundleServicesClient::class);
    }

    function it_gets_product_packaging_services()
    {
        $this->getProductPackagingServices()->shouldBeAnInstanceOf(ProductPackagingServicesClient::class);
    }

    function it_gets_product_attributes_services()
    {
        $this->getProductAttributesServices()->shouldBeAnInstanceOf(ProductAttributesServicesClient::class);
    }

    function it_gets_category_services()
    {
        $this->getCategoryServices()->shouldBeAnInstanceOf(CategoryServicesClient::class);
    }
}
