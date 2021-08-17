# OpenAPI\Client\CustomBitlinksApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomBitlink()**](CustomBitlinksApi.md#addCustomBitlink) | **POST** /custom_bitlinks | Add Custom Bitlink
[**getClicksForCustomBitlink()**](CustomBitlinksApi.md#getClicksForCustomBitlink) | **GET** /custom_bitlinks/{custom_bitlink}/clicks | Get Clicks for a Custom Bitlink&#39;s Entire History
[**getCustomBitlink()**](CustomBitlinksApi.md#getCustomBitlink) | **GET** /custom_bitlinks/{custom_bitlink} | Retrieve Custom Bitlink
[**getCustomBitlinkMetricsByDestination()**](CustomBitlinksApi.md#getCustomBitlinkMetricsByDestination) | **GET** /custom_bitlinks/{custom_bitlink}/clicks_by_destination | Get Metrics for a Custom Bitlink by Destination
[**updateCustomBitlink()**](CustomBitlinksApi.md#updateCustomBitlink) | **PATCH** /custom_bitlinks/{custom_bitlink} | Update Custom Bitlink


## `addCustomBitlink()`

```php
addCustomBitlink($add_custom_bitlink): \OpenAPI\Client\Model\CustomBitlink
```

Add Custom Bitlink

Add a keyword (or \"custom back-half\") to a Bitlink with a Custom Domain. This endpoint can also be used for initial redirects to a link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomBitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_custom_bitlink = new \OpenAPI\Client\Model\AddCustomBitlink(); // \OpenAPI\Client\Model\AddCustomBitlink

try {
    $result = $apiInstance->addCustomBitlink($add_custom_bitlink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomBitlinksApi->addCustomBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_custom_bitlink** | [**\OpenAPI\Client\Model\AddCustomBitlink**](../Model/AddCustomBitlink.md)|  |

### Return type

[**\OpenAPI\Client\Model\CustomBitlink**](../Model/CustomBitlink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClicksForCustomBitlink()`

```php
getClicksForCustomBitlink($custom_bitlink, $unit, $units, $unit_reference): \OpenAPI\Client\Model\Clicks
```

Get Clicks for a Custom Bitlink's Entire History

Returns the click counts for the specified link. This returns an array with clicks based on a date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomBitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_bitlink = chauncey.ly/chauncey; // string | A Custom Bitlink made of the domain and keyword
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getClicksForCustomBitlink($custom_bitlink, $unit, $units, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomBitlinksApi->getClicksForCustomBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_bitlink** | **string**| A Custom Bitlink made of the domain and keyword |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\Clicks**](../Model/Clicks.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomBitlink()`

```php
getCustomBitlink($custom_bitlink): \OpenAPI\Client\Model\CustomBitlink
```

Retrieve Custom Bitlink

Returns the details and history of the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomBitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_bitlink = chauncey.ly/chauncey; // string | A Custom Bitlink made of the domain and keyword

try {
    $result = $apiInstance->getCustomBitlink($custom_bitlink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomBitlinksApi->getCustomBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_bitlink** | **string**| A Custom Bitlink made of the domain and keyword |

### Return type

[**\OpenAPI\Client\Model\CustomBitlink**](../Model/CustomBitlink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomBitlinkMetricsByDestination()`

```php
getCustomBitlinkMetricsByDestination($custom_bitlink, $unit, $units, $unit_reference): \OpenAPI\Client\Model\ClickMetrics
```

Get Metrics for a Custom Bitlink by Destination

Returns click metrics for the specified link by its historical destinations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomBitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_bitlink = chauncey.ly/chauncey; // string | A Custom Bitlink made of the domain and keyword
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getCustomBitlinkMetricsByDestination($custom_bitlink, $unit, $units, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomBitlinksApi->getCustomBitlinkMetricsByDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_bitlink** | **string**| A Custom Bitlink made of the domain and keyword |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\ClickMetrics**](../Model/ClickMetrics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomBitlink()`

```php
updateCustomBitlink($custom_bitlink, $update_custom_bitlink): \OpenAPI\Client\Model\CustomBitlink
```

Update Custom Bitlink

Move a keyword (or custom back-half) to a different Bitlink.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomBitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_bitlink = chauncey.ly/chauncey; // string | A Custom Bitlink made of the domain and keyword
$update_custom_bitlink = new \OpenAPI\Client\Model\UpdateCustomBitlink(); // \OpenAPI\Client\Model\UpdateCustomBitlink

try {
    $result = $apiInstance->updateCustomBitlink($custom_bitlink, $update_custom_bitlink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomBitlinksApi->updateCustomBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_bitlink** | **string**| A Custom Bitlink made of the domain and keyword |
 **update_custom_bitlink** | [**\OpenAPI\Client\Model\UpdateCustomBitlink**](../Model/UpdateCustomBitlink.md)|  |

### Return type

[**\OpenAPI\Client\Model\CustomBitlink**](../Model/CustomBitlink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
