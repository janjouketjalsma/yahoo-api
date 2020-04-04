# Yahoo\BiddingStrategyServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**biddingStrategyServiceAddPost**](BiddingStrategyServiceApi.md#biddingStrategyServiceAddPost) | **POST** /BiddingStrategyService/add | 
[**biddingStrategyServiceGetPost**](BiddingStrategyServiceApi.md#biddingStrategyServiceGetPost) | **POST** /BiddingStrategyService/get | 
[**biddingStrategyServiceRemovePost**](BiddingStrategyServiceApi.md#biddingStrategyServiceRemovePost) | **POST** /BiddingStrategyService/remove | 
[**biddingStrategyServiceSetPost**](BiddingStrategyServiceApi.md#biddingStrategyServiceSetPost) | **POST** /BiddingStrategyService/set | 



## biddingStrategyServiceAddPost

> \Yahoo\Model\BiddingStrategyServiceMutateResponse biddingStrategyServiceAddPost($biddingStrategyServiceOperation)



<div lang=\"ja\">自動入札設定を追加します。</div><div lang=\"en\">Creates the Auto bidding.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$biddingStrategyServiceOperation = new \Yahoo\Model\BiddingStrategyServiceOperation(); // \Yahoo\Model\BiddingStrategyServiceOperation | 

try {
    $result = $apiInstance->biddingStrategyServiceAddPost($biddingStrategyServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **biddingStrategyServiceOperation** | [**\Yahoo\Model\BiddingStrategyServiceOperation**](../Model/BiddingStrategyServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\BiddingStrategyServiceMutateResponse**](../Model/BiddingStrategyServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## biddingStrategyServiceGetPost

> \Yahoo\Model\BiddingStrategyServiceGetResponse biddingStrategyServiceGetPost($biddingStrategyServiceSelector)



<div lang=\"ja\">自動入札設定に関する情報を取得します。</div><div lang=\"en\">Returns auto bidding information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$biddingStrategyServiceSelector = new \Yahoo\Model\BiddingStrategyServiceSelector(); // \Yahoo\Model\BiddingStrategyServiceSelector | 

try {
    $result = $apiInstance->biddingStrategyServiceGetPost($biddingStrategyServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **biddingStrategyServiceSelector** | [**\Yahoo\Model\BiddingStrategyServiceSelector**](../Model/BiddingStrategyServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\BiddingStrategyServiceGetResponse**](../Model/BiddingStrategyServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## biddingStrategyServiceRemovePost

> \Yahoo\Model\BiddingStrategyServiceMutateResponse biddingStrategyServiceRemovePost($biddingStrategyServiceOperation)



<div lang=\"ja\">自動入札設定を削除します。</div><div lang=\"en\">Remove the auto bidding setting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$biddingStrategyServiceOperation = new \Yahoo\Model\BiddingStrategyServiceOperation(); // \Yahoo\Model\BiddingStrategyServiceOperation | 

try {
    $result = $apiInstance->biddingStrategyServiceRemovePost($biddingStrategyServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **biddingStrategyServiceOperation** | [**\Yahoo\Model\BiddingStrategyServiceOperation**](../Model/BiddingStrategyServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\BiddingStrategyServiceMutateResponse**](../Model/BiddingStrategyServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## biddingStrategyServiceSetPost

> \Yahoo\Model\BiddingStrategyServiceMutateResponse biddingStrategyServiceSetPost($biddingStrategyServiceOperation)



<div lang=\"ja\">自動入札設定を更新します。</div><div lang=\"en\">Updates an auto bidding.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$biddingStrategyServiceOperation = new \Yahoo\Model\BiddingStrategyServiceOperation(); // \Yahoo\Model\BiddingStrategyServiceOperation | 

try {
    $result = $apiInstance->biddingStrategyServiceSetPost($biddingStrategyServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **biddingStrategyServiceOperation** | [**\Yahoo\Model\BiddingStrategyServiceOperation**](../Model/BiddingStrategyServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\BiddingStrategyServiceMutateResponse**](../Model/BiddingStrategyServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

