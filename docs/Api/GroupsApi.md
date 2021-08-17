# OpenAPI\Client\GroupsApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroup()**](GroupsApi.md#getGroup) | **GET** /groups/{group_guid} | Retrieve a Group
[**getGroupClicks()**](GroupsApi.md#getGroupClicks) | **GET** /groups/{group_guid}/clicks | Get clicks by group
[**getGroupMetricsByCities()**](GroupsApi.md#getGroupMetricsByCities) | **GET** /groups/{group_guid}/cities | Get Click Metrics for a Group by City
[**getGroupMetricsByCountries()**](GroupsApi.md#getGroupMetricsByCountries) | **GET** /groups/{group_guid}/countries | Get Click Metrics for a Group by Country
[**getGroupMetricsByDevices()**](GroupsApi.md#getGroupMetricsByDevices) | **GET** /groups/{group_guid}/devices | Get Click Metrics for a Group by Device Type
[**getGroupMetricsByReferringNetworks()**](GroupsApi.md#getGroupMetricsByReferringNetworks) | **GET** /groups/{group_guid}/referring_networks | Get Click Metrics for a Group by Referring Networks
[**getGroupPreferences()**](GroupsApi.md#getGroupPreferences) | **GET** /groups/{group_guid}/preferences | Retrieve Group Preferences
[**getGroupShortenCounts()**](GroupsApi.md#getGroupShortenCounts) | **GET** /groups/{group_guid}/shorten_counts | Retrieve Group Shorten Counts
[**getGroupTags()**](GroupsApi.md#getGroupTags) | **GET** /groups/{group_guid}/tags | Retrieve Tags by Group
[**getGroups()**](GroupsApi.md#getGroups) | **GET** /groups | Retrieve Groups
[**updateGroup()**](GroupsApi.md#updateGroup) | **PATCH** /groups/{group_guid} | Update a Group
[**updateGroupPreferences()**](GroupsApi.md#updateGroupPreferences) | **PATCH** /groups/{group_guid}/preferences | Update Group Preferences


## `getGroup()`

```php
getGroup($group_guid): \OpenAPI\Client\Model\Group
```

Retrieve a Group

Returns details for a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group

try {
    $result = $apiInstance->getGroup($group_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupClicks()`

```php
getGroupClicks($group_guid, $unit, $units, $unit_reference): \OpenAPI\Client\Model\GroupClicks
```

Get clicks by group

get number of clicks on bitlinks in a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getGroupClicks($group_guid, $unit, $units, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupClicks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\GroupClicks**](../Model/GroupClicks.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupMetricsByCities()`

```php
getGroupMetricsByCities($group_guid, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\CityMetrics
```

Get Click Metrics for a Group by City

Returns the geographic origins of click traffic by city for the specified group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getGroupMetricsByCities($group_guid, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupMetricsByCities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
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

## `getGroupMetricsByCountries()`

```php
getGroupMetricsByCountries($group_guid, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\ClickMetrics
```

Get Click Metrics for a Group by Country

Returns the geographic origins of click traffic by country for the specified group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getGroupMetricsByCountries($group_guid, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupMetricsByCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
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
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupMetricsByDevices()`

```php
getGroupMetricsByDevices($group_guid, $unit, $units, $size, $unit_reference): \OpenAPI\Client\Model\DeviceMetrics
```

Get Click Metrics for a Group by Device Type

Returns the device types generating click traffic to the specified group's links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$size = 10; // int | The quantity of items to be be returned
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getGroupMetricsByDevices($group_guid, $unit, $units, $size, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupMetricsByDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
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

## `getGroupMetricsByReferringNetworks()`

```php
getGroupMetricsByReferringNetworks($group_guid): \OpenAPI\Client\Model\ClickMetrics
```

Get Click Metrics for a Group by Referring Networks

Returns metrics by referring networks for the specified group's links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group

try {
    $result = $apiInstance->getGroupMetricsByReferringNetworks($group_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupMetricsByReferringNetworks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |

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

## `getGroupPreferences()`

```php
getGroupPreferences($group_guid): \OpenAPI\Client\Model\GroupPreferences
```

Retrieve Group Preferences

Returns preferences for the specified group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group

try {
    $result = $apiInstance->getGroupPreferences($group_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |

### Return type

[**\OpenAPI\Client\Model\GroupPreferences**](../Model/GroupPreferences.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupShortenCounts()`

```php
getGroupShortenCounts($group_guid, $unit, $units, $unit_reference): \OpenAPI\Client\Model\Metrics
```

Retrieve Group Shorten Counts

Returns all the shorten counts for a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getGroupShortenCounts($group_guid, $unit, $units, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupShortenCounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
 **unit** | **string**| A unit of time | [default to &#39;day&#39;]
 **units** | **int**| An integer representing the time units to query data for. pass -1 to return all units of time. | [default to -1]
 **unit_reference** | **string**| An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. | [optional]

### Return type

[**\OpenAPI\Client\Model\Metrics**](../Model/Metrics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupTags()`

```php
getGroupTags($group_guid): \OpenAPI\Client\Model\Tags
```

Retrieve Tags by Group

Returns the tags currently used in the specified group. Maximum 1000.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group

try {
    $result = $apiInstance->getGroupTags($group_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |

### Return type

[**\OpenAPI\Client\Model\Tags**](../Model/Tags.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroups()`

```php
getGroups($organization_guid): \OpenAPI\Client\Model\Groups
```

Retrieve Groups

Returns a list of groups in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_guid = Oa1bcd234eF; // string | A GUID for a Bitly organization

try {
    $result = $apiInstance->getGroups($organization_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_guid** | **string**| A GUID for a Bitly organization | [optional]

### Return type

[**\OpenAPI\Client\Model\Groups**](../Model/Groups.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($group_guid, $group_update): \OpenAPI\Client\Model\Group
```

Update a Group

Updates the details of a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$group_update = new \OpenAPI\Client\Model\GroupUpdate(); // \OpenAPI\Client\Model\GroupUpdate

try {
    $result = $apiInstance->updateGroup($group_guid, $group_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
 **group_update** | [**\OpenAPI\Client\Model\GroupUpdate**](../Model/GroupUpdate.md)|  |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroupPreferences()`

```php
updateGroupPreferences($group_guid, $group_preferences): \OpenAPI\Client\Model\GroupPreferences
```

Update Group Preferences

Updates preferences for a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$group_preferences = new \OpenAPI\Client\Model\GroupPreferences(); // \OpenAPI\Client\Model\GroupPreferences

try {
    $result = $apiInstance->updateGroupPreferences($group_guid, $group_preferences);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroupPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group |
 **group_preferences** | [**\OpenAPI\Client\Model\GroupPreferences**](../Model/GroupPreferences.md)|  |

### Return type

[**\OpenAPI\Client\Model\GroupPreferences**](../Model/GroupPreferences.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
