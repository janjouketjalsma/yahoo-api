# Yahoo\CampaignLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignLabelServiceAddPost**](CampaignLabelServiceApi.md#campaignLabelServiceAddPost) | **POST** /CampaignLabelService/add | 
[**campaignLabelServiceRemovePost**](CampaignLabelServiceApi.md#campaignLabelServiceRemovePost) | **POST** /CampaignLabelService/remove | 



## campaignLabelServiceAddPost

> \Yahoo\Model\CampaignLabelServiceMutateResponse campaignLabelServiceAddPost($campaignLabelServiceOperation)



<div lang=\"ja\">ラベルとキャンペーンの紐付けを登録します。</div><div lang=\"en\">Add informations of related campaign and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignLabelServiceOperation = new \Yahoo\Model\CampaignLabelServiceOperation(); // \Yahoo\Model\CampaignLabelServiceOperation | 

try {
    $result = $apiInstance->campaignLabelServiceAddPost($campaignLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignLabelServiceApi->campaignLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignLabelServiceOperation** | [**\Yahoo\Model\CampaignLabelServiceOperation**](../Model/CampaignLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignLabelServiceMutateResponse**](../Model/CampaignLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignLabelServiceRemovePost

> \Yahoo\Model\CampaignLabelServiceMutateResponse campaignLabelServiceRemovePost($campaignLabelServiceOperation)



<div lang=\"ja\">ラベルとキャンペーンの紐付けを削除します。</div><div lang=\"en\">Remove informations of related campaign and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignLabelServiceOperation = new \Yahoo\Model\CampaignLabelServiceOperation(); // \Yahoo\Model\CampaignLabelServiceOperation | 

try {
    $result = $apiInstance->campaignLabelServiceRemovePost($campaignLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignLabelServiceApi->campaignLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignLabelServiceOperation** | [**\Yahoo\Model\CampaignLabelServiceOperation**](../Model/CampaignLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignLabelServiceMutateResponse**](../Model/CampaignLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

