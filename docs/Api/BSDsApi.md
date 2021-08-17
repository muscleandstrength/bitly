# Bitly\BSDsApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBSDs()**](BSDsApi.md#getBSDs) | **GET** /bsds | Get BSDs


## `getBSDs()`

```php
getBSDs(): \Bitly\Model\BSDsResponse
```

Get BSDs

Fetch all Branded Short Domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\BSDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBSDs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BSDsApi->getBSDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bitly\Model\BSDsResponse**](../Model/BSDsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
