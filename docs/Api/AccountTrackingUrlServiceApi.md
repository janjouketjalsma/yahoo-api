# Yahoo\AccountTrackingUrlServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTrackingUrlServiceGetPost**](AccountTrackingUrlServiceApi.md#accountTrackingUrlServiceGetPost) | **POST** /AccountTrackingUrlService/get | 
[**accountTrackingUrlServiceSetPost**](AccountTrackingUrlServiceApi.md#accountTrackingUrlServiceSetPost) | **POST** /AccountTrackingUrlService/set | 



## accountTrackingUrlServiceGetPost

> \Yahoo\Model\AccountTrackingUrlServiceGetResponse accountTrackingUrlServiceGetPost($accountTrackingUrlServiceSelector)



<div lang=\"ja\">アカウントトラッキングに関する情報を取得します。</div><div lang=\"en\">Retrieves information related to account tracking.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountTrackingUrlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountTrackingUrlServiceSelector = new \Yahoo\Model\AccountTrackingUrlServiceSelector(); // \Yahoo\Model\AccountTrackingUrlServiceSelector | 

try {
    $result = $apiInstance->accountTrackingUrlServiceGetPost($accountTrackingUrlServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTrackingUrlServiceApi->accountTrackingUrlServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountTrackingUrlServiceSelector** | [**\Yahoo\Model\AccountTrackingUrlServiceSelector**](../Model/AccountTrackingUrlServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountTrackingUrlServiceGetResponse**](../Model/AccountTrackingUrlServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountTrackingUrlServiceSetPost

> \Yahoo\Model\AccountTrackingUrlServiceMutateResponse accountTrackingUrlServiceSetPost($accountTrackingUrlServiceOperation)



<div lang=\"ja\">アカウントトラッキングを更新します。</div><div lang=\"en\">Updates account tracking information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountTrackingUrlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountTrackingUrlServiceOperation = new \Yahoo\Model\AccountTrackingUrlServiceOperation(); // \Yahoo\Model\AccountTrackingUrlServiceOperation | 

try {
    $result = $apiInstance->accountTrackingUrlServiceSetPost($accountTrackingUrlServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTrackingUrlServiceApi->accountTrackingUrlServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountTrackingUrlServiceOperation** | [**\Yahoo\Model\AccountTrackingUrlServiceOperation**](../Model/AccountTrackingUrlServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountTrackingUrlServiceMutateResponse**](../Model/AccountTrackingUrlServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

