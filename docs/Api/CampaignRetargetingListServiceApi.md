# Yahoo\CampaignRetargetingListServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignRetargetingListServiceAddPost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceAddPost) | **POST** /CampaignRetargetingListService/add | 
[**campaignRetargetingListServiceGetPost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceGetPost) | **POST** /CampaignRetargetingListService/get | 
[**campaignRetargetingListServiceRemovePost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceRemovePost) | **POST** /CampaignRetargetingListService/remove | 
[**campaignRetargetingListServiceSetPost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceSetPost) | **POST** /CampaignRetargetingListService/set | 



## campaignRetargetingListServiceAddPost

> \Yahoo\Model\CampaignRetargetingListServiceMutateResponse campaignRetargetingListServiceAddPost($campaignRetargetingListServiceOperation)



<div lang=\"ja\">キャンペーン階層におけるターゲットリストの設定情報を追加します。</div><div lang=\"en\">Adds the target list setting in campaign level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignRetargetingListServiceOperation = new \Yahoo\Model\CampaignRetargetingListServiceOperation(); // \Yahoo\Model\CampaignRetargetingListServiceOperation | 

try {
    $result = $apiInstance->campaignRetargetingListServiceAddPost($campaignRetargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignRetargetingListServiceOperation** | [**\Yahoo\Model\CampaignRetargetingListServiceOperation**](../Model/CampaignRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignRetargetingListServiceMutateResponse**](../Model/CampaignRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignRetargetingListServiceGetPost

> \Yahoo\Model\CampaignRetargetingListServiceGetResponse campaignRetargetingListServiceGetPost($campaignRetargetingListServiceSelector)



<div lang=\"ja\">キャンペーン階層におけるターゲットリストの設定情報を取得します。</div><div lang=\"en\">Retreive the target list setting in campaign level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignRetargetingListServiceSelector = new \Yahoo\Model\CampaignRetargetingListServiceSelector(); // \Yahoo\Model\CampaignRetargetingListServiceSelector | 

try {
    $result = $apiInstance->campaignRetargetingListServiceGetPost($campaignRetargetingListServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignRetargetingListServiceSelector** | [**\Yahoo\Model\CampaignRetargetingListServiceSelector**](../Model/CampaignRetargetingListServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignRetargetingListServiceGetResponse**](../Model/CampaignRetargetingListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignRetargetingListServiceRemovePost

> \Yahoo\Model\CampaignRetargetingListServiceMutateResponse campaignRetargetingListServiceRemovePost($campaignRetargetingListServiceOperation)



<div lang=\"ja\">キャンペーン階層におけるターゲットリストの設定情報を削除します。</div><div lang=\"en\">Delete the target list setting in campaign level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignRetargetingListServiceOperation = new \Yahoo\Model\CampaignRetargetingListServiceOperation(); // \Yahoo\Model\CampaignRetargetingListServiceOperation | 

try {
    $result = $apiInstance->campaignRetargetingListServiceRemovePost($campaignRetargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignRetargetingListServiceOperation** | [**\Yahoo\Model\CampaignRetargetingListServiceOperation**](../Model/CampaignRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignRetargetingListServiceMutateResponse**](../Model/CampaignRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignRetargetingListServiceSetPost

> \Yahoo\Model\CampaignRetargetingListServiceMutateResponse campaignRetargetingListServiceSetPost($campaignRetargetingListServiceOperation)



<div lang=\"ja\">キャンペーン階層におけるターゲットリストの設定情報を更新します。</div><div lang=\"en\">Updates the target list setting in campaign level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignRetargetingListServiceOperation = new \Yahoo\Model\CampaignRetargetingListServiceOperation(); // \Yahoo\Model\CampaignRetargetingListServiceOperation | 

try {
    $result = $apiInstance->campaignRetargetingListServiceSetPost($campaignRetargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignRetargetingListServiceOperation** | [**\Yahoo\Model\CampaignRetargetingListServiceOperation**](../Model/CampaignRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignRetargetingListServiceMutateResponse**](../Model/CampaignRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

