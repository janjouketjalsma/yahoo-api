# Yahoo\AdGroupCriterionLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupCriterionLabelServiceAddPost**](AdGroupCriterionLabelServiceApi.md#adGroupCriterionLabelServiceAddPost) | **POST** /AdGroupCriterionLabelService/add | 
[**adGroupCriterionLabelServiceRemovePost**](AdGroupCriterionLabelServiceApi.md#adGroupCriterionLabelServiceRemovePost) | **POST** /AdGroupCriterionLabelService/remove | 



## adGroupCriterionLabelServiceAddPost

> \Yahoo\Model\AdGroupCriterionLabelServiceMutateResponse adGroupCriterionLabelServiceAddPost($adGroupCriterionLabelServiceOperation)



<div lang=\"ja\">ラベルと広告グループのクライテリアの紐付けを登録します。</div><div lang=\"en\">Add informations of related conditions (criteria) of ad group and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupCriterionLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupCriterionLabelServiceOperation = new \Yahoo\Model\AdGroupCriterionLabelServiceOperation(); // \Yahoo\Model\AdGroupCriterionLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionLabelServiceAddPost($adGroupCriterionLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionLabelServiceApi->adGroupCriterionLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupCriterionLabelServiceOperation** | [**\Yahoo\Model\AdGroupCriterionLabelServiceOperation**](../Model/AdGroupCriterionLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupCriterionLabelServiceMutateResponse**](../Model/AdGroupCriterionLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionLabelServiceRemovePost

> \Yahoo\Model\AdGroupCriterionLabelServiceMutateResponse adGroupCriterionLabelServiceRemovePost($adGroupCriterionLabelServiceOperation)



<div lang=\"ja\">ラベルと広告グループのクライテリアの紐付けを削除します。</div><div lang=\"en\">Remove informations of related conditions (criteria) of ad group and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupCriterionLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupCriterionLabelServiceOperation = new \Yahoo\Model\AdGroupCriterionLabelServiceOperation(); // \Yahoo\Model\AdGroupCriterionLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionLabelServiceRemovePost($adGroupCriterionLabelServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionLabelServiceApi->adGroupCriterionLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupCriterionLabelServiceOperation** | [**\Yahoo\Model\AdGroupCriterionLabelServiceOperation**](../Model/AdGroupCriterionLabelServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupCriterionLabelServiceMutateResponse**](../Model/AdGroupCriterionLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

