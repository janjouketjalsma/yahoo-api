# Yahoo\AdGroupServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupServiceAddPost**](AdGroupServiceApi.md#adGroupServiceAddPost) | **POST** /AdGroupService/add | 
[**adGroupServiceGetPost**](AdGroupServiceApi.md#adGroupServiceGetPost) | **POST** /AdGroupService/get | 
[**adGroupServiceRemovePost**](AdGroupServiceApi.md#adGroupServiceRemovePost) | **POST** /AdGroupService/remove | 
[**adGroupServiceSetPost**](AdGroupServiceApi.md#adGroupServiceSetPost) | **POST** /AdGroupService/set | 



## adGroupServiceAddPost

> \Yahoo\Model\AdGroupServiceMutateResponse adGroupServiceAddPost($adGroupServiceOperation)



<div lang=\"ja\">広告グループを追加します。</div><div lang=\"en\">Create Ad group information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupServiceOperation = new \Yahoo\Model\AdGroupServiceOperation(); // \Yahoo\Model\AdGroupServiceOperation | 

try {
    $result = $apiInstance->adGroupServiceAddPost($adGroupServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupServiceOperation** | [**\Yahoo\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupServiceGetPost

> \Yahoo\Model\AdGroupServiceGetResponse adGroupServiceGetPost($adGroupServiceSelector)



<div lang=\"ja\">広告グループに関する情報を取得します。</div><div lang=\"en\">Gets Ad group information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupServiceSelector = new \Yahoo\Model\AdGroupServiceSelector(); // \Yahoo\Model\AdGroupServiceSelector | 

try {
    $result = $apiInstance->adGroupServiceGetPost($adGroupServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupServiceSelector** | [**\Yahoo\Model\AdGroupServiceSelector**](../Model/AdGroupServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupServiceGetResponse**](../Model/AdGroupServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupServiceRemovePost

> \Yahoo\Model\AdGroupServiceMutateResponse adGroupServiceRemovePost($adGroupServiceOperation)



<div lang=\"ja\">広告グループを削除します。</div><div lang=\"en\">Removes Ad group information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupServiceOperation = new \Yahoo\Model\AdGroupServiceOperation(); // \Yahoo\Model\AdGroupServiceOperation | 

try {
    $result = $apiInstance->adGroupServiceRemovePost($adGroupServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupServiceOperation** | [**\Yahoo\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupServiceSetPost

> \Yahoo\Model\AdGroupServiceMutateResponse adGroupServiceSetPost($adGroupServiceOperation)



<div lang=\"ja\">広告グループを更新します。</div><div lang=\"en\">Updates Ad group information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupServiceOperation = new \Yahoo\Model\AdGroupServiceOperation(); // \Yahoo\Model\AdGroupServiceOperation | 

try {
    $result = $apiInstance->adGroupServiceSetPost($adGroupServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupServiceOperation** | [**\Yahoo\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

