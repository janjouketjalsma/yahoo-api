# Yahoo\AccountSharedServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountSharedServiceAddPost**](AccountSharedServiceApi.md#accountSharedServiceAddPost) | **POST** /AccountSharedService/add | 
[**accountSharedServiceGetPost**](AccountSharedServiceApi.md#accountSharedServiceGetPost) | **POST** /AccountSharedService/get | 
[**accountSharedServiceRemovePost**](AccountSharedServiceApi.md#accountSharedServiceRemovePost) | **POST** /AccountSharedService/remove | 
[**accountSharedServiceSetPost**](AccountSharedServiceApi.md#accountSharedServiceSetPost) | **POST** /AccountSharedService/set | 



## accountSharedServiceAddPost

> \Yahoo\Model\AccountSharedServiceMutateResponse accountSharedServiceAddPost($accountSharedServiceOperation)



<div lang=\"ja\">アカウントに対象外キーワードリストを追加します。</div><div lang=\"en\">Add negative keyword list to account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountSharedServiceOperation = new \Yahoo\Model\AccountSharedServiceOperation(); // \Yahoo\Model\AccountSharedServiceOperation | 

try {
    $result = $apiInstance->accountSharedServiceAddPost($accountSharedServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountSharedServiceOperation** | [**\Yahoo\Model\AccountSharedServiceOperation**](../Model/AccountSharedServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountSharedServiceMutateResponse**](../Model/AccountSharedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountSharedServiceGetPost

> \Yahoo\Model\AccountSharedServiceGetResponse accountSharedServiceGetPost($accountSharedServiceSelector)



<div lang=\"ja\">対象外キーワードリストの情報を取得します。</div><div lang=\"en\">Get negative keyword list information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountSharedServiceSelector = new \Yahoo\Model\AccountSharedServiceSelector(); // \Yahoo\Model\AccountSharedServiceSelector | 

try {
    $result = $apiInstance->accountSharedServiceGetPost($accountSharedServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountSharedServiceSelector** | [**\Yahoo\Model\AccountSharedServiceSelector**](../Model/AccountSharedServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountSharedServiceGetResponse**](../Model/AccountSharedServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountSharedServiceRemovePost

> \Yahoo\Model\AccountSharedServiceMutateResponse accountSharedServiceRemovePost($accountSharedServiceOperation)



<div lang=\"ja\">アカウントから対象外キーワードリストを削除します。</div><div lang=\"en\">Remove negative keyword list from account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountSharedServiceOperation = new \Yahoo\Model\AccountSharedServiceOperation(); // \Yahoo\Model\AccountSharedServiceOperation | 

try {
    $result = $apiInstance->accountSharedServiceRemovePost($accountSharedServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountSharedServiceOperation** | [**\Yahoo\Model\AccountSharedServiceOperation**](../Model/AccountSharedServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountSharedServiceMutateResponse**](../Model/AccountSharedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountSharedServiceSetPost

> \Yahoo\Model\AccountSharedServiceMutateResponse accountSharedServiceSetPost($accountSharedServiceOperation)



<div lang=\"ja\">対象外キーワードリストの設定を変更します。</div><div lang=\"en\">Update negative keyword list information of account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountSharedServiceOperation = new \Yahoo\Model\AccountSharedServiceOperation(); // \Yahoo\Model\AccountSharedServiceOperation | 

try {
    $result = $apiInstance->accountSharedServiceSetPost($accountSharedServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountSharedServiceOperation** | [**\Yahoo\Model\AccountSharedServiceOperation**](../Model/AccountSharedServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountSharedServiceMutateResponse**](../Model/AccountSharedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

