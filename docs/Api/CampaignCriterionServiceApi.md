# Yahoo\CampaignCriterionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignCriterionServiceAddPost**](CampaignCriterionServiceApi.md#campaignCriterionServiceAddPost) | **POST** /CampaignCriterionService/add | 
[**campaignCriterionServiceGetPost**](CampaignCriterionServiceApi.md#campaignCriterionServiceGetPost) | **POST** /CampaignCriterionService/get | 
[**campaignCriterionServiceRemovePost**](CampaignCriterionServiceApi.md#campaignCriterionServiceRemovePost) | **POST** /CampaignCriterionService/remove | 



## campaignCriterionServiceAddPost

> \Yahoo\Model\CampaignCriterionServiceMutateResponse campaignCriterionServiceAddPost($campaignCriterionServiceOperation)



<div lang=\"ja\">キャンペーンの除外クライテリアを追加します。</div><div lang=\"en\">Add negative criteria in campaign-level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignCriterionServiceOperation = new \Yahoo\Model\CampaignCriterionServiceOperation(); // \Yahoo\Model\CampaignCriterionServiceOperation | 

try {
    $result = $apiInstance->campaignCriterionServiceAddPost($campaignCriterionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCriterionServiceApi->campaignCriterionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignCriterionServiceOperation** | [**\Yahoo\Model\CampaignCriterionServiceOperation**](../Model/CampaignCriterionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignCriterionServiceMutateResponse**](../Model/CampaignCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignCriterionServiceGetPost

> \Yahoo\Model\CampaignCriterionServiceGetResponse campaignCriterionServiceGetPost($campaignCriterionServiceSelector)



<div lang=\"ja\">キャンペーンの除外クライテリアに関する情報を取得します。</div><div lang=\"en\">Gets negative criteria in campaign-level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignCriterionServiceSelector = new \Yahoo\Model\CampaignCriterionServiceSelector(); // \Yahoo\Model\CampaignCriterionServiceSelector | 

try {
    $result = $apiInstance->campaignCriterionServiceGetPost($campaignCriterionServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCriterionServiceApi->campaignCriterionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignCriterionServiceSelector** | [**\Yahoo\Model\CampaignCriterionServiceSelector**](../Model/CampaignCriterionServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignCriterionServiceGetResponse**](../Model/CampaignCriterionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignCriterionServiceRemovePost

> \Yahoo\Model\CampaignCriterionServiceMutateResponse campaignCriterionServiceRemovePost($campaignCriterionServiceOperation)



<div lang=\"ja\">キャンペーンの除外クライテリアを削除します。</div><div lang=\"en\">Removed negative criteria in campaign-level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignCriterionServiceOperation = new \Yahoo\Model\CampaignCriterionServiceOperation(); // \Yahoo\Model\CampaignCriterionServiceOperation | 

try {
    $result = $apiInstance->campaignCriterionServiceRemovePost($campaignCriterionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCriterionServiceApi->campaignCriterionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignCriterionServiceOperation** | [**\Yahoo\Model\CampaignCriterionServiceOperation**](../Model/CampaignCriterionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignCriterionServiceMutateResponse**](../Model/CampaignCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

