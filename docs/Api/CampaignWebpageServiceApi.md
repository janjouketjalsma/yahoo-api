# Yahoo\CampaignWebpageServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignWebpageServiceAddPost**](CampaignWebpageServiceApi.md#campaignWebpageServiceAddPost) | **POST** /CampaignWebpageService/add | 
[**campaignWebpageServiceGetPost**](CampaignWebpageServiceApi.md#campaignWebpageServiceGetPost) | **POST** /CampaignWebpageService/get | 
[**campaignWebpageServiceRemovePost**](CampaignWebpageServiceApi.md#campaignWebpageServiceRemovePost) | **POST** /CampaignWebpageService/remove | 



## campaignWebpageServiceAddPost

> \Yahoo\Model\CampaignWebpageServiceMutateResponse campaignWebpageServiceAddPost($campaignWebpageServiceOperation)



<div lang=\"ja\">キャンペーンにPageFeedItemを配信除外として設定します。</div><div lang=\"en\">Set excluded settings of PageFeedItem for campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignWebpageServiceOperation = new \Yahoo\Model\CampaignWebpageServiceOperation(); // \Yahoo\Model\CampaignWebpageServiceOperation | 

try {
    $result = $apiInstance->campaignWebpageServiceAddPost($campaignWebpageServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWebpageServiceApi->campaignWebpageServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignWebpageServiceOperation** | [**\Yahoo\Model\CampaignWebpageServiceOperation**](../Model/CampaignWebpageServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignWebpageServiceMutateResponse**](../Model/CampaignWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignWebpageServiceGetPost

> \Yahoo\Model\CampaignWebpageServiceGetResponse campaignWebpageServiceGetPost($campaignWebpageServiceSelector)



<div lang=\"ja\">キャンペーンに設定されているPageFeedItemを照会します。</div><div lang=\"en\">Get PageFeedItem setting in campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignWebpageServiceSelector = new \Yahoo\Model\CampaignWebpageServiceSelector(); // \Yahoo\Model\CampaignWebpageServiceSelector | 

try {
    $result = $apiInstance->campaignWebpageServiceGetPost($campaignWebpageServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWebpageServiceApi->campaignWebpageServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignWebpageServiceSelector** | [**\Yahoo\Model\CampaignWebpageServiceSelector**](../Model/CampaignWebpageServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignWebpageServiceGetResponse**](../Model/CampaignWebpageServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignWebpageServiceRemovePost

> \Yahoo\Model\CampaignWebpageServiceMutateResponse campaignWebpageServiceRemovePost($campaignWebpageServiceOperation)



<div lang=\"ja\">キャンペーンに関連付けしているPageFeedItemを解除します。</div><div lang=\"en\">Remove PageFeedItem associated with campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignWebpageServiceOperation = new \Yahoo\Model\CampaignWebpageServiceOperation(); // \Yahoo\Model\CampaignWebpageServiceOperation | 

try {
    $result = $apiInstance->campaignWebpageServiceRemovePost($campaignWebpageServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWebpageServiceApi->campaignWebpageServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignWebpageServiceOperation** | [**\Yahoo\Model\CampaignWebpageServiceOperation**](../Model/CampaignWebpageServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignWebpageServiceMutateResponse**](../Model/CampaignWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

