<?php

namespace Heavymind\Oxatis\ApiClient\Services\UserServices;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Heavymind\Oxatis\ApiClient\Type;

class UserServicesClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\UserAdd $parameters
     * @return ResultInterface|Type\UserAddResponse
     * @throws SoapException
     */
    public function userAdd(\Heavymind\Oxatis\ApiClient\Type\UserAdd $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserAddResponse
    {
        return $this->call('UserAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserImport $parameters
     * @return ResultInterface|Type\UserImportResponse
     * @throws SoapException
     */
    public function userImport(\Heavymind\Oxatis\ApiClient\Type\UserImport $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserImportResponse
    {
        return $this->call('UserImport', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdate $parameters
     * @return ResultInterface|Type\UserUpdateResponse
     * @throws SoapException
     */
    public function userUpdate(\Heavymind\Oxatis\ApiClient\Type\UserUpdate $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateResponse
    {
        return $this->call('UserUpdate', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserDelete $parameters
     * @return ResultInterface|Type\UserDeleteResponse
     * @throws SoapException
     */
    public function userDelete(\Heavymind\Oxatis\ApiClient\Type\UserDelete $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserDeleteResponse
    {
        return $this->call('UserDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserDeleteShippingAddress $parameters
     * @return ResultInterface|Type\UserDeleteShippingAddressResponse
     * @throws SoapException
     */
    public function userDeleteShippingAddress(\Heavymind\Oxatis\ApiClient\Type\UserDeleteShippingAddress $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserDeleteShippingAddressResponse
    {
        return $this->call('UserDeleteShippingAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateBillingAddress $parameters
     * @return ResultInterface|Type\UserUpdateBillingAddressResponse
     * @throws SoapException
     */
    public function userUpdateBillingAddress(\Heavymind\Oxatis\ApiClient\Type\UserUpdateBillingAddress $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateBillingAddressResponse
    {
        return $this->call('UserUpdateBillingAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateBillingAddressLines $parameters
     * @return ResultInterface|Type\UserUpdateBillingAddressLinesResponse
     * @throws SoapException
     */
    public function userUpdateBillingAddressLines(\Heavymind\Oxatis\ApiClient\Type\UserUpdateBillingAddressLines $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateBillingAddressLinesResponse
    {
        return $this->call('UserUpdateBillingAddressLines', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateCategories $parameters
     * @return ResultInterface|Type\UserUpdateCategoriesResponse
     * @throws SoapException
     */
    public function userUpdateCategories(\Heavymind\Oxatis\ApiClient\Type\UserUpdateCategories $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateCategoriesResponse
    {
        return $this->call('UserUpdateCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateCompanyName $parameters
     * @return ResultInterface|Type\UserUpdateCompanyNameResponse
     * @throws SoapException
     */
    public function userUpdateCompanyName(\Heavymind\Oxatis\ApiClient\Type\UserUpdateCompanyName $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateCompanyNameResponse
    {
        return $this->call('UserUpdateCompanyName', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateCompanyVATNumber $parameters
     * @return ResultInterface|Type\UserUpdateCompanyVATNumberResponse
     * @throws SoapException
     */
    public function userUpdateCompanyVATNumber(\Heavymind\Oxatis\ApiClient\Type\UserUpdateCompanyVATNumber $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateCompanyVATNumberResponse
    {
        return $this->call('UserUpdateCompanyVATNumber', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateCustomerAccount $parameters
     * @return ResultInterface|Type\UserUpdateCustomerAccountResponse
     * @throws SoapException
     */
    public function userUpdateCustomerAccount(\Heavymind\Oxatis\ApiClient\Type\UserUpdateCustomerAccount $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateCustomerAccountResponse
    {
        return $this->call('UserUpdateCustomerAccount', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateEmail $parameters
     * @return ResultInterface|Type\UserUpdateEmailResponse
     * @throws SoapException
     */
    public function userUpdateEmail(\Heavymind\Oxatis\ApiClient\Type\UserUpdateEmail $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateEmailResponse
    {
        return $this->call('UserUpdateEmail', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateFiscalCode $parameters
     * @return ResultInterface|Type\UserUpdateFiscalCodeResponse
     * @throws SoapException
     */
    public function userUpdateFiscalCode(\Heavymind\Oxatis\ApiClient\Type\UserUpdateFiscalCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateFiscalCodeResponse
    {
        return $this->call('UserUpdateFiscalCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateBirthDate $parameters
     * @return ResultInterface|Type\UserUpdateBirthDateResponse
     * @throws SoapException
     */
    public function userUpdateBirthDate(\Heavymind\Oxatis\ApiClient\Type\UserUpdateBirthDate $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateBirthDateResponse
    {
        return $this->call('UserUpdateBirthDate', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateFisrtName $parameters
     * @return ResultInterface|Type\UserUpdateFisrtNameResponse
     * @throws SoapException
     */
    public function userUpdateFisrtName(\Heavymind\Oxatis\ApiClient\Type\UserUpdateFisrtName $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateFisrtNameResponse
    {
        return $this->call('UserUpdateFisrtName', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateLanguage $parameters
     * @return ResultInterface|Type\UserUpdateLanguageResponse
     * @throws SoapException
     */
    public function userUpdateLanguage(\Heavymind\Oxatis\ApiClient\Type\UserUpdateLanguage $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateLanguageResponse
    {
        return $this->call('UserUpdateLanguage', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateLastName $parameters
     * @return ResultInterface|Type\UserUpdateLastNameResponse
     * @throws SoapException
     */
    public function userUpdateLastName(\Heavymind\Oxatis\ApiClient\Type\UserUpdateLastName $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateLastNameResponse
    {
        return $this->call('UserUpdateLastName', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdatePassword $parameters
     * @return ResultInterface|Type\UserUpdatePasswordResponse
     * @throws SoapException
     */
    public function userUpdatePassword(\Heavymind\Oxatis\ApiClient\Type\UserUpdatePassword $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdatePasswordResponse
    {
        return $this->call('UserUpdatePassword', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdatePriceIndex $parameters
     * @return ResultInterface|Type\UserUpdatePriceIndexResponse
     * @throws SoapException
     */
    public function userUpdatePriceIndex(\Heavymind\Oxatis\ApiClient\Type\UserUpdatePriceIndex $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdatePriceIndexResponse
    {
        return $this->call('UserUpdatePriceIndex', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateDiscount $parameters
     * @return ResultInterface|Type\UserUpdateDiscountResponse
     * @throws SoapException
     */
    public function userUpdateDiscount(\Heavymind\Oxatis\ApiClient\Type\UserUpdateDiscount $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateDiscountResponse
    {
        return $this->call('UserUpdateDiscount', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateDiscountGridCode $parameters
     * @return ResultInterface|Type\UserUpdateDiscountGridCodeResponse
     * @throws SoapException
     */
    public function userUpdateDiscountGridCode(\Heavymind\Oxatis\ApiClient\Type\UserUpdateDiscountGridCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateDiscountGridCodeResponse
    {
        return $this->call('UserUpdateDiscountGridCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateSubscribeToNewletters $parameters
     * @return ResultInterface|Type\UserUpdateSubscribeToNewlettersResponse
     * @throws SoapException
     */
    public function userUpdateSubscribeToNewletters(\Heavymind\Oxatis\ApiClient\Type\UserUpdateSubscribeToNewletters $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateSubscribeToNewlettersResponse
    {
        return $this->call('UserUpdateSubscribeToNewletters', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateSalesCodeRep $parameters
     * @return ResultInterface|Type\UserUpdateSalesCodeRepResponse
     * @throws SoapException
     */
    public function userUpdateSalesCodeRep(\Heavymind\Oxatis\ApiClient\Type\UserUpdateSalesCodeRep $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateSalesCodeRepResponse
    {
        return $this->call('UserUpdateSalesCodeRep', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateShippingAddress $parameters
     * @return ResultInterface|Type\UserUpdateShippingAddressResponse
     * @throws SoapException
     */
    public function userUpdateShippingAddress(\Heavymind\Oxatis\ApiClient\Type\UserUpdateShippingAddress $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateShippingAddressResponse
    {
        return $this->call('UserUpdateShippingAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateShippingAddressLines $parameters
     * @return ResultInterface|Type\UserUpdateShippingAddressLinesResponse
     * @throws SoapException
     */
    public function userUpdateShippingAddressLines(\Heavymind\Oxatis\ApiClient\Type\UserUpdateShippingAddressLines $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateShippingAddressLinesResponse
    {
        return $this->call('UserUpdateShippingAddressLines', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserUpdateAdditionalShippingAddress $parameters
     * @return ResultInterface|Type\UserUpdateAdditionalShippingAddressResponse
     * @throws SoapException
     */
    public function userUpdateAdditionalShippingAddress(\Heavymind\Oxatis\ApiClient\Type\UserUpdateAdditionalShippingAddress $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserUpdateAdditionalShippingAddressResponse
    {
        return $this->call('UserUpdateAdditionalShippingAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGet $parameters
     * @return ResultInterface|Type\UserGetResponse
     * @throws SoapException
     */
    public function userGet(\Heavymind\Oxatis\ApiClient\Type\UserGet $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetResponse
    {
        return $this->call('UserGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetBillingAddress $parameters
     * @return ResultInterface|Type\UserGetBillingAddressResponse
     * @throws SoapException
     */
    public function userGetBillingAddress(\Heavymind\Oxatis\ApiClient\Type\UserGetBillingAddress $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetBillingAddressResponse
    {
        return $this->call('UserGetBillingAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetBillingAddressLines $parameters
     * @return ResultInterface|Type\UserGetBillingAddressLinesResponse
     * @throws SoapException
     */
    public function userGetBillingAddressLines(\Heavymind\Oxatis\ApiClient\Type\UserGetBillingAddressLines $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetBillingAddressLinesResponse
    {
        return $this->call('UserGetBillingAddressLines', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetCategories $parameters
     * @return ResultInterface|Type\UserGetCategoriesResponse
     * @throws SoapException
     */
    public function userGetCategories(\Heavymind\Oxatis\ApiClient\Type\UserGetCategories $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetCategoriesResponse
    {
        return $this->call('UserGetCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetCompanyName $parameters
     * @return ResultInterface|Type\UserGetCompanyNameResponse
     * @throws SoapException
     */
    public function userGetCompanyName(\Heavymind\Oxatis\ApiClient\Type\UserGetCompanyName $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetCompanyNameResponse
    {
        return $this->call('UserGetCompanyName', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetCompanyVATNumber $parameters
     * @return ResultInterface|Type\UserGetCompanyVATNumberResponse
     * @throws SoapException
     */
    public function userGetCompanyVATNumber(\Heavymind\Oxatis\ApiClient\Type\UserGetCompanyVATNumber $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetCompanyVATNumberResponse
    {
        return $this->call('UserGetCompanyVATNumber', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetCustomerAccount $parameters
     * @return ResultInterface|Type\UserGetCustomerAccountResponse
     * @throws SoapException
     */
    public function userGetCustomerAccount(\Heavymind\Oxatis\ApiClient\Type\UserGetCustomerAccount $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetCustomerAccountResponse
    {
        return $this->call('UserGetCustomerAccount', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetEmail $parameters
     * @return ResultInterface|Type\UserGetEmailResponse
     * @throws SoapException
     */
    public function userGetEmail(\Heavymind\Oxatis\ApiClient\Type\UserGetEmail $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetEmailResponse
    {
        return $this->call('UserGetEmail', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetBirthDate $parameters
     * @return ResultInterface|Type\UserGetBirthDateResponse
     * @throws SoapException
     */
    public function userGetBirthDate(\Heavymind\Oxatis\ApiClient\Type\UserGetBirthDate $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetBirthDateResponse
    {
        return $this->call('UserGetBirthDate', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetFiscalCode $parameters
     * @return ResultInterface|Type\UserGetFiscalCodeResponse
     * @throws SoapException
     */
    public function userGetFiscalCode(\Heavymind\Oxatis\ApiClient\Type\UserGetFiscalCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetFiscalCodeResponse
    {
        return $this->call('UserGetFiscalCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetFisrtName $parameters
     * @return ResultInterface|Type\UserGetFisrtNameResponse
     * @throws SoapException
     */
    public function userGetFisrtName(\Heavymind\Oxatis\ApiClient\Type\UserGetFisrtName $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetFisrtNameResponse
    {
        return $this->call('UserGetFisrtName', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetLanguage $parameters
     * @return ResultInterface|Type\UserGetLanguageResponse
     * @throws SoapException
     */
    public function userGetLanguage(\Heavymind\Oxatis\ApiClient\Type\UserGetLanguage $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetLanguageResponse
    {
        return $this->call('UserGetLanguage', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetLastName $parameters
     * @return ResultInterface|Type\UserGetLastNameResponse
     * @throws SoapException
     */
    public function userGetLastName(\Heavymind\Oxatis\ApiClient\Type\UserGetLastName $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetLastNameResponse
    {
        return $this->call('UserGetLastName', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetPassword $parameters
     * @return ResultInterface|Type\UserGetPasswordResponse
     * @throws SoapException
     */
    public function userGetPassword(\Heavymind\Oxatis\ApiClient\Type\UserGetPassword $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetPasswordResponse
    {
        return $this->call('UserGetPassword', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetPriceIndex $parameters
     * @return ResultInterface|Type\UserGetPriceIndexResponse
     * @throws SoapException
     */
    public function userGetPriceIndex(\Heavymind\Oxatis\ApiClient\Type\UserGetPriceIndex $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetPriceIndexResponse
    {
        return $this->call('UserGetPriceIndex', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetDiscount $parameters
     * @return ResultInterface|Type\UserGetDiscountResponse
     * @throws SoapException
     */
    public function userGetDiscount(\Heavymind\Oxatis\ApiClient\Type\UserGetDiscount $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetDiscountResponse
    {
        return $this->call('UserGetDiscount', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetDiscountGridCode $parameters
     * @return ResultInterface|Type\UserGetDiscountGridCodeResponse
     * @throws SoapException
     */
    public function userGetDiscountGridCode(\Heavymind\Oxatis\ApiClient\Type\UserGetDiscountGridCode $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetDiscountGridCodeResponse
    {
        return $this->call('UserGetDiscountGridCode', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetSubscribeToNewletters $parameters
     * @return ResultInterface|Type\UserGetSubscribeToNewlettersResponse
     * @throws SoapException
     */
    public function userGetSubscribeToNewletters(\Heavymind\Oxatis\ApiClient\Type\UserGetSubscribeToNewletters $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetSubscribeToNewlettersResponse
    {
        return $this->call('UserGetSubscribeToNewletters', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetSalesCodeRep $parameters
     * @return ResultInterface|Type\UserGetSalesCodeRepResponse
     * @throws SoapException
     */
    public function userGetSalesCodeRep(\Heavymind\Oxatis\ApiClient\Type\UserGetSalesCodeRep $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetSalesCodeRepResponse
    {
        return $this->call('UserGetSalesCodeRep', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetShippingAddress $parameters
     * @return ResultInterface|Type\UserGetShippingAddressResponse
     * @throws SoapException
     */
    public function userGetShippingAddress(\Heavymind\Oxatis\ApiClient\Type\UserGetShippingAddress $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetShippingAddressResponse
    {
        return $this->call('UserGetShippingAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetShippingAddressLines $parameters
     * @return ResultInterface|Type\UserGetShippingAddressLinesResponse
     * @throws SoapException
     */
    public function userGetShippingAddressLines(\Heavymind\Oxatis\ApiClient\Type\UserGetShippingAddressLines $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetShippingAddressLinesResponse
    {
        return $this->call('UserGetShippingAddressLines', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserGetList $parameters
     * @return ResultInterface|Type\UserGetListResponse
     * @throws SoapException
     */
    public function userGetList(\Heavymind\Oxatis\ApiClient\Type\UserGetList $parameters) : \Heavymind\Oxatis\ApiClient\Type\UserGetListResponse
    {
        return $this->call('UserGetList', $parameters);
    }


}

