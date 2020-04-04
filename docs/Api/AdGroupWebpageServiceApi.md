# Yahoo\AdGroupWebpageServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupWebpageServiceAddPost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceAddPost) | **POST** /AdGroupWebpageService/add | 
[**adGroupWebpageServiceGetPost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceGetPost) | **POST** /AdGroupWebpageService/get | 
[**adGroupWebpageServiceRemovePost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceRemovePost) | **POST** /AdGroupWebpageService/remove | 
[**adGroupWebpageServiceSetPost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceSetPost) | **POST** /AdGroupWebpageService/set | 



## adGroupWebpageServiceAddPost

> \Yahoo\Model\AdGroupWebpageServiceMutateResponse adGroupWebpageServiceAddPost($adGroupWebpageServiceOperation)



<div lang=\"ja\">広告グループにPageFeedItemを配信、又は、除外として設定します。<br>※1リクエストで異なるキャンペーン配下の広告グループに対してWebページ情報の設定が可能です。<br>※1リクエスト内で同一のadGroupIdに同一組み合わせのWebpageParameterを設定できません。</div><div lang=\"en\">Set allowed or excluded settings of PageFeedItem for ad group. <br>∗ With one request, web page information can be set for ad group under different campaign. <br>∗ Within one request, you can not set the same combination WebpageParameter to the same adGroupId.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupWebpageServiceOperation = new \Yahoo\Model\AdGroupWebpageServiceOperation(); // \Yahoo\Model\AdGroupWebpageServiceOperation | 

try {
    $result = $apiInstance->adGroupWebpageServiceAddPost($adGroupWebpageServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupWebpageServiceOperation** | [**\Yahoo\Model\AdGroupWebpageServiceOperation**](../Model/AdGroupWebpageServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupWebpageServiceMutateResponse**](../Model/AdGroupWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupWebpageServiceGetPost

> \Yahoo\Model\AdGroupWebpageServiceGetResponse adGroupWebpageServiceGetPost($adGroupWebpageServiceSelector)



<div lang=\"ja\">広告グループに設定されているPageFeedItemの配信/除外設定を取得します。</div><div lang=\"en\">Get allowed or excluded settings of PageFeedItem setting in ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupWebpageServiceSelector = new \Yahoo\Model\AdGroupWebpageServiceSelector(); // \Yahoo\Model\AdGroupWebpageServiceSelector | 

try {
    $result = $apiInstance->adGroupWebpageServiceGetPost($adGroupWebpageServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupWebpageServiceSelector** | [**\Yahoo\Model\AdGroupWebpageServiceSelector**](../Model/AdGroupWebpageServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupWebpageServiceGetResponse**](../Model/AdGroupWebpageServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupWebpageServiceRemovePost

> \Yahoo\Model\AdGroupWebpageServiceMutateResponse adGroupWebpageServiceRemovePost($adGroupWebpageServiceOperation)



<div lang=\"ja\">広告グループに関連付けしているPageFeedItemを解除します。</div><div lang=\"en\">Remove PageFeedItem associated with ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupWebpageServiceOperation = new \Yahoo\Model\AdGroupWebpageServiceOperation(); // \Yahoo\Model\AdGroupWebpageServiceOperation | 

try {
    $result = $apiInstance->adGroupWebpageServiceRemovePost($adGroupWebpageServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupWebpageServiceOperation** | [**\Yahoo\Model\AdGroupWebpageServiceOperation**](../Model/AdGroupWebpageServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupWebpageServiceMutateResponse**](../Model/AdGroupWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupWebpageServiceSetPost

> \Yahoo\Model\AdGroupWebpageServiceMutateResponse adGroupWebpageServiceSetPost($adGroupWebpageServiceOperation)



<div lang=\"ja\">広告グループにPageFeedItemを配信、又は、除外として設定します。<br>※1リクエストで異なるキャンペーン配下の広告グループに対してWebページ情報の設定が可能です。<br>※1リクエスト内で同一のadGroupIdに同一組み合わせのWebpageParameterを設定できません。</div><div lang=\"en\">Set allowed or excluded settings of PageFeedItem for ad group. <br>∗ With one request, web page information can be set for ad group under different campaign. <br>∗ Within one request, you can not set the same combination WebpageParameter to the same adGroupId.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupWebpageServiceOperation = new \Yahoo\Model\AdGroupWebpageServiceOperation(); // \Yahoo\Model\AdGroupWebpageServiceOperation | 

try {
    $result = $apiInstance->adGroupWebpageServiceSetPost($adGroupWebpageServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adGroupWebpageServiceOperation** | [**\Yahoo\Model\AdGroupWebpageServiceOperation**](../Model/AdGroupWebpageServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AdGroupWebpageServiceMutateResponse**](../Model/AdGroupWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

