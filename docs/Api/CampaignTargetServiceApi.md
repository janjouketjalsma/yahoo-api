# Yahoo\CampaignTargetServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignTargetServiceAddPost**](CampaignTargetServiceApi.md#campaignTargetServiceAddPost) | **POST** /CampaignTargetService/add | 
[**campaignTargetServiceGetPost**](CampaignTargetServiceApi.md#campaignTargetServiceGetPost) | **POST** /CampaignTargetService/get | 
[**campaignTargetServiceRemovePost**](CampaignTargetServiceApi.md#campaignTargetServiceRemovePost) | **POST** /CampaignTargetService/remove | 
[**campaignTargetServiceSetPost**](CampaignTargetServiceApi.md#campaignTargetServiceSetPost) | **POST** /CampaignTargetService/set | 



## campaignTargetServiceAddPost

> \Yahoo\Model\CampaignTargetServiceMutateResponse campaignTargetServiceAddPost($campaignTargetServiceOperation)



<div lang=\"ja\">キャンペーンのターゲティング設定に関する情報を追加します。</div><div lang=\"en\">Adds campaign informations related to targeting setting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTargetServiceOperation = new \Yahoo\Model\CampaignTargetServiceOperation(); // \Yahoo\Model\CampaignTargetServiceOperation | 

try {
    $result = $apiInstance->campaignTargetServiceAddPost($campaignTargetServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignTargetServiceOperation** | [**\Yahoo\Model\CampaignTargetServiceOperation**](../Model/CampaignTargetServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignTargetServiceMutateResponse**](../Model/CampaignTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignTargetServiceGetPost

> \Yahoo\Model\CampaignTargetServiceGetResponse campaignTargetServiceGetPost($campaignTargetServiceSelector)



<div lang=\"ja\">キャンペーンのターゲティング設定に関する情報を取得します。</div><div lang=\"en\">Gets campaign informations related to targeting setting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTargetServiceSelector = new \Yahoo\Model\CampaignTargetServiceSelector(); // \Yahoo\Model\CampaignTargetServiceSelector | 

try {
    $result = $apiInstance->campaignTargetServiceGetPost($campaignTargetServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignTargetServiceSelector** | [**\Yahoo\Model\CampaignTargetServiceSelector**](../Model/CampaignTargetServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignTargetServiceGetResponse**](../Model/CampaignTargetServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignTargetServiceRemovePost

> \Yahoo\Model\CampaignTargetServiceMutateResponse campaignTargetServiceRemovePost($campaignTargetServiceOperation)



<div lang=\"ja\">キャンペーンのターゲティング設定に関する情報を削除します。</div><div lang=\"en\">Delete campaign informations related to targeting setting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTargetServiceOperation = new \Yahoo\Model\CampaignTargetServiceOperation(); // \Yahoo\Model\CampaignTargetServiceOperation | 

try {
    $result = $apiInstance->campaignTargetServiceRemovePost($campaignTargetServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignTargetServiceOperation** | [**\Yahoo\Model\CampaignTargetServiceOperation**](../Model/CampaignTargetServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignTargetServiceMutateResponse**](../Model/CampaignTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignTargetServiceSetPost

> \Yahoo\Model\CampaignTargetServiceMutateResponse campaignTargetServiceSetPost($campaignTargetServiceOperation)



<div lang=\"ja\">キャンペーンのターゲティング設定に関する情報を変更します。※入札調整率（bidmultiplier）のみ変更可能です。</div><div lang=\"en\">Update campaign informations related to targeting setting.<br>* Bid Adjustment (bidmultiplier) is only modifiable.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTargetServiceOperation = new \Yahoo\Model\CampaignTargetServiceOperation(); // \Yahoo\Model\CampaignTargetServiceOperation | 

try {
    $result = $apiInstance->campaignTargetServiceSetPost($campaignTargetServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignTargetServiceOperation** | [**\Yahoo\Model\CampaignTargetServiceOperation**](../Model/CampaignTargetServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignTargetServiceMutateResponse**](../Model/CampaignTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

