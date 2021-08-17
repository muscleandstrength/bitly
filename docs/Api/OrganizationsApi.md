# OpenAPI\Client\OrganizationsApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrganization()**](OrganizationsApi.md#getOrganization) | **GET** /organizations/{organization_guid} | Retrieve an Organization
[**getOrganizationShortenCounts()**](OrganizationsApi.md#getOrganizationShortenCounts) | **GET** /organizations/{organization_guid}/shorten_counts | Get Shorten Counts for an Organization
[**getOrganizations()**](OrganizationsApi.md#getOrganizations) | **GET** /organizations | Retrieve Organizations
[**getPlanLimits()**](OrganizationsApi.md#getPlanLimits) | **GET** /organizations/{organization_guid}/plan_limits | Get Plan Limits


## `getOrganization()`

```php
getOrganization($organization_guid): \OpenAPI\Client\Model\Organization
```

Retrieve an Organization

Retrive details for the specified organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_guid = Oa1bcd234eF; // string | A GUID for a Bitly organization

try {
    $result = $apiInstance->getOrganization($organization_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_guid** | **string**| A GUID for a Bitly organization |

### Return type

[**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationShortenCounts()`

```php
getOrganizationShortenCounts($organization_guid, $unit, $units, $unit_reference): \OpenAPI\Client\Model\Metrics
```

Get Shorten Counts for an Organization

Returns the shorten counts for a specific organization over a specified time period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_guid = Oa1bcd234eF; // string | A GUID for a Bitly organization
$unit = month; // string | A unit of time
$units = 5; // int | An integer representing the time units to query data for. pass -1 to return all units of time.
$unit_reference = 2006-01-02T15:04:05-0700; // string | An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time.

try {
    $result = $apiInstance->getOrganizationShortenCounts($organization_guid, $unit, $units, $unit_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationShortenCounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_guid** | **string**| A GUID for a Bitly organization |
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

## `getOrganizations()`

```php
getOrganizations(): \OpenAPI\Client\Model\Organizations
```

Retrieve Organizations

Retrieve a list of organizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Organizations**](../Model/Organizations.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlanLimits()`

```php
getPlanLimits($organization_guid): \OpenAPI\Client\Model\PlanLimits
```

Get Plan Limits

Returns all plan limits and counts available for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_guid = Oa1bcd234eF; // string | A GUID for a Bitly organization

try {
    $result = $apiInstance->getPlanLimits($organization_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getPlanLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_guid** | **string**| A GUID for a Bitly organization |

### Return type

[**\OpenAPI\Client\Model\PlanLimits**](../Model/PlanLimits.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
