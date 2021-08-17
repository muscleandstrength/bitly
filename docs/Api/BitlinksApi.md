# OpenAPI\Client\BitlinksApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBitlink()**](BitlinksApi.md#createBitlink) | **POST** /shorten | Shorten a Link
[**createFullBitlink()**](BitlinksApi.md#createFullBitlink) | **POST** /bitlinks | Create a Bitlink
[**expandBitlink()**](BitlinksApi.md#expandBitlink) | **POST** /expand | Expand a Bitlink
[**getBitlink()**](BitlinksApi.md#getBitlink) | **GET** /bitlinks/{bitlink} | Retrieve a Bitlink
[**getBitlinkQRCode()**](BitlinksApi.md#getBitlinkQRCode) | **GET** /bitlinks/{bitlink}/qr | Get a QR Code
[**getBitlinksByGroup()**](BitlinksApi.md#getBitlinksByGroup) | **GET** /groups/{group_guid}/bitlinks | Retrieve Bitlinks by Group
[**getClicksForBitlink()**](BitlinksApi.md#getClicksForBitlink) | **GET** /bitlinks/{bitlink}/clicks | Get Clicks for a Bitlink
[**getClicksSummaryForBitlink()**](BitlinksApi.md#getClicksSummaryForBitlink) | **GET** /bitlinks/{bitlink}/clicks/summary | Get a Clicks Summary for a Bitlink
[**getMetricsForBitlinkByCities()**](BitlinksApi.md#getMetricsForBitlinkByCities) | **GET** /bitlinks/{bitlink}/cities | Get Metrics for a Bitlink by City
[**getMetricsForBitlinkByCountries()**](BitlinksApi.md#getMetricsForBitlinkByCountries) | **GET** /bitlinks/{bitlink}/countries | Get Metrics for a Bitlink by Country
[**getMetricsForBitlinkByDevices()**](BitlinksApi.md#getMetricsForBitlinkByDevices) | **GET** /bitlinks/{bitlink}/devices | Get Metrics for a Bitlink by Device Type
[**getMetricsForBitlinkByReferrers()**](BitlinksApi.md#getMetricsForBitlinkByReferrers) | **GET** /bitlinks/{bitlink}/referrers | Get Metrics for a Bitlink by Referrers
[**getMetricsForBitlinkByReferrersByDomains()**](BitlinksApi.md#getMetricsForBitlinkByReferrersByDomains) | **GET** /bitlinks/{bitlink}/referrers_by_domains | Get Metrics for a Bitlink by Referrers by Domain
[**getMetricsForBitlinkByReferringDomains()**](BitlinksApi.md#getMetricsForBitlinkByReferringDomains) | **GET** /bitlinks/{bitlink}/referring_domains | Get Metrics for a Bitlink by Referring Domains
[**getSortedBitlinks()**](BitlinksApi.md#getSortedBitlinks) | **GET** /groups/{group_guid}/bitlinks/{sort} | Retrieve Sorted Bitlinks for Group
[**updateBitlink()**](BitlinksApi.md#updateBitlink) | **PATCH** /bitlinks/{bitlink} | Update a Bitlink
[**updateBitlinksByGroup()**](BitlinksApi.md#updateBitlinksByGroup) | **PATCH** /groups/{group_guid}/bitlinks | Bulk update bitlinks


## `createBitlink()`

```php
createBitlink($shorten): \OpenAPI\Client\Model\ShortenBitlinkBody
```

Shorten a Link

Converts a long url to a Bitlink.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shorten = new \OpenAPI\Client\Model\Shorten(); // \OpenAPI\Client\Model\Shorten

try {
    $result = $apiInstance->createBitlink($shorten);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->createBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shorten** | [**\OpenAPI\Client\Model\Shorten**](../Model/Shorten.md)|  |

### Return type

[**\OpenAPI\Client\Model\ShortenBitlinkBody**](../Model/ShortenBitlinkBody.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFullBitlink()`

```php
createFullBitlink($full_shorten): \OpenAPI\Client\Model\BitlinkBody
```

Create a Bitlink

Converts a long url to a Bitlink and sets additional parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_shorten = new \OpenAPI\Client\Model\FullShorten(); // \OpenAPI\Client\Model\FullShorten

try {
    $result = $apiInstance->createFullBitlink($full_shorten);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->createFullBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full_shorten** | [**\OpenAPI\Client\Model\FullShorten**](../Model/FullShorten.md)|  |

### Return type

[**\OpenAPI\Client\Model\BitlinkBody**](../Model/BitlinkBody.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expandBitlink()`

```php
expandBitlink($expand_bitlink): \OpenAPI\Client\Model\ExpandedBitlink
```

Expand a Bitlink

Returns the short link and long URL for the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand_bitlink = new \OpenAPI\Client\Model\ExpandBitlink(); // \OpenAPI\Client\Model\ExpandBitlink

try {
    $result = $apiInstance->expandBitlink($expand_bitlink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->expandBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand_bitlink** | [**\OpenAPI\Client\Model\ExpandBitlink**](../Model/ExpandBitlink.md)|  |

### Return type

[**\OpenAPI\Client\Model\ExpandedBitlink**](../Model/ExpandedBitlink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBitlink()`

```php
getBitlink($bitlink): \OpenAPI\Client\Model\BitlinkBody
```

Retrieve a Bitlink

Returns information for the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash

try {
    $result = $apiInstance->getBitlink($bitlink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |

### Return type

[**\OpenAPI\Client\Model\BitlinkBody**](../Model/BitlinkBody.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBitlinkQRCode()`

```php
getBitlinkQRCode($bitlink, $color, $exclude_bitly_logo, $image_format): \OpenAPI\Client\Model\BitlinkQR
```

Get a QR Code

Generates a QR code for a Bitlink.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$color = 1133ff; // string | A color denoted in hexidecimal RGB format
$exclude_bitly_logo = false; // bool | Removes the Bitly logo from the center of the generated QR image
$image_format = svg; // string | Determines the image format of the returned QR code

try {
    $result = $apiInstance->getBitlinkQRCode($bitlink, $color, $exclude_bitly_logo, $image_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getBitlinkQRCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **color** | **string**| A color denoted in hexidecimal RGB format | [optional]
 **exclude_bitly_logo** | **bool**| Removes the Bitly logo from the center of the generated QR image | [optional]
 **image_format** | **string**| Determines the image format of the returned QR code | [optional] [default to &#39;png&#39;]

### Return type

[**\OpenAPI\Client\Model\BitlinkQR**](../Model/BitlinkQR.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBitlinksByGroup()`

```php
getBitlinksByGroup($group_guid, $size, $page, $keyword, $query, $created_before, $created_after, $modified_after, $archived, $deeplinks, $domain_deeplinks, $campaign_guid, $channel_guid, $custom_bitlink, $tags, $launchpad_ids, $encoding_login): \OpenAPI\Client\Model\Bitlinks
```

Retrieve Bitlinks by Group

Returns a paginated collection of Bitlinks for a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$size = 10; // int | The quantity of items to be be returned
$page = 1; // int | Integer specifying the numbered result at which to start
$keyword = chauncey; // string | Custom keyword to filter on history entries
$query = api; // string | the value that you would like to search
$created_before = 1501027200; // int | Timestamp as an integer unix epoch
$created_after = 1501027200; // int | Timestamp as an integer unix epoch
$modified_after = 1501027200; // int | Timestamp as an integer unix epoch
$archived = both; // string | Whether or not to include archived bitlinks
$deeplinks = both; // string | Filter to only Bitlinks that contain deeplinks
$domain_deeplinks = both; // string | Filter to only Bitlinks that contain deeplinks configured with a custom domain
$campaign_guid = Ca1bcd2EFGh; // string | Filter to return only links for the given campaign GUID, can be provided
$channel_guid = Ha1bc2DefGh; // string | Filter to return only links for the given channel GUID, can be provided, overrides all other parameters
$custom_bitlink = both; // string
$tags = ["bitly","api"]; // string[] | filter by given tags
$launchpad_ids = ["M1234567890"]; // string[] | filter by launchpad id
$encoding_login = ["chauncey"]; // string[] | Filter by the login of the authenticated user that created the Bitlink

try {
    $result = $apiInstance->getBitlinksByGroup($group_guid, $size, $page, $keyword, $query, $created_before, $created_after, $modified_after, $archived, $deeplinks, $domain_deeplinks, $campaign_guid, $channel_guid, $custom_bitlink, $tags, $launchpad_ids, $encoding_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getBitlinksByGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]
 **page** | **int**| Integer specifying the numbered result at which to start | [optional] [default to 1]
 **keyword** | **string**| Custom keyword to filter on history entries | [optional]
 **query** | **string**| the value that you would like to search | [optional]
 **created_before** | **int**| Timestamp as an integer unix epoch | [optional]
 **created_after** | **int**| Timestamp as an integer unix epoch | [optional]
 **modified_after** | **int**| Timestamp as an integer unix epoch | [optional]
 **archived** | **string**| Whether or not to include archived bitlinks | [optional] [default to &#39;off&#39;]
 **deeplinks** | **string**| Filter to only Bitlinks that contain deeplinks | [optional] [default to &#39;both&#39;]
 **domain_deeplinks** | **string**| Filter to only Bitlinks that contain deeplinks configured with a custom domain | [optional] [default to &#39;both&#39;]
 **campaign_guid** | **string**| Filter to return only links for the given campaign GUID, can be provided | [optional]
 **channel_guid** | **string**| Filter to return only links for the given channel GUID, can be provided, overrides all other parameters | [optional]
 **custom_bitlink** | **string**|  | [optional] [default to &#39;both&#39;]
 **tags** | [**string[]**](../Model/string.md)| filter by given tags | [optional]
 **launchpad_ids** | [**string[]**](../Model/string.md)| filter by launchpad id | [optional]
 **encoding_login** | [**string[]**](../Model/string.md)| Filter by the login of the authenticated user that created the Bitlink | [optional]

### Return type

[**\OpenAPI\Client\Model\Bitlinks**](../Model/Bitlinks.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClicksForBitlink()`

```php
getClicksForBitlink($bitlink, $unit, $units, $unit_reference): \OpenAPI\Client\Model\Clicks
```

Get Clicks for a Bitlink

Returns the click counts for the specified link in an array based on a date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getClicksForBitlink($bitlink, $unit, $units, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getClicksForBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
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

## `getClicksSummaryForBitlink()`

```php
getClicksSummaryForBitlink($bitlink, $unit, $units, $unit_reference): \OpenAPI\Client\Model\ClicksSummary
```

Get a Clicks Summary for a Bitlink

Returns the click counts for the specified link rolled up into a single field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getClicksSummaryForBitlink($bitlink, $unit, $units, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getClicksSummaryForBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\ClicksSummary**](../Model/ClicksSummary.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsForBitlinkByCities()`

```php
getMetricsForBitlinkByCities($bitlink, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\CityMetrics
```

Get Metrics for a Bitlink by City

Returns the city origins of click traffic for the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getMetricsForBitlinkByCities($bitlink, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getMetricsForBitlinkByCities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\CityMetrics**](../Model/CityMetrics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsForBitlinkByCountries()`

```php
getMetricsForBitlinkByCountries($bitlink, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\ClickMetrics
```

Get Metrics for a Bitlink by Country

Returns the country origins of click traffic for the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getMetricsForBitlinkByCountries($bitlink, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getMetricsForBitlinkByCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\ClickMetrics**](../Model/ClickMetrics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsForBitlinkByDevices()`

```php
getMetricsForBitlinkByDevices($bitlink, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\DeviceMetrics
```

Get Metrics for a Bitlink by Device Type

Returns the device types generating click traffic to the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getMetricsForBitlinkByDevices($bitlink, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getMetricsForBitlinkByDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\DeviceMetrics**](../Model/DeviceMetrics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsForBitlinkByReferrers()`

```php
getMetricsForBitlinkByReferrers($bitlink, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\ClickMetrics
```

Get Metrics for a Bitlink by Referrers

Returns referrer click counts for the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getMetricsForBitlinkByReferrers($bitlink, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getMetricsForBitlinkByReferrers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\ClickMetrics**](../Model/ClickMetrics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsForBitlinkByReferrersByDomains()`

```php
getMetricsForBitlinkByReferrersByDomains($bitlink, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\ReferrersByDomains
```

Get Metrics for a Bitlink by Referrers by Domain

Returns click metrics grouped by referrers for the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getMetricsForBitlinkByReferrersByDomains($bitlink, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getMetricsForBitlinkByReferrersByDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\ReferrersByDomains**](../Model/ReferrersByDomains.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsForBitlinkByReferringDomains()`

```php
getMetricsForBitlinkByReferringDomains($bitlink, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\ClickMetrics
```

Get Metrics for a Bitlink by Referring Domains

Returns the referring domain click counts for the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getMetricsForBitlinkByReferringDomains($bitlink, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getMetricsForBitlinkByReferringDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]
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

## `getSortedBitlinks()`

```php
getSortedBitlinks($group_guid, $sort, $unit, $units, $unit_reference, $size): \OpenAPI\Client\Model\SortedLinks
```

Retrieve Sorted Bitlinks for Group

Returns a list of Bitlinks sorted by group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$sort = clicks; // string | The type of sorting that you would like to do
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.
$size = 10; // int | The quantity of items to be be returned

try {
    $result = $apiInstance->getSortedBitlinks($group_guid, $sort, $unit, $units, $unit_reference, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->getSortedBitlinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
 **sort** | **string**| The type of sorting that you would like to do |
 **unit** | **string**| A unit of time | [optional] [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [optional] [default to -1]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]
 **size** | **int**| The quantity of items to be be returned | [optional] [default to 50]

### Return type

[**\OpenAPI\Client\Model\SortedLinks**](../Model/SortedLinks.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBitlink()`

```php
updateBitlink($bitlink, $bitlink_body): \OpenAPI\Client\Model\BitlinkBody
```

Update a Bitlink

Updates fields in the specified link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitlink = bit.ly/12a4b6c; // string | A Bitlink made of the domain and hash
$bitlink_body = new \OpenAPI\Client\Model\BitlinkBody(); // \OpenAPI\Client\Model\BitlinkBody

try {
    $result = $apiInstance->updateBitlink($bitlink, $bitlink_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->updateBitlink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitlink** | **string**| A Bitlink made of the domain and hash |
 **bitlink_body** | [**\OpenAPI\Client\Model\BitlinkBody**](../Model/BitlinkBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\BitlinkBody**](../Model/BitlinkBody.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBitlinksByGroup()`

```php
updateBitlinksByGroup($group_guid, $bulk_update_request): \OpenAPI\Client\Model\BulkUpdate
```

Bulk update bitlinks

Bulk update can add or remove tags or archive up to 100 links at a time; The response includes a a list of bitlink ids that were updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BitlinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$bulk_update_request = new \OpenAPI\Client\Model\BulkUpdateRequest(); // \OpenAPI\Client\Model\BulkUpdateRequest

try {
    $result = $apiInstance->updateBitlinksByGroup($group_guid, $bulk_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitlinksApi->updateBitlinksByGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
 **bulk_update_request** | [**\OpenAPI\Client\Model\BulkUpdateRequest**](../Model/BulkUpdateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BulkUpdate**](../Model/BulkUpdate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
