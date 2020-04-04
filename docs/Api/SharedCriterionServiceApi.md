# Yahoo\SharedCriterionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCriterionServiceAddPost**](SharedCriterionServiceApi.md#sharedCriterionServiceAddPost) | **POST** /SharedCriterionService/add | 
[**sharedCriterionServiceGetPost**](SharedCriterionServiceApi.md#sharedCriterionServiceGetPost) | **POST** /SharedCriterionService/get | 
[**sharedCriterionServiceRemovePost**](SharedCriterionServiceApi.md#sharedCriterionServiceRemovePost) | **POST** /SharedCriterionService/remove | 



## sharedCriterionServiceAddPost

> \Yahoo\Model\SharedCriterionServiceMutateResponse sharedCriterionServiceAddPost($sharedCriterionServiceOperation)



<div lang=\"ja\">対象外キーワードリストに対象外キーワードを追加します。</div><div lang=\"en\">Add negative keywords to negative keyword list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\SharedCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharedCriterionServiceOperation = new \Yahoo\Model\SharedCriterionServiceOperation(); // \Yahoo\Model\SharedCriterionServiceOperation | 

try {
    $result = $apiInstance->sharedCriterionServiceAddPost($sharedCriterionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCriterionServiceApi->sharedCriterionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCriterionServiceOperation** | [**\Yahoo\Model\SharedCriterionServiceOperation**](../Model/SharedCriterionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\SharedCriterionServiceMutateResponse**](../Model/SharedCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sharedCriterionServiceGetPost

> \Yahoo\Model\SharedCriterionServiceGetResponse sharedCriterionServiceGetPost($sharedCriterionServiceSelector)



<div lang=\"ja\">対象外キーワードリストの情報を取得します。</div><div lang=\"en\">Get negative keyword list information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\SharedCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharedCriterionServiceSelector = new \Yahoo\Model\SharedCriterionServiceSelector(); // \Yahoo\Model\SharedCriterionServiceSelector | 

try {
    $result = $apiInstance->sharedCriterionServiceGetPost($sharedCriterionServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCriterionServiceApi->sharedCriterionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCriterionServiceSelector** | [**\Yahoo\Model\SharedCriterionServiceSelector**](../Model/SharedCriterionServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\SharedCriterionServiceGetResponse**](../Model/SharedCriterionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sharedCriterionServiceRemovePost

> \Yahoo\Model\SharedCriterionServiceMutateResponse sharedCriterionServiceRemovePost($sharedCriterionServiceOperation)



<div lang=\"ja\">対象外キーワードリストから対象外キーワードを削除します。</div><div lang=\"en\">Removes negative keywords from negative keyword list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\SharedCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharedCriterionServiceOperation = new \Yahoo\Model\SharedCriterionServiceOperation(); // \Yahoo\Model\SharedCriterionServiceOperation | 

try {
    $result = $apiInstance->sharedCriterionServiceRemovePost($sharedCriterionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCriterionServiceApi->sharedCriterionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCriterionServiceOperation** | [**\Yahoo\Model\SharedCriterionServiceOperation**](../Model/SharedCriterionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\SharedCriterionServiceMutateResponse**](../Model/SharedCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

