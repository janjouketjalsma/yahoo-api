# Yahoo\AdGroupBidMultiplierServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupBidMultiplierServiceGetPost**](AdGroupBidMultiplierServiceApi.md#adGroupBidMultiplierServiceGetPost) | **POST** /AdGroupBidMultiplierService/get | 
[**adGroupBidMultiplierServiceRemovePost**](AdGroupBidMultiplierServiceApi.md#adGroupBidMultiplierServiceRemovePost) | **POST** /AdGroupBidMultiplierService/remove | 
[**adGroupBidMultiplierServiceSetPost**](AdGroupBidMultiplierServiceApi.md#adGroupBidMultiplierServiceSetPost) | **POST** /AdGroupBidMultiplierService/set | 



## adGroupBidMultiplierServiceGetPost

> \Yahoo\Model\AdGroupBidMultiplierServiceGetResponse adGroupBidMultiplierServiceGetPost($adGroupBidMultiplierServiceSelector)



<div lang=\"ja\">広告グループに関する入札価格調整率を取得します。</div><div lang=\"en\">Gets bid multiplier of adgroup</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupBidMultiplierServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupBidMultiplierServiceSelector = new \Yahoo\Model\AdGroupBidMultiplierServiceSelector(); // \Yahoo\Model\AdGroupBidMultiplierServiceSelector | 

try {
    $result = $apiInstance->adGroupBidMultiplierServiceGetPost($adGroupBidMultiplierServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupBidMultiplierServiceApi->adGroupBidMultiplierServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupBidMultiplierServiceSelector** | [**\Yahoo\Model\AdGroupBidMultiplierServiceSelector**](../Model/AdGroupBidMultiplierServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupBidMultiplierServiceGetResponse**](../Model/AdGroupBidMultiplierServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupBidMultiplierServiceRemovePost

> \Yahoo\Model\AdGroupBidMultiplierServiceMutateResponse adGroupBidMultiplierServiceRemovePost($adGroupBidMultiplierServiceOperation)



<div lang=\"ja\">広告グループに設定済みの入札価格調整率を削除します。</div><div lang=\"en\">Remove bid multiplier which already set to ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupBidMultiplierServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupBidMultiplierServiceOperation = new \Yahoo\Model\AdGroupBidMultiplierServiceOperation(); // \Yahoo\Model\AdGroupBidMultiplierServiceOperation | 

try {
    $result = $apiInstance->adGroupBidMultiplierServiceRemovePost($adGroupBidMultiplierServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupBidMultiplierServiceApi->adGroupBidMultiplierServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupBidMultiplierServiceOperation** | [**\Yahoo\Model\AdGroupBidMultiplierServiceOperation**](../Model/AdGroupBidMultiplierServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupBidMultiplierServiceMutateResponse**](../Model/AdGroupBidMultiplierServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupBidMultiplierServiceSetPost

> \Yahoo\Model\AdGroupBidMultiplierServiceMutateResponse adGroupBidMultiplierServiceSetPost($adGroupBidMultiplierServiceOperation)



<div lang=\"ja\">広告グループに関する入札価格調整率を設定、更新します。</div><div lang=\"en\">Updates adgroup bid multiplier.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupBidMultiplierServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupBidMultiplierServiceOperation = new \Yahoo\Model\AdGroupBidMultiplierServiceOperation(); // \Yahoo\Model\AdGroupBidMultiplierServiceOperation | 

try {
    $result = $apiInstance->adGroupBidMultiplierServiceSetPost($adGroupBidMultiplierServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupBidMultiplierServiceApi->adGroupBidMultiplierServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupBidMultiplierServiceOperation** | [**\Yahoo\Model\AdGroupBidMultiplierServiceOperation**](../Model/AdGroupBidMultiplierServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupBidMultiplierServiceMutateResponse**](../Model/AdGroupBidMultiplierServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

