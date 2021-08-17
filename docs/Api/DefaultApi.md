# Bitly\DefaultApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOauthApp()**](DefaultApi.md#createOauthApp) | **POST** /oauth/apps | Create an Oauth app
[**getOAuthApp()**](DefaultApi.md#getOAuthApp) | **GET** /apps/{client_id} | Retrieve OAuth App


## `createOauthApp()`

```php
createOauthApp($create_oauth_app_req): \Bitly\Model\OAuthApp
```

Create an Oauth app

Creates an Oauth App for the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_oauth_app_req = new \Bitly\Model\CreateOauthAppReq(); // \Bitly\Model\CreateOauthAppReq

try {
    $result = $apiInstance->createOauthApp($create_oauth_app_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOauthApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_oauth_app_req** | [**\Bitly\Model\CreateOauthAppReq**](../Model/CreateOauthAppReq.md)|  |

### Return type

[**\Bitly\Model\OAuthApp**](../Model/OAuthApp.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOAuthApp()`

```php
getOAuthApp($client_id): \Bitly\Model\OAuthApp
```

Retrieve OAuth App

Retrieve the details for the provided OAuth App client ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 1234a56b789cd0e123456fg7h8901j123km45n6p; // string | The client ID of an OAuth app

try {
    $result = $apiInstance->getOAuthApp($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOAuthApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The client ID of an OAuth app |

### Return type

[**\Bitly\Model\OAuthApp**](../Model/OAuthApp.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
