# Yahoo\BalanceServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**balanceServiceGetPost**](BalanceServiceApi.md#balanceServiceGetPost) | **POST** /BalanceService/get | 



## balanceServiceGetPost

> \Yahoo\Model\BalanceServiceGetResponse balanceServiceGetPost($balanceServiceSelector)



<div lang=\"ja\">選択したアカウント残高に関する情報を取得します。</div><div lang=\"en\">Returns account balance.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\BalanceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balanceServiceSelector = new \Yahoo\Model\BalanceServiceSelector(); // \Yahoo\Model\BalanceServiceSelector | 

try {
    $result = $apiInstance->balanceServiceGetPost($balanceServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceServiceApi->balanceServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balanceServiceSelector** | [**\Yahoo\Model\BalanceServiceSelector**](../Model/BalanceServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\BalanceServiceGetResponse**](../Model/BalanceServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

