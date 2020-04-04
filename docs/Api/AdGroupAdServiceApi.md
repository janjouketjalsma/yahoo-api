# Yahoo\AdGroupAdServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupAdServiceAddPost**](AdGroupAdServiceApi.md#adGroupAdServiceAddPost) | **POST** /AdGroupAdService/add | 
[**adGroupAdServiceGetPost**](AdGroupAdServiceApi.md#adGroupAdServiceGetPost) | **POST** /AdGroupAdService/get | 
[**adGroupAdServiceRemovePost**](AdGroupAdServiceApi.md#adGroupAdServiceRemovePost) | **POST** /AdGroupAdService/remove | 
[**adGroupAdServiceSetPost**](AdGroupAdServiceApi.md#adGroupAdServiceSetPost) | **POST** /AdGroupAdService/set | 
[**adGroupAdServiceSetTrademarkStatusPost**](AdGroupAdServiceApi.md#adGroupAdServiceSetTrademarkStatusPost) | **POST** /AdGroupAdService/setTrademarkStatus | 



## adGroupAdServiceAddPost

> \Yahoo\Model\AdGroupAdServiceMutateResponse adGroupAdServiceAddPost($adGroupAdServiceOperation)



<div lang=\"ja\">広告に関する情報を追加します。</div><div lang=\"en\">Add informations of ad.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupAdServiceOperation = new \Yahoo\Model\AdGroupAdServiceOperation(); // \Yahoo\Model\AdGroupAdServiceOperation | 

try {
    $result = $apiInstance->adGroupAdServiceAddPost($adGroupAdServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupAdServiceOperation** | [**\Yahoo\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceGetPost

> \Yahoo\Model\AdGroupAdServiceGetResponse adGroupAdServiceGetPost($adGroupAdServiceSelector)



<div lang=\"ja\">広告に関する情報を取得します。</div><div lang=\"en\">Returns ad information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupAdServiceSelector = new \Yahoo\Model\AdGroupAdServiceSelector(); // \Yahoo\Model\AdGroupAdServiceSelector | 

try {
    $result = $apiInstance->adGroupAdServiceGetPost($adGroupAdServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupAdServiceSelector** | [**\Yahoo\Model\AdGroupAdServiceSelector**](../Model/AdGroupAdServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupAdServiceGetResponse**](../Model/AdGroupAdServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceRemovePost

> \Yahoo\Model\AdGroupAdServiceMutateResponse adGroupAdServiceRemovePost($adGroupAdServiceOperation)



<div lang=\"ja\">広告に関する情報を削除します。</div><div lang=\"en\">Remove ad information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupAdServiceOperation = new \Yahoo\Model\AdGroupAdServiceOperation(); // \Yahoo\Model\AdGroupAdServiceOperation | 

try {
    $result = $apiInstance->adGroupAdServiceRemovePost($adGroupAdServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupAdServiceOperation** | [**\Yahoo\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceSetPost

> \Yahoo\Model\AdGroupAdServiceMutateResponse adGroupAdServiceSetPost($adGroupAdServiceOperation)



<div lang=\"ja\">広告に関する情報を更新します。</div><div lang=\"en\">Updates ad information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupAdServiceOperation = new \Yahoo\Model\AdGroupAdServiceOperation(); // \Yahoo\Model\AdGroupAdServiceOperation | 

try {
    $result = $apiInstance->adGroupAdServiceSetPost($adGroupAdServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupAdServiceOperation** | [**\Yahoo\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceSetTrademarkStatusPost

> \Yahoo\Model\AdGroupAdServiceSetTrademarkStatusResponse adGroupAdServiceSetTrademarkStatusPost($adGroupAdServiceSetTrademarkStatusOperation)



<div lang=\"ja\">商標の使用制限が解除されている場合は、制限が解除された旨の値が返却されます。</div><div lang=\"en\">When the trademark restriction is removed, a value indicates \"removed\" will be returned.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupAdServiceSetTrademarkStatusOperation = new \Yahoo\Model\AdGroupAdServiceSetTrademarkStatusOperation(); // \Yahoo\Model\AdGroupAdServiceSetTrademarkStatusOperation | 

try {
    $result = $apiInstance->adGroupAdServiceSetTrademarkStatusPost($adGroupAdServiceSetTrademarkStatusOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceSetTrademarkStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupAdServiceSetTrademarkStatusOperation** | [**\Yahoo\Model\AdGroupAdServiceSetTrademarkStatusOperation**](../Model/AdGroupAdServiceSetTrademarkStatusOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupAdServiceSetTrademarkStatusResponse**](../Model/AdGroupAdServiceSetTrademarkStatusResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

