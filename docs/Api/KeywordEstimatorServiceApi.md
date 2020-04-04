# Yahoo\KeywordEstimatorServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordEstimatorServiceGetPost**](KeywordEstimatorServiceApi.md#keywordEstimatorServiceGetPost) | **POST** /KeywordEstimatorService/get | 



## keywordEstimatorServiceGetPost

> \Yahoo\Model\KeywordEstimatorServiceGetResponse keywordEstimatorServiceGetPost($keywordEstimatorServiceSelector)



<div lang=\"ja\">獲得できるトラフィックの見積を取得します。</div><div lang=\"en\">Get traffic estimate.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\KeywordEstimatorServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordEstimatorServiceSelector = new \Yahoo\Model\KeywordEstimatorServiceSelector(); // \Yahoo\Model\KeywordEstimatorServiceSelector | 

try {
    $result = $apiInstance->keywordEstimatorServiceGetPost($keywordEstimatorServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordEstimatorServiceApi->keywordEstimatorServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywordEstimatorServiceSelector** | [**\Yahoo\Model\KeywordEstimatorServiceSelector**](../Model/KeywordEstimatorServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\KeywordEstimatorServiceGetResponse**](../Model/KeywordEstimatorServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

