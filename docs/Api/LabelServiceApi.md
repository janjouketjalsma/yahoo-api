# Yahoo\LabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**labelServiceAddPost**](LabelServiceApi.md#labelServiceAddPost) | **POST** /LabelService/add | 
[**labelServiceGetPost**](LabelServiceApi.md#labelServiceGetPost) | **POST** /LabelService/get | 
[**labelServiceRemovePost**](LabelServiceApi.md#labelServiceRemovePost) | **POST** /LabelService/remove | 
[**labelServiceSetPost**](LabelServiceApi.md#labelServiceSetPost) | **POST** /LabelService/set | 



## labelServiceAddPost

> \Yahoo\Model\LabelServiceMutateResponse labelServiceAddPost($labelServiceOperation)



<div lang=\"ja\">ラベルを追加します。</div><div lang=\"en\">Add label information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labelServiceOperation = new \Yahoo\Model\LabelServiceOperation(); // \Yahoo\Model\LabelServiceOperation | 

try {
    $result = $apiInstance->labelServiceAddPost($labelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelServiceOperation** | [**\Yahoo\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## labelServiceGetPost

> \Yahoo\Model\LabelServiceGetResponse labelServiceGetPost($labelServiceSelector)



<div lang=\"ja\">ラベルに関する情報を取得します。</div><div lang=\"en\">Gets information related to labels.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labelServiceSelector = new \Yahoo\Model\LabelServiceSelector(); // \Yahoo\Model\LabelServiceSelector | 

try {
    $result = $apiInstance->labelServiceGetPost($labelServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelServiceSelector** | [**\Yahoo\Model\LabelServiceSelector**](../Model/LabelServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\LabelServiceGetResponse**](../Model/LabelServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## labelServiceRemovePost

> \Yahoo\Model\LabelServiceMutateResponse labelServiceRemovePost($labelServiceOperation)



<div lang=\"ja\">ラベルを削除します。</div><div lang=\"en\">Removes the inforamtion related to labels.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labelServiceOperation = new \Yahoo\Model\LabelServiceOperation(); // \Yahoo\Model\LabelServiceOperation | 

try {
    $result = $apiInstance->labelServiceRemovePost($labelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelServiceOperation** | [**\Yahoo\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## labelServiceSetPost

> \Yahoo\Model\LabelServiceMutateResponse labelServiceSetPost($labelServiceOperation)



<div lang=\"ja\">ラベルを更新します。</div><div lang=\"en\">Updates the information related to labels.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labelServiceOperation = new \Yahoo\Model\LabelServiceOperation(); // \Yahoo\Model\LabelServiceOperation | 

try {
    $result = $apiInstance->labelServiceSetPost($labelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelServiceOperation** | [**\Yahoo\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

