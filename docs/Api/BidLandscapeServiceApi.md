# Yahoo\BidLandscapeServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bidLandscapeServiceGetPost**](BidLandscapeServiceApi.md#bidLandscapeServiceGetPost) | **POST** /BidLandscapeService/get | 



## bidLandscapeServiceGetPost

> \Yahoo\Model\BidLandscapeServiceGetResponse bidLandscapeServiceGetPost($bidLandscapeServiceSelector)



<div lang=\"ja\">入札単価を変更したときのインプレッションやクリックの変化を予測します。<br>一度に指定できるクライテリアは最大100個です。</div><div lang=\"en\">Estimate the change of an impression and a click when a bid price is changed. <br>The maximum value of the selector criteria is 100.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\BidLandscapeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bidLandscapeServiceSelector = new \Yahoo\Model\BidLandscapeServiceSelector(); // \Yahoo\Model\BidLandscapeServiceSelector | 

try {
    $result = $apiInstance->bidLandscapeServiceGetPost($bidLandscapeServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidLandscapeServiceApi->bidLandscapeServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bidLandscapeServiceSelector** | [**\Yahoo\Model\BidLandscapeServiceSelector**](../Model/BidLandscapeServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\BidLandscapeServiceGetResponse**](../Model/BidLandscapeServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

