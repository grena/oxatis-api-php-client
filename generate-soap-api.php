<?php

// List from https://webservices.oxatis.com/webservices/SOAP.aspx

$services = [
    "IdentityServices",
    "AdminPropertiesServices",
    "ProductServices",
    "UserServices",
    "OrderServices",
    "QuotationServices",
    "DiscountRuleServices",
    "ImageGalleryServices",
    "SalesRepServices",
    "ShippingTypeServices",
    "PaymentTypeServices",
    "ProgressStateServices",
    "TaxRateServices",
    "OptionTypesServices",
    "OptionValuesServices",
    "ProgressStateLogServices",
    "ProductWebBlockServices",
    "ProductCharacteristicsServices",
    "ProductBundleServices",
    "ProductPackagingServices",
    "ProductAttributesServices",
    "CategoryServices",
];

function generateConfigFiles($services)
{
    var_dump("Generate config files");

    foreach ($services as $service)
    {
        $configFileName = sprintf("config/soap-client-%s.php", camelToSnake($service));

        $configFileContent = file_get_contents('config-soap-client-template.php.template');
        $configFileContent = str_replace('__SERVICE__', $service, $configFileContent);

        $myfile = fopen($configFileName, "w");
        fwrite($myfile, $configFileContent);
    }
}

function generateSoapClient($services)
{
    var_dump("Generate SOAP Client");

    foreach ($services as $service)
    {
        $configFileName = sprintf("config/soap-client-%s.php", camelToSnake($service));

        var_dump($service . "...");

        $command = sprintf("bin/soap-client generate:type --config %s", $configFileName);
        exec($command);

        $command = sprintf("bin/soap-client generate:classmap --config %s", $configFileName);
        exec($command);

        $command = sprintf("bin/soap-client generate:client --config %s", $configFileName);
        exec($command);

        $command = sprintf("bin/soap-client generate:clientfactory --config %s", $configFileName);
        exec($command);

        exec(sprintf("rm src/Services/%s/*.php.backup", $service));
    }

    exec("rm src/Type/*.php.backup");
}

function camelToSnake($camel)
{
    $snake = preg_replace('/[A-Z]/', '-$0', $camel);
    $snake = strtolower($snake);
    $snake = ltrim($snake, '-');
    return $snake;
}

generateConfigFiles($services);
generateSoapClient($services);
