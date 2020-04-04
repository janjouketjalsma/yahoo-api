# Yahoo\CampaignSharedSetServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignSharedSetServiceAddPost**](CampaignSharedSetServiceApi.md#campaignSharedSetServiceAddPost) | **POST** /CampaignSharedSetService/add | 
[**campaignSharedSetServiceGetPost**](CampaignSharedSetServiceApi.md#campaignSharedSetServiceGetPost) | **POST** /CampaignSharedSetService/get | 
[**campaignSharedSetServiceRemovePost**](CampaignSharedSetServiceApi.md#campaignSharedSetServiceRemovePost) | **POST** /CampaignSharedSetService/remove | 



## campaignSharedSetServiceAddPost

> \Yahoo\Model\CampaignSharedSetServiceMutateResponse campaignSharedSetServiceAddPost($campaignSharedSetServiceOperation)



<div lang=\"ja\">キャンペーンに対象外キーワードリストの関連付け設定を行います。</div><div lang=\"en\">Setup negative keyword list for campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignSharedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignSharedSetServiceOperation = new \Yahoo\Model\CampaignSharedSetServiceOperation(); // \Yahoo\Model\CampaignSharedSetServiceOperation | 

try {
    $result = $apiInstance->campaignSharedSetServiceAddPost($campaignSharedSetServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSharedSetServiceApi->campaignSharedSetServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignSharedSetServiceOperation** | [**\Yahoo\Model\CampaignSharedSetServiceOperation**](../Model/CampaignSharedSetServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignSharedSetServiceMutateResponse**](../Model/CampaignSharedSetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignSharedSetServiceGetPost

> \Yahoo\Model\CampaignSharedSetServiceGetResponse campaignSharedSetServiceGetPost($campaignSharedSetServiceSelector)



<div lang=\"ja\">キャンペーンと対象外キーワードリストの関連付け情報を取得します。</div><div lang=\"en\">Returns the setup information between campaign and negative keyword list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignSharedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignSharedSetServiceSelector = new \Yahoo\Model\CampaignSharedSetServiceSelector(); // \Yahoo\Model\CampaignSharedSetServiceSelector | 

try {
    $result = $apiInstance->campaignSharedSetServiceGetPost($campaignSharedSetServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSharedSetServiceApi->campaignSharedSetServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignSharedSetServiceSelector** | [**\Yahoo\Model\CampaignSharedSetServiceSelector**](../Model/CampaignSharedSetServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignSharedSetServiceGetResponse**](../Model/CampaignSharedSetServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignSharedSetServiceRemovePost

> \Yahoo\Model\CampaignSharedSetServiceMutateResponse campaignSharedSetServiceRemovePost($campaignSharedSetServiceOperation)



<div lang=\"ja\">キャンペーンと対象外キーワードリストの関連付け設定を削除します。</div><div lang=\"en\">Remove the setup settings between campaign and negative keyword list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignSharedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignSharedSetServiceOperation = new \Yahoo\Model\CampaignSharedSetServiceOperation(); // \Yahoo\Model\CampaignSharedSetServiceOperation | 

try {
    $result = $apiInstance->campaignSharedSetServiceRemovePost($campaignSharedSetServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSharedSetServiceApi->campaignSharedSetServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignSharedSetServiceOperation** | [**\Yahoo\Model\CampaignSharedSetServiceOperation**](../Model/CampaignSharedSetServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignSharedSetServiceMutateResponse**](../Model/CampaignSharedSetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

