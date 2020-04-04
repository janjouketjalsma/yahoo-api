# Yahoo\CampaignExportServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignExportServiceAddJobPost**](CampaignExportServiceApi.md#campaignExportServiceAddJobPost) | **POST** /CampaignExportService/addJob | 
[**campaignExportServiceDownloadPost**](CampaignExportServiceApi.md#campaignExportServiceDownloadPost) | **POST** /CampaignExportService/download | 
[**campaignExportServiceGetExportFieldsGet**](CampaignExportServiceApi.md#campaignExportServiceGetExportFieldsGet) | **GET** /CampaignExportService/getExportFields | 
[**campaignExportServiceGetPost**](CampaignExportServiceApi.md#campaignExportServiceGetPost) | **POST** /CampaignExportService/get | 



## campaignExportServiceAddJobPost

> \Yahoo\Model\CampaignExportServiceAddJobResponse campaignExportServiceAddJobPost($campaignExportServiceJobOperation)



<div lang=\"ja\">エクスポートの登録を実施します。</div><div lang=\"en\">Creates job to register for export.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignExportServiceJobOperation = new \Yahoo\Model\CampaignExportServiceJobOperation(); // \Yahoo\Model\CampaignExportServiceJobOperation | 

try {
    $result = $apiInstance->campaignExportServiceAddJobPost($campaignExportServiceJobOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceAddJobPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignExportServiceJobOperation** | [**\Yahoo\Model\CampaignExportServiceJobOperation**](../Model/CampaignExportServiceJobOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignExportServiceAddJobResponse**](../Model/CampaignExportServiceAddJobResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignExportServiceDownloadPost

> \SplFileObject campaignExportServiceDownloadPost($campaignExportServiceDownloadSelector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignExportServiceDownloadSelector = new \Yahoo\Model\CampaignExportServiceDownloadSelector(); // \Yahoo\Model\CampaignExportServiceDownloadSelector | 

try {
    $result = $apiInstance->campaignExportServiceDownloadPost($campaignExportServiceDownloadSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignExportServiceDownloadSelector** | [**\Yahoo\Model\CampaignExportServiceDownloadSelector**](../Model/CampaignExportServiceDownloadSelector.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignExportServiceGetExportFieldsGet

> \Yahoo\Model\CampaignExportServiceGetExportFieldsResponse campaignExportServiceGetExportFieldsGet()



<div lang=\"ja\">エクスポートできるフィールドを照会します。</div><div lang=\"en\">Obtains the fields which can export.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->campaignExportServiceGetExportFieldsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceGetExportFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Yahoo\Model\CampaignExportServiceGetExportFieldsResponse**](../Model/CampaignExportServiceGetExportFieldsResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignExportServiceGetPost

> \Yahoo\Model\CampaignExportServiceGetResponse campaignExportServiceGetPost($campaignExportServiceSelector)



<div lang=\"ja\">登録したジョブに関するステータス情報を取得します。</div><div lang=\"en\">Obtains the status of registered jobs.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignExportServiceSelector = new \Yahoo\Model\CampaignExportServiceSelector(); // \Yahoo\Model\CampaignExportServiceSelector | 

try {
    $result = $apiInstance->campaignExportServiceGetPost($campaignExportServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignExportServiceSelector** | [**\Yahoo\Model\CampaignExportServiceSelector**](../Model/CampaignExportServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\CampaignExportServiceGetResponse**](../Model/CampaignExportServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

