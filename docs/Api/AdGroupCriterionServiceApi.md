# Yahoo\AdGroupCriterionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupCriterionServiceAddPost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceAddPost) | **POST** /AdGroupCriterionService/add | 
[**adGroupCriterionServiceGetPost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceGetPost) | **POST** /AdGroupCriterionService/get | 
[**adGroupCriterionServiceRemovePost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceRemovePost) | **POST** /AdGroupCriterionService/remove | 
[**adGroupCriterionServiceSetPost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceSetPost) | **POST** /AdGroupCriterionService/set | 



## adGroupCriterionServiceAddPost

> \Yahoo\Model\AdGroupCriterionServiceMutateResponse adGroupCriterionServiceAddPost($adGroupCriterionServiceOperation)



<div lang=\"ja\">広告グループに関するクライテリアを追加します。</div><div lang=\"en\">Add Ad group criteria.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupCriterionServiceOperation = new \Yahoo\Model\AdGroupCriterionServiceOperation(); // \Yahoo\Model\AdGroupCriterionServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionServiceAddPost($adGroupCriterionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupCriterionServiceOperation** | [**\Yahoo\Model\AdGroupCriterionServiceOperation**](../Model/AdGroupCriterionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupCriterionServiceMutateResponse**](../Model/AdGroupCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionServiceGetPost

> \Yahoo\Model\AdGroupCriterionServiceGetResponse adGroupCriterionServiceGetPost($adGroupCriterionServiceSelector)



<div lang=\"ja\">広告グループに関するクライテリアを取得します。</div><div lang=\"en\">Get criteria of Ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupCriterionServiceSelector = new \Yahoo\Model\AdGroupCriterionServiceSelector(); // \Yahoo\Model\AdGroupCriterionServiceSelector | 

try {
    $result = $apiInstance->adGroupCriterionServiceGetPost($adGroupCriterionServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupCriterionServiceSelector** | [**\Yahoo\Model\AdGroupCriterionServiceSelector**](../Model/AdGroupCriterionServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupCriterionServiceGetResponse**](../Model/AdGroupCriterionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionServiceRemovePost

> \Yahoo\Model\AdGroupCriterionServiceMutateResponse adGroupCriterionServiceRemovePost($adGroupCriterionServiceOperation)



<div lang=\"ja\">広告グループに関するクライテリアを削除します。</div><div lang=\"en\">Removes Ad group criteria.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupCriterionServiceOperation = new \Yahoo\Model\AdGroupCriterionServiceOperation(); // \Yahoo\Model\AdGroupCriterionServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionServiceRemovePost($adGroupCriterionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupCriterionServiceOperation** | [**\Yahoo\Model\AdGroupCriterionServiceOperation**](../Model/AdGroupCriterionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupCriterionServiceMutateResponse**](../Model/AdGroupCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionServiceSetPost

> \Yahoo\Model\AdGroupCriterionServiceMutateResponse adGroupCriterionServiceSetPost($adGroupCriterionServiceOperation)



<div lang=\"ja\">広告グループに関するクライテリアを更新します。</div><div lang=\"en\">Update or change Ad group criteria.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupCriterionServiceOperation = new \Yahoo\Model\AdGroupCriterionServiceOperation(); // \Yahoo\Model\AdGroupCriterionServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionServiceSetPost($adGroupCriterionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupCriterionServiceOperation** | [**\Yahoo\Model\AdGroupCriterionServiceOperation**](../Model/AdGroupCriterionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupCriterionServiceMutateResponse**](../Model/AdGroupCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

