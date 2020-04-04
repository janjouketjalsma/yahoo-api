# Yahoo\ConversionTrackerServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversionTrackerServiceAddPost**](ConversionTrackerServiceApi.md#conversionTrackerServiceAddPost) | **POST** /ConversionTrackerService/add | 
[**conversionTrackerServiceGetPost**](ConversionTrackerServiceApi.md#conversionTrackerServiceGetPost) | **POST** /ConversionTrackerService/get | 
[**conversionTrackerServiceSetPost**](ConversionTrackerServiceApi.md#conversionTrackerServiceSetPost) | **POST** /ConversionTrackerService/set | 



## conversionTrackerServiceAddPost

> \Yahoo\Model\ConversionTrackerServiceMutateResponse conversionTrackerServiceAddPost($conversionTrackerServiceOperation)



<div lang=\"ja\">コンバージョントラッカー情報を追加します。</div><div lang=\"en\">Add ConversionTracker informations.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversionTrackerServiceOperation = new \Yahoo\Model\ConversionTrackerServiceOperation(); // \Yahoo\Model\ConversionTrackerServiceOperation | 

try {
    $result = $apiInstance->conversionTrackerServiceAddPost($conversionTrackerServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversionTrackerServiceOperation** | [**\Yahoo\Model\ConversionTrackerServiceOperation**](../Model/ConversionTrackerServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\ConversionTrackerServiceMutateResponse**](../Model/ConversionTrackerServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionTrackerServiceGetPost

> \Yahoo\Model\ConversionTrackerServiceGetResponse conversionTrackerServiceGetPost($conversionTrackerServiceSelector)



<div lang=\"ja\">コンバージョントラッカー情報を取得します。</div><div lang=\"en\">Describes the operation which provide at ConversionTrackerService</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversionTrackerServiceSelector = new \Yahoo\Model\ConversionTrackerServiceSelector(); // \Yahoo\Model\ConversionTrackerServiceSelector | 

try {
    $result = $apiInstance->conversionTrackerServiceGetPost($conversionTrackerServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversionTrackerServiceSelector** | [**\Yahoo\Model\ConversionTrackerServiceSelector**](../Model/ConversionTrackerServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\ConversionTrackerServiceGetResponse**](../Model/ConversionTrackerServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionTrackerServiceSetPost

> \Yahoo\Model\ConversionTrackerServiceMutateResponse conversionTrackerServiceSetPost($conversionTrackerServiceOperation)



<div lang=\"ja\">コンバージョントラッカー情報を更新します。</div><div lang=\"en\">Update ConversionTracker informations.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversionTrackerServiceOperation = new \Yahoo\Model\ConversionTrackerServiceOperation(); // \Yahoo\Model\ConversionTrackerServiceOperation | 

try {
    $result = $apiInstance->conversionTrackerServiceSetPost($conversionTrackerServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversionTrackerServiceOperation** | [**\Yahoo\Model\ConversionTrackerServiceOperation**](../Model/ConversionTrackerServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\ConversionTrackerServiceMutateResponse**](../Model/ConversionTrackerServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

