# Bitly\CampaignsApi

All URIs are relative to https://api-ssl.bitly.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCampaign()**](CampaignsApi.md#createCampaign) | **POST** /campaigns | Create Campaign
[**createChannel()**](CampaignsApi.md#createChannel) | **POST** /channels | Create Channel
[**getCampaign()**](CampaignsApi.md#getCampaign) | **GET** /campaigns/{campaign_guid} | Retrieve a Campaign
[**getCampaigns()**](CampaignsApi.md#getCampaigns) | **GET** /campaigns | Retrieve Campaigns
[**getChannel()**](CampaignsApi.md#getChannel) | **GET** /channels/{channel_guid} | Get a Channel
[**getChannels()**](CampaignsApi.md#getChannels) | **GET** /channels | Retrieve Channels
[**updateCampaign()**](CampaignsApi.md#updateCampaign) | **PATCH** /campaigns/{campaign_guid} | Update Campaign
[**updateChannel()**](CampaignsApi.md#updateChannel) | **PATCH** /channels/{channel_guid} | Update a Channel


## `createCampaign()`

```php
createCampaign($campaign_modify): \Bitly\Model\Campaign
```

Create Campaign

Creates a new campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_modify = new \Bitly\Model\CampaignModify(); // \Bitly\Model\CampaignModify

try {
    $result = $apiInstance->createCampaign($campaign_modify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_modify** | [**\Bitly\Model\CampaignModify**](../Model/CampaignModify.md)|  |

### Return type

[**\Bitly\Model\Campaign**](../Model/Campaign.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChannel()`

```php
createChannel($channel_modify): \Bitly\Model\Channel
```

Create Channel

Creates a new channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_modify = new \Bitly\Model\ChannelModify(); // \Bitly\Model\ChannelModify

try {
    $result = $apiInstance->createChannel($channel_modify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_modify** | [**\Bitly\Model\ChannelModify**](../Model/ChannelModify.md)|  |

### Return type

[**\Bitly\Model\Channel**](../Model/Channel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaign_guid): \Bitly\Model\Campaign
```

Retrieve a Campaign

Returns details for a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_guid = Ca1bcd2EFGh; // string | A GUID for a Bitly campaign

try {
    $result = $apiInstance->getCampaign($campaign_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_guid** | **string**| A GUID for a Bitly campaign |

### Return type

[**\Bitly\Model\Campaign**](../Model/Campaign.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($group_guid): \Bitly\Model\Campaigns
```

Retrieve Campaigns

Returns the campaigns for the current authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group

try {
    $result = $apiInstance->getCampaigns($group_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group | [optional]

### Return type

[**\Bitly\Model\Campaigns**](../Model/Campaigns.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannel()`

```php
getChannel($channel_guid): \Bitly\Model\Channel
```

Get a Channel

Returns a channel's details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_guid = Ha1bc2DefGh; // string | A GUID for a Bitly Channel

try {
    $result = $apiInstance->getChannel($channel_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_guid** | **string**| A GUID for a Bitly Channel |

### Return type

[**\Bitly\Model\Channel**](../Model/Channel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannels()`

```php
getChannels($group_guid, $campaign_guid): \Bitly\Model\Channels
```

Retrieve Channels

Returns the channels available to a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_guid = Ba1bc23dE4F; // string | A GUID for a Bitly group
$campaign_guid = Ca1bcd2EFGh; // string | A GUID for a Bitly campaign

try {
    $result = $apiInstance->getChannels($group_guid, $campaign_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_guid** | **string**| A GUID for a Bitly group | [optional]
 **campaign_guid** | **string**| A GUID for a Bitly campaign | [optional]

### Return type

[**\Bitly\Model\Channels**](../Model/Channels.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaign()`

```php
updateCampaign($campaign_guid, $campaign_modify): \Bitly\Model\Campaign
```

Update Campaign

Updates a campaign's details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_guid = Ca1bcd2EFGh; // string | A GUID for a Bitly campaign
$campaign_modify = new \Bitly\Model\CampaignModify(); // \Bitly\Model\CampaignModify

try {
    $result = $apiInstance->updateCampaign($campaign_guid, $campaign_modify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_guid** | **string**| A GUID for a Bitly campaign |
 **campaign_modify** | [**\Bitly\Model\CampaignModify**](../Model/CampaignModify.md)|  |

### Return type

[**\Bitly\Model\Campaign**](../Model/Campaign.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannel()`

```php
updateChannel($channel_guid, $channel_modify): \Bitly\Model\Channel
```

Update a Channel

Updates an existing channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Bitly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitly\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_guid = Ha1bc2DefGh; // string | A GUID for a Bitly Channel
$channel_modify = new \Bitly\Model\ChannelModify(); // \Bitly\Model\ChannelModify

try {
    $result = $apiInstance->updateChannel($channel_guid, $channel_modify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_guid** | **string**| A GUID for a Bitly Channel |
 **channel_modify** | [**\Bitly\Model\ChannelModify**](../Model/ChannelModify.md)|  |

### Return type

[**\Bitly\Model\Channel**](../Model/Channel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
