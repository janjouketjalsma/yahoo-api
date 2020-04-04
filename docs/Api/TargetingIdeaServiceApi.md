# Yahoo\TargetingIdeaServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**targetingIdeaServiceGetPost**](TargetingIdeaServiceApi.md#targetingIdeaServiceGetPost) | **POST** /TargetingIdeaService/get | 



## targetingIdeaServiceGetPost

> \Yahoo\Model\TargetingIdeaServiceGetResponse targetingIdeaServiceGetPost($targetingIdeaServiceSelector)



<div lang=\"ja\">指定された情報を元に新しいキーワード候補を提案するサービスです。</div><div lang=\"en\">Suggests related keywords based on the specified information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\TargetingIdeaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$targetingIdeaServiceSelector = new \Yahoo\Model\TargetingIdeaServiceSelector(); // \Yahoo\Model\TargetingIdeaServiceSelector | 

try {
    $result = $apiInstance->targetingIdeaServiceGetPost($targetingIdeaServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetingIdeaServiceApi->targetingIdeaServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetingIdeaServiceSelector** | [**\Yahoo\Model\TargetingIdeaServiceSelector**](../Model/TargetingIdeaServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\TargetingIdeaServiceGetResponse**](../Model/TargetingIdeaServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

