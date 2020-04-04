# Yahoo\RetargetingListServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retargetingListServiceAddPost**](RetargetingListServiceApi.md#retargetingListServiceAddPost) | **POST** /RetargetingListService/add | 
[**retargetingListServiceGetCustomKeyPost**](RetargetingListServiceApi.md#retargetingListServiceGetCustomKeyPost) | **POST** /RetargetingListService/getCustomKey | 
[**retargetingListServiceGetPost**](RetargetingListServiceApi.md#retargetingListServiceGetPost) | **POST** /RetargetingListService/get | 
[**retargetingListServiceSetPost**](RetargetingListServiceApi.md#retargetingListServiceSetPost) | **POST** /RetargetingListService/set | 



## retargetingListServiceAddPost

> \Yahoo\Model\RetargetingListServiceMutateResponse retargetingListServiceAddPost($retargetingListServiceOperation)



<div lang=\"ja\">ターゲットリストを追加します。</div><div lang=\"en\">Adds target list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargetingListServiceOperation = new \Yahoo\Model\RetargetingListServiceOperation(); // \Yahoo\Model\RetargetingListServiceOperation | 

try {
    $result = $apiInstance->retargetingListServiceAddPost($retargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargetingListServiceOperation** | [**\Yahoo\Model\RetargetingListServiceOperation**](../Model/RetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\RetargetingListServiceMutateResponse**](../Model/RetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retargetingListServiceGetCustomKeyPost

> \Yahoo\Model\RetargetingListServiceGetCustomKeyResponse retargetingListServiceGetCustomKeyPost($retargetingListServiceGetCustomKeySelector)



<div lang=\"ja\">カスタムキーに関する情報を取得します。</div><div lang=\"en\">Get custom key information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargetingListServiceGetCustomKeySelector = new \Yahoo\Model\RetargetingListServiceGetCustomKeySelector(); // \Yahoo\Model\RetargetingListServiceGetCustomKeySelector | 

try {
    $result = $apiInstance->retargetingListServiceGetCustomKeyPost($retargetingListServiceGetCustomKeySelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceGetCustomKeyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargetingListServiceGetCustomKeySelector** | [**\Yahoo\Model\RetargetingListServiceGetCustomKeySelector**](../Model/RetargetingListServiceGetCustomKeySelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\RetargetingListServiceGetCustomKeyResponse**](../Model/RetargetingListServiceGetCustomKeyResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retargetingListServiceGetPost

> \Yahoo\Model\RetargetingListServiceGetResponse retargetingListServiceGetPost($retargetingListServiceSelector)



<div lang=\"ja\">ターゲットリストに関する情報を取得します。</div><div lang=\"en\">Retrieves the target list information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargetingListServiceSelector = new \Yahoo\Model\RetargetingListServiceSelector(); // \Yahoo\Model\RetargetingListServiceSelector | 

try {
    $result = $apiInstance->retargetingListServiceGetPost($retargetingListServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargetingListServiceSelector** | [**\Yahoo\Model\RetargetingListServiceSelector**](../Model/RetargetingListServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\RetargetingListServiceGetResponse**](../Model/RetargetingListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retargetingListServiceSetPost

> \Yahoo\Model\RetargetingListServiceMutateResponse retargetingListServiceSetPost($retargetingListServiceOperation)



<div lang=\"ja\">ターゲットリストを更新します。</div><div lang=\"en\">Updates the target list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargetingListServiceOperation = new \Yahoo\Model\RetargetingListServiceOperation(); // \Yahoo\Model\RetargetingListServiceOperation | 

try {
    $result = $apiInstance->retargetingListServiceSetPost($retargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargetingListServiceOperation** | [**\Yahoo\Model\RetargetingListServiceOperation**](../Model/RetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\RetargetingListServiceMutateResponse**](../Model/RetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

