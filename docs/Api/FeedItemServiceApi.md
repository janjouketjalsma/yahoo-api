# Yahoo\FeedItemServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedItemServiceAddPost**](FeedItemServiceApi.md#feedItemServiceAddPost) | **POST** /FeedItemService/add | 
[**feedItemServiceGetPost**](FeedItemServiceApi.md#feedItemServiceGetPost) | **POST** /FeedItemService/get | 
[**feedItemServiceRemovePost**](FeedItemServiceApi.md#feedItemServiceRemovePost) | **POST** /FeedItemService/remove | 
[**feedItemServiceSetPost**](FeedItemServiceApi.md#feedItemServiceSetPost) | **POST** /FeedItemService/set | 
[**feedItemServiceSetTrademarkStatusPost**](FeedItemServiceApi.md#feedItemServiceSetTrademarkStatusPost) | **POST** /FeedItemService/setTrademarkStatus | 



## feedItemServiceAddPost

> \Yahoo\Model\FeedItemServiceMutateResponse feedItemServiceAddPost($feedItemServiceOperation)



<div lang=\"ja\">フィードアイテム情報を追加します。</div><div lang=\"en\">Add Feed Item information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedItemServiceOperation = new \Yahoo\Model\FeedItemServiceOperation(); // \Yahoo\Model\FeedItemServiceOperation | 

try {
    $result = $apiInstance->feedItemServiceAddPost($feedItemServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedItemServiceOperation** | [**\Yahoo\Model\FeedItemServiceOperation**](../Model/FeedItemServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedItemServiceMutateResponse**](../Model/FeedItemServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceGetPost

> \Yahoo\Model\FeedItemServiceGetResponse feedItemServiceGetPost($feedItemServiceSelector)



<div lang=\"ja\">フィードアイテム情報を取得します。</div><div lang=\"en\">Get Feed Item information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedItemServiceSelector = new \Yahoo\Model\FeedItemServiceSelector(); // \Yahoo\Model\FeedItemServiceSelector | 

try {
    $result = $apiInstance->feedItemServiceGetPost($feedItemServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedItemServiceSelector** | [**\Yahoo\Model\FeedItemServiceSelector**](../Model/FeedItemServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedItemServiceGetResponse**](../Model/FeedItemServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceRemovePost

> \Yahoo\Model\FeedItemServiceMutateResponse feedItemServiceRemovePost($feedItemServiceOperation)



<div lang=\"ja\">フィードアイテム情報を削除します。</div><div lang=\"en\">Remove the Feed Item details.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedItemServiceOperation = new \Yahoo\Model\FeedItemServiceOperation(); // \Yahoo\Model\FeedItemServiceOperation | 

try {
    $result = $apiInstance->feedItemServiceRemovePost($feedItemServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedItemServiceOperation** | [**\Yahoo\Model\FeedItemServiceOperation**](../Model/FeedItemServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedItemServiceMutateResponse**](../Model/FeedItemServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceSetPost

> \Yahoo\Model\FeedItemServiceMutateResponse feedItemServiceSetPost($feedItemServiceOperation)



<div lang=\"ja\">フィードアイテム情報を更新します。</div><div lang=\"en\">Updates the Feed Item details.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedItemServiceOperation = new \Yahoo\Model\FeedItemServiceOperation(); // \Yahoo\Model\FeedItemServiceOperation | 

try {
    $result = $apiInstance->feedItemServiceSetPost($feedItemServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedItemServiceOperation** | [**\Yahoo\Model\FeedItemServiceOperation**](../Model/FeedItemServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedItemServiceMutateResponse**](../Model/FeedItemServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceSetTrademarkStatusPost

> \Yahoo\Model\FeedItemServiceSetTrademarkStatusResponse feedItemServiceSetTrademarkStatusPost($feedItemServiceSetTrademarkStatusOperation)



<div lang=\"ja\">商標の使用制限解除を確認します。</div><div lang=\"en\">Confirm the status of trademark restriction.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedItemServiceSetTrademarkStatusOperation = new \Yahoo\Model\FeedItemServiceSetTrademarkStatusOperation(); // \Yahoo\Model\FeedItemServiceSetTrademarkStatusOperation | 

try {
    $result = $apiInstance->feedItemServiceSetTrademarkStatusPost($feedItemServiceSetTrademarkStatusOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceSetTrademarkStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedItemServiceSetTrademarkStatusOperation** | [**\Yahoo\Model\FeedItemServiceSetTrademarkStatusOperation**](../Model/FeedItemServiceSetTrademarkStatusOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedItemServiceSetTrademarkStatusResponse**](../Model/FeedItemServiceSetTrademarkStatusResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

