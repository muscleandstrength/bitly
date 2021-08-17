# OpenAPI\Client\WebhooksApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook()**](WebhooksApi.md#createWebhook) | **POST** /webhooks | Create Webhook
[**deleteWebhook()**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{webhook_guid} | Delete Webhook
[**getWebhook()**](WebhooksApi.md#getWebhook) | **GET** /webhooks/{webhook_guid} | Retrieve Webhook
[**getWebhooks()**](WebhooksApi.md#getWebhooks) | **GET** /organizations/{organization_guid}/webhooks | Get Webhooks
[**updateWebhook()**](WebhooksApi.md#updateWebhook) | **PATCH** /webhooks/{webhook_guid} | Update Webhook
[**verifyWebhook()**](WebhooksApi.md#verifyWebhook) | **POST** /webhooks/{webhook_guid}/verify | Verify Webhook


## `createWebhook()`

```php
createWebhook($webhook_create): \OpenAPI\Client\Model\Webhook
```

Create Webhook

Creates a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_create = new \OpenAPI\Client\Model\WebhookCreate(); // \OpenAPI\Client\Model\WebhookCreate

try {
    $result = $apiInstance->createWebhook($webhook_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_create** | [**\OpenAPI\Client\Model\WebhookCreate**](../Model/WebhookCreate.md)|  |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($webhook_guid)
```

Delete Webhook

Deletes a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_guid = Wa1bcDefG23; // string | A GUID for a Bitly webhook

try {
    $apiInstance->deleteWebhook($webhook_guid);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_guid** | **string**| A GUID for a Bitly webhook |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($webhook_guid): \OpenAPI\Client\Model\Webhook
```

Retrieve Webhook

Returns a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_guid = Wa1bcDefG23; // string | A GUID for a Bitly webhook

try {
    $result = $apiInstance->getWebhook($webhook_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_guid** | **string**| A GUID for a Bitly webhook |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks($organization_guid): \OpenAPI\Client\Model\Webhooks
```

Get Webhooks

Fetch all webhooks available for an Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_guid = Oa1bcd234eF; // string | A GUID for a Bitly organization

try {
    $result = $apiInstance->getWebhooks($organization_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_guid** | **string**| A GUID for a Bitly organization |

### Return type

[**\OpenAPI\Client\Model\Webhooks**](../Model/Webhooks.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($webhook_guid, $webhook_update): \OpenAPI\Client\Model\Webhook
```

Update Webhook

Update a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_guid = Wa1bcDefG23; // string | A GUID for a Bitly webhook
$webhook_update = new \OpenAPI\Client\Model\WebhookUpdate(); // \OpenAPI\Client\Model\WebhookUpdate

try {
    $result = $apiInstance->updateWebhook($webhook_guid, $webhook_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_guid** | **string**| A GUID for a Bitly webhook |
 **webhook_update** | [**\OpenAPI\Client\Model\WebhookUpdate**](../Model/WebhookUpdate.md)|  |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyWebhook()`

```php
verifyWebhook($webhook_guid): \OpenAPI\Client\Model\Webhook
```

Verify Webhook

Sends ping event to test webhook configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_guid = Wa1bcDefG23; // string | A GUID for a Bitly webhook

try {
    $result = $apiInstance->verifyWebhook($webhook_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->verifyWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_guid** | **string**| A GUID for a Bitly webhook |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
