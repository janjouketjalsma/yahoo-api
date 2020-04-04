# Yahoo\DictionaryServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dictionaryServiceGetDisapprovalReasonPost**](DictionaryServiceApi.md#dictionaryServiceGetDisapprovalReasonPost) | **POST** /DictionaryService/getDisapprovalReason | 
[**dictionaryServiceGetGeographicLocationPost**](DictionaryServiceApi.md#dictionaryServiceGetGeographicLocationPost) | **POST** /DictionaryService/getGeographicLocation | 



## dictionaryServiceGetDisapprovalReasonPost

> \Yahoo\Model\DictionaryServiceGetDisapprovalReasonResponse dictionaryServiceGetDisapprovalReasonPost($dictionaryServiceDisapprovalReasonSelector)



<div lang=\"ja\">EditorialReasonと推奨する対応方法の一覧を取得します。</div> <div lang=\"en\">Get EditorialReason and recommended resolution list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionaryServiceDisapprovalReasonSelector = new \Yahoo\Model\DictionaryServiceDisapprovalReasonSelector(); // \Yahoo\Model\DictionaryServiceDisapprovalReasonSelector | 

try {
    $result = $apiInstance->dictionaryServiceGetDisapprovalReasonPost($dictionaryServiceDisapprovalReasonSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetDisapprovalReasonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionaryServiceDisapprovalReasonSelector** | [**\Yahoo\Model\DictionaryServiceDisapprovalReasonSelector**](../Model/DictionaryServiceDisapprovalReasonSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\DictionaryServiceGetDisapprovalReasonResponse**](../Model/DictionaryServiceGetDisapprovalReasonResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dictionaryServiceGetGeographicLocationPost

> \Yahoo\Model\DictionaryServiceGetGeographicLocationResponse dictionaryServiceGetGeographicLocationPost($dictionaryServiceGeographicLocationSelector)



<div lang=\"ja\">地域情報の一覧を取得します。</div><div lang=\"en\">Get the information list of geo targeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionaryServiceGeographicLocationSelector = new \Yahoo\Model\DictionaryServiceGeographicLocationSelector(); // \Yahoo\Model\DictionaryServiceGeographicLocationSelector | 

try {
    $result = $apiInstance->dictionaryServiceGetGeographicLocationPost($dictionaryServiceGeographicLocationSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetGeographicLocationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionaryServiceGeographicLocationSelector** | [**\Yahoo\Model\DictionaryServiceGeographicLocationSelector**](../Model/DictionaryServiceGeographicLocationSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\DictionaryServiceGetGeographicLocationResponse**](../Model/DictionaryServiceGetGeographicLocationResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

