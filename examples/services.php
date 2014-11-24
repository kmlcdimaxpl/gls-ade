<?php
/** @var \Webit\GlsAde\Api\Factory\ApiFactory $apiFactory */
$apiFactory = require 'bootstrap.php';

$username = 'my-test-username';
$password = 'my-test-password';

$authApi = $apiFactory->createAuthApi();
$servicesApi = $apiFactory->createServiceApi($authApi, $username, $password);
$maxCodAmount = $servicesApi->getMaxCodAmount();
printf("Max COD amount is \"%s\"\n", $maxCodAmount);

$maxWeights = $servicesApi->getMaxParcelsWeight();
printf(
    "Max parcel weight is \"%s\" (national) and \"%s\" (international)\n",
    $maxWeights->getNational(),
    $maxWeights->getInternational()
);

$services = $servicesApi->getAllowedServices();
printf("Allowed services ADE: %s\n", $services->getServicesAde());
print("Allowed services:\n");
foreach ($services->getServicesBool() as $key => $value) {
    printf("%s: %s\n", $key, $value);
}

$zipCode = '30855';
$services = $servicesApi->getGuaranteedServices($zipCode);
printf("Guaranteed services ADE for zip code \"%s\": %s\n", $zipCode, $services->getServicesAde());