# Yahoo\FeedServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedServiceAddPost**](FeedServiceApi.md#feedServiceAddPost) | **POST** /FeedService/add | 
[**feedServiceGetPost**](FeedServiceApi.md#feedServiceGetPost) | **POST** /FeedService/get | 
[**feedServiceRemovePost**](FeedServiceApi.md#feedServiceRemovePost) | **POST** /FeedService/remove | 
[**feedServiceSetPost**](FeedServiceApi.md#feedServiceSetPost) | **POST** /FeedService/set | 



## feedServiceAddPost

> \Yahoo\Model\FeedServiceMutateResponse feedServiceAddPost($feedServiceOperation)



<div lang=\"ja\">FeedItem情報を追加します。</div><div lang=\"en\">Add the information related to Feed.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedServiceOperation = new \Yahoo\Model\FeedServiceOperation(); // \Yahoo\Model\FeedServiceOperation | 

try {
    $result = $apiInstance->feedServiceAddPost($feedServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedServiceOperation** | [**\Yahoo\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedServiceGetPost

> \Yahoo\Model\FeedServiceGetResponse feedServiceGetPost($feedServiceSelector)



<div lang=\"ja\">自動データ挿入のリスト情報を取得します。</div><div lang=\"en\">Returns Feed information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedServiceSelector = new \Yahoo\Model\FeedServiceSelector(); // \Yahoo\Model\FeedServiceSelector | 

try {
    $result = $apiInstance->feedServiceGetPost($feedServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedServiceSelector** | [**\Yahoo\Model\FeedServiceSelector**](../Model/FeedServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedServiceGetResponse**](../Model/FeedServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedServiceRemovePost

> \Yahoo\Model\FeedServiceMutateResponse feedServiceRemovePost($feedServiceOperation)



<div lang=\"ja\">FeedItem情報を削除します。</div><div lang=\"en\">Removes Feed information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedServiceOperation = new \Yahoo\Model\FeedServiceOperation(); // \Yahoo\Model\FeedServiceOperation | 

try {
    $result = $apiInstance->feedServiceRemovePost($feedServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedServiceOperation** | [**\Yahoo\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedServiceSetPost

> \Yahoo\Model\FeedServiceMutateResponse feedServiceSetPost($feedServiceOperation)



<div lang=\"ja\">FeedItem情報を更新します。</div><div lang=\"en\">Updates Feed information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedServiceOperation = new \Yahoo\Model\FeedServiceOperation(); // \Yahoo\Model\FeedServiceOperation | 

try {
    $result = $apiInstance->feedServiceSetPost($feedServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedServiceOperation** | [**\Yahoo\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

