# Bitly\UserApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlatformLimits()**](UserApi.md#getPlatformLimits) | **GET** /user/platform_limits | Get Platform Limits
[**getUser()**](UserApi.md#getUser) | **GET** /user | Retrieve a User
[**updateUser()**](UserApi.md#updateUser) | **PATCH** /user | Update a User


## `getPlatformLimits()`

```php
getPlatformLimits($path): \Bitly\Model\PlatformLimits
```

Get Platform Limits

Fetch all platform limits and counts available for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = /organizations/{organization_guid}; // string | The specific path for which information is requested

try {
    $result = $apiInstance->getPlatformLimits($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getPlatformLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The specific path for which information is requested | [optional]

### Return type

[**\Bitly\Model\PlatformLimits**](../Model/PlatformLimits.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser(): \Bitly\Model\User
```

Retrieve a User

Returns information for the current authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bitly\Model\User**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_update): \Bitly\Model\User
```

Update a User

Update fields in the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_update = new \Bitly\Model\UserUpdate(); // \Bitly\Model\UserUpdate

try {
    $result = $apiInstance->updateUser($user_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_update** | [**\Bitly\Model\UserUpdate**](../Model/UserUpdate.md)|  |

### Return type

[**\Bitly\Model\User**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
