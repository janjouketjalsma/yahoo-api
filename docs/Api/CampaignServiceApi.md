# Yahoo\CampaignServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignServiceAddPost**](CampaignServiceApi.md#campaignServiceAddPost) | **POST** /CampaignService/add | 
[**campaignServiceGetPost**](CampaignServiceApi.md#campaignServiceGetPost) | **POST** /CampaignService/get | 
[**campaignServiceRemovePost**](CampaignServiceApi.md#campaignServiceRemovePost) | **POST** /CampaignService/remove | 
[**campaignServiceSetPost**](CampaignServiceApi.md#campaignServiceSetPost) | **POST** /CampaignService/set | 



## campaignServiceAddPost

> \Yahoo\Model\CampaignServiceMutateResponse campaignServiceAddPost($campaignServiceOperation)



<div lang=\"ja\">キャンペーンを追加します。</div><div lang=\"en\">Add campaign information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignServiceOperation = new \Yahoo\Model\CampaignServiceOperation(); // \Yahoo\Model\CampaignServiceOperation | 

try {
    $result = $apiInstance->campaignServiceAddPost($campaignServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignServiceOperation** | [**\Yahoo\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignServiceGetPost

> \Yahoo\Model\CampaignServiceGetResponse campaignServiceGetPost($campaignServiceSelector)



<div lang=\"ja\">キャンペーンに関する情報を取得します。</div><div lang=\"en\">Gets information related to campaigns.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignServiceSelector = new \Yahoo\Model\CampaignServiceSelector(); // \Yahoo\Model\CampaignServiceSelector | 

try {
    $result = $apiInstance->campaignServiceGetPost($campaignServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignServiceSelector** | [**\Yahoo\Model\CampaignServiceSelector**](../Model/CampaignServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignServiceGetResponse**](../Model/CampaignServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignServiceRemovePost

> \Yahoo\Model\CampaignServiceMutateResponse campaignServiceRemovePost($campaignServiceOperation)



<div lang=\"ja\">キャンペーンを削除します。</div><div lang=\"en\">Removes the inforamtion related to campaigns.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignServiceOperation = new \Yahoo\Model\CampaignServiceOperation(); // \Yahoo\Model\CampaignServiceOperation | 

try {
    $result = $apiInstance->campaignServiceRemovePost($campaignServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignServiceOperation** | [**\Yahoo\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignServiceSetPost

> \Yahoo\Model\CampaignServiceMutateResponse campaignServiceSetPost($campaignServiceOperation)



<div lang=\"ja\">キャンペーンを更新します。</div><div lang=\"en\">Updates the information related to campaigns.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignServiceOperation = new \Yahoo\Model\CampaignServiceOperation(); // \Yahoo\Model\CampaignServiceOperation | 

try {
    $result = $apiInstance->campaignServiceSetPost($campaignServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignServiceOperation** | [**\Yahoo\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

