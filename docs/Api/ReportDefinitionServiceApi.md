# Yahoo\ReportDefinitionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportDefinitionServiceAddPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceAddPost) | **POST** /ReportDefinitionService/add | 
[**reportDefinitionServiceDownloadPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceDownloadPost) | **POST** /ReportDefinitionService/download | 
[**reportDefinitionServiceGetPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceGetPost) | **POST** /ReportDefinitionService/get | 
[**reportDefinitionServiceGetReportFieldsPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceGetReportFieldsPost) | **POST** /ReportDefinitionService/getReportFields | 
[**reportDefinitionServiceRemovePost**](ReportDefinitionServiceApi.md#reportDefinitionServiceRemovePost) | **POST** /ReportDefinitionService/remove | 



## reportDefinitionServiceAddPost

> \Yahoo\Model\ReportDefinitionServiceMutateResponse reportDefinitionServiceAddPost($reportDefinitionServiceOperation)



<div lang=\"ja\">レポート定義を追加します。</div><div lang=\"en\">Adds report definitions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportDefinitionServiceOperation = new \Yahoo\Model\ReportDefinitionServiceOperation(); // \Yahoo\Model\ReportDefinitionServiceOperation | 

try {
    $result = $apiInstance->reportDefinitionServiceAddPost($reportDefinitionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionServiceOperation** | [**\Yahoo\Model\ReportDefinitionServiceOperation**](../Model/ReportDefinitionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\ReportDefinitionServiceMutateResponse**](../Model/ReportDefinitionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportDefinitionServiceDownloadPost

> \SplFileObject reportDefinitionServiceDownloadPost($reportDefinitionServiceDownloadSelector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportDefinitionServiceDownloadSelector = new \Yahoo\Model\ReportDefinitionServiceDownloadSelector(); // \Yahoo\Model\ReportDefinitionServiceDownloadSelector | 

try {
    $result = $apiInstance->reportDefinitionServiceDownloadPost($reportDefinitionServiceDownloadSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionServiceDownloadSelector** | [**\Yahoo\Model\ReportDefinitionServiceDownloadSelector**](../Model/ReportDefinitionServiceDownloadSelector.md)|  | [optional]

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


## reportDefinitionServiceGetPost

> \Yahoo\Model\ReportDefinitionServiceGetResponse reportDefinitionServiceGetPost($reportDefinitionServiceSelector)



<div lang=\"ja\">レポート定義に関する情報を取得します。</div><div lang=\"en\">Get information related to report definition.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportDefinitionServiceSelector = new \Yahoo\Model\ReportDefinitionServiceSelector(); // \Yahoo\Model\ReportDefinitionServiceSelector | 

try {
    $result = $apiInstance->reportDefinitionServiceGetPost($reportDefinitionServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionServiceSelector** | [**\Yahoo\Model\ReportDefinitionServiceSelector**](../Model/ReportDefinitionServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\ReportDefinitionServiceGetResponse**](../Model/ReportDefinitionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportDefinitionServiceGetReportFieldsPost

> \Yahoo\Model\ReportDefinitionServiceGetReportFieldsResponse reportDefinitionServiceGetReportFieldsPost($reportDefinitionServiceGetReportFields)



<div lang=\"ja\">レポートタイプに対して使用可能なレポートのフィールドを返します。</div><div lang=\"en\">Returns the available report fields for a given report type.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportDefinitionServiceGetReportFields = new \Yahoo\Model\ReportDefinitionServiceGetReportFields(); // \Yahoo\Model\ReportDefinitionServiceGetReportFields | 

try {
    $result = $apiInstance->reportDefinitionServiceGetReportFieldsPost($reportDefinitionServiceGetReportFields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceGetReportFieldsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionServiceGetReportFields** | [**\Yahoo\Model\ReportDefinitionServiceGetReportFields**](../Model/ReportDefinitionServiceGetReportFields.md)|  | [optional]

### Return type

[**\Yahoo\Model\ReportDefinitionServiceGetReportFieldsResponse**](../Model/ReportDefinitionServiceGetReportFieldsResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportDefinitionServiceRemovePost

> \Yahoo\Model\ReportDefinitionServiceMutateResponse reportDefinitionServiceRemovePost($reportDefinitionServiceOperation)



<div lang=\"ja\">レポート定義を削除します。</div><div lang=\"en\">Removes report definitions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportDefinitionServiceOperation = new \Yahoo\Model\ReportDefinitionServiceOperation(); // \Yahoo\Model\ReportDefinitionServiceOperation | 

try {
    $result = $apiInstance->reportDefinitionServiceRemovePost($reportDefinitionServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportDefinitionServiceOperation** | [**\Yahoo\Model\ReportDefinitionServiceOperation**](../Model/ReportDefinitionServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\ReportDefinitionServiceMutateResponse**](../Model/ReportDefinitionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

