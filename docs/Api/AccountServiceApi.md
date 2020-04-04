# Yahoo\AccountServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountServiceGetPost**](AccountServiceApi.md#accountServiceGetPost) | **POST** /AccountService/get | 
[**accountServiceSetPost**](AccountServiceApi.md#accountServiceSetPost) | **POST** /AccountService/set | 



## accountServiceGetPost

> \Yahoo\Model\AccountServiceGetResponse accountServiceGetPost($accountServiceSelector)



<div lang=\"ja\">アカウントに関する情報を取得します。契約状況などのフィルタ条件を設定することが可能です。</div><div lang=\"en\">Returns the account information. Enable to set the filter condition, such as the account Type.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountServiceSelector = new \Yahoo\Model\AccountServiceSelector(); // \Yahoo\Model\AccountServiceSelector | 

try {
    $result = $apiInstance->accountServiceGetPost($accountServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->accountServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountServiceSelector** | [**\Yahoo\Model\AccountServiceSelector**](../Model/AccountServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountServiceGetResponse**](../Model/AccountServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountServiceSetPost

> \Yahoo\Model\AccountServiceMutateResponse accountServiceSetPost($accountServiceOperation)



<div lang=\"ja\">アカウントに関する情報を更新します。</div><div lang=\"en\">Updates the information related to the account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountServiceOperation = new \Yahoo\Model\AccountServiceOperation(); // \Yahoo\Model\AccountServiceOperation | 

try {
    $result = $apiInstance->accountServiceSetPost($accountServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->accountServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountServiceOperation** | [**\Yahoo\Model\AccountServiceOperation**](../Model/AccountServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AccountServiceMutateResponse**](../Model/AccountServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

