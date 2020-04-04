# Yahoo\AdGroupRetargetingListServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupRetargetingListServiceAddPost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceAddPost) | **POST** /AdGroupRetargetingListService/add | 
[**adGroupRetargetingListServiceGetPost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceGetPost) | **POST** /AdGroupRetargetingListService/get | 
[**adGroupRetargetingListServiceRemovePost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceRemovePost) | **POST** /AdGroupRetargetingListService/remove | 
[**adGroupRetargetingListServiceSetPost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceSetPost) | **POST** /AdGroupRetargetingListService/set | 



## adGroupRetargetingListServiceAddPost

> \Yahoo\Model\AdGroupRetargetingListServiceMutateResponse adGroupRetargetingListServiceAddPost($adGroupRetargetingListServiceOperation)



<div lang=\"ja\">広告グループレベルでのターゲットリスト設定を追加します。</div><div lang=\"en\">Create the target list setting in ad group level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupRetargetingListServiceOperation = new \Yahoo\Model\AdGroupRetargetingListServiceOperation(); // \Yahoo\Model\AdGroupRetargetingListServiceOperation | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceAddPost($adGroupRetargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupRetargetingListServiceOperation** | [**\Yahoo\Model\AdGroupRetargetingListServiceOperation**](../Model/AdGroupRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupRetargetingListServiceMutateResponse**](../Model/AdGroupRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupRetargetingListServiceGetPost

> \Yahoo\Model\AdGroupRetargetingListServiceGetResponse adGroupRetargetingListServiceGetPost($adGroupRetargetingListServiceSelector)



<div lang=\"ja\">広告グループレベルでのターゲットリスト設定に関する情報を取得します。</div><div lang=\"en\">Retreive the target list setting in ad group level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupRetargetingListServiceSelector = new \Yahoo\Model\AdGroupRetargetingListServiceSelector(); // \Yahoo\Model\AdGroupRetargetingListServiceSelector | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceGetPost($adGroupRetargetingListServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupRetargetingListServiceSelector** | [**\Yahoo\Model\AdGroupRetargetingListServiceSelector**](../Model/AdGroupRetargetingListServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupRetargetingListServiceGetResponse**](../Model/AdGroupRetargetingListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupRetargetingListServiceRemovePost

> \Yahoo\Model\AdGroupRetargetingListServiceMutateResponse adGroupRetargetingListServiceRemovePost($adGroupRetargetingListServiceOperation)



<div lang=\"ja\">広告グループレベルでのターゲットリスト設定を削除します。</div><div lang=\"en\">Delete the target list setting in ad group level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupRetargetingListServiceOperation = new \Yahoo\Model\AdGroupRetargetingListServiceOperation(); // \Yahoo\Model\AdGroupRetargetingListServiceOperation | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceRemovePost($adGroupRetargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupRetargetingListServiceOperation** | [**\Yahoo\Model\AdGroupRetargetingListServiceOperation**](../Model/AdGroupRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupRetargetingListServiceMutateResponse**](../Model/AdGroupRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupRetargetingListServiceSetPost

> \Yahoo\Model\AdGroupRetargetingListServiceMutateResponse adGroupRetargetingListServiceSetPost($adGroupRetargetingListServiceOperation)



<div lang=\"ja\">広告グループレベルでのターゲットリスト設定を更新します。</div><div lang=\"en\">Update the target list setting in ad group level.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupRetargetingListServiceOperation = new \Yahoo\Model\AdGroupRetargetingListServiceOperation(); // \Yahoo\Model\AdGroupRetargetingListServiceOperation | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceSetPost($adGroupRetargetingListServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupRetargetingListServiceOperation** | [**\Yahoo\Model\AdGroupRetargetingListServiceOperation**](../Model/AdGroupRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupRetargetingListServiceMutateResponse**](../Model/AdGroupRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

