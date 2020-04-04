# Yahoo\AdGroupAdLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupAdLabelServiceAddPost**](AdGroupAdLabelServiceApi.md#adGroupAdLabelServiceAddPost) | **POST** /AdGroupAdLabelService/add | 
[**adGroupAdLabelServiceRemovePost**](AdGroupAdLabelServiceApi.md#adGroupAdLabelServiceRemovePost) | **POST** /AdGroupAdLabelService/remove | 



## adGroupAdLabelServiceAddPost

> \Yahoo\Model\AdGroupAdLabelServiceMutateResponse adGroupAdLabelServiceAddPost($adGroupAdLabelServiceOperation)



<div lang=\"ja\">ラベルと広告の紐付けを登録します。</div><div lang=\"en\">Add informations of related ad and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupAdLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupAdLabelServiceOperation = new \Yahoo\Model\AdGroupAdLabelServiceOperation(); // \Yahoo\Model\AdGroupAdLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupAdLabelServiceAddPost($adGroupAdLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdLabelServiceApi->adGroupAdLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupAdLabelServiceOperation** | [**\Yahoo\Model\AdGroupAdLabelServiceOperation**](../Model/AdGroupAdLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupAdLabelServiceMutateResponse**](../Model/AdGroupAdLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdLabelServiceRemovePost

> \Yahoo\Model\AdGroupAdLabelServiceMutateResponse adGroupAdLabelServiceRemovePost($adGroupAdLabelServiceOperation)



<div lang=\"ja\">ラベルと広告グループの紐付けを削除します。</div><div lang=\"en\">Remove informations of related ad and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupAdLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupAdLabelServiceOperation = new \Yahoo\Model\AdGroupAdLabelServiceOperation(); // \Yahoo\Model\AdGroupAdLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupAdLabelServiceRemovePost($adGroupAdLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdLabelServiceApi->adGroupAdLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupAdLabelServiceOperation** | [**\Yahoo\Model\AdGroupAdLabelServiceOperation**](../Model/AdGroupAdLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupAdLabelServiceMutateResponse**](../Model/AdGroupAdLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

