# Yahoo\AdGroupLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupLabelServiceAddPost**](AdGroupLabelServiceApi.md#adGroupLabelServiceAddPost) | **POST** /AdGroupLabelService/add | 
[**adGroupLabelServiceRemovePost**](AdGroupLabelServiceApi.md#adGroupLabelServiceRemovePost) | **POST** /AdGroupLabelService/remove | 



## adGroupLabelServiceAddPost

> \Yahoo\Model\AdGroupLabelServiceMutateResponse adGroupLabelServiceAddPost($adGroupLabelServiceOperation)



<div lang=\"ja\">ラベルと広告グループの紐付けを登録します。</div><div lang=\"en\">Add informations of related ad group and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupLabelServiceOperation = new \Yahoo\Model\AdGroupLabelServiceOperation(); // \Yahoo\Model\AdGroupLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupLabelServiceAddPost($adGroupLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupLabelServiceApi->adGroupLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupLabelServiceOperation** | [**\Yahoo\Model\AdGroupLabelServiceOperation**](../Model/AdGroupLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupLabelServiceMutateResponse**](../Model/AdGroupLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupLabelServiceRemovePost

> \Yahoo\Model\AdGroupLabelServiceMutateResponse adGroupLabelServiceRemovePost($adGroupLabelServiceOperation)



<div lang=\"ja\">ラベルと広告グループの紐付けを削除します。</div><div lang=\"en\">Remove informations of related ad group and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupLabelServiceOperation = new \Yahoo\Model\AdGroupLabelServiceOperation(); // \Yahoo\Model\AdGroupLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupLabelServiceRemovePost($adGroupLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupLabelServiceApi->adGroupLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupLabelServiceOperation** | [**\Yahoo\Model\AdGroupLabelServiceOperation**](../Model/AdGroupLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupLabelServiceMutateResponse**](../Model/AdGroupLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

