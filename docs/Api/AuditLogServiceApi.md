# Yahoo\AuditLogServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditLogServiceAddJobPost**](AuditLogServiceApi.md#auditLogServiceAddJobPost) | **POST** /AuditLogService/addJob | 
[**auditLogServiceDownloadPost**](AuditLogServiceApi.md#auditLogServiceDownloadPost) | **POST** /AuditLogService/download | 
[**auditLogServiceGetPost**](AuditLogServiceApi.md#auditLogServiceGetPost) | **POST** /AuditLogService/get | 



## auditLogServiceAddJobPost

> \Yahoo\Model\AuditLogServiceAddJobResponse auditLogServiceAddJobPost($auditLogServiceOperation)



<div lang=\"ja\">操作履歴ファイルをダウンロードするためのジョブを登録します。</div><div lang=\"en\">Add a job to download operation history data file.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auditLogServiceOperation = new \Yahoo\Model\AuditLogServiceOperation(); // \Yahoo\Model\AuditLogServiceOperation | 

try {
    $result = $apiInstance->auditLogServiceAddJobPost($auditLogServiceOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceAddJobPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditLogServiceOperation** | [**\Yahoo\Model\AuditLogServiceOperation**](../Model/AuditLogServiceOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\AuditLogServiceAddJobResponse**](../Model/AuditLogServiceAddJobResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## auditLogServiceDownloadPost

> \SplFileObject auditLogServiceDownloadPost($auditLogServiceDownloadSelector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auditLogServiceDownloadSelector = new \Yahoo\Model\AuditLogServiceDownloadSelector(); // \Yahoo\Model\AuditLogServiceDownloadSelector | 

try {
    $result = $apiInstance->auditLogServiceDownloadPost($auditLogServiceDownloadSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditLogServiceDownloadSelector** | [**\Yahoo\Model\AuditLogServiceDownloadSelector**](../Model/AuditLogServiceDownloadSelector.md)|  | [optional]

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


## auditLogServiceGetPost

> \Yahoo\Model\AuditLogServiceGetResponse auditLogServiceGetPost($auditLogServiceSelector)



<div lang=\"ja\">操作履歴のダウンロードURLを取得します。</div><div lang=\"en\">Get the download URL for operation history data.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auditLogServiceSelector = new \Yahoo\Model\AuditLogServiceSelector(); // \Yahoo\Model\AuditLogServiceSelector | 

try {
    $result = $apiInstance->auditLogServiceGetPost($auditLogServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditLogServiceSelector** | [**\Yahoo\Model\AuditLogServiceSelector**](../Model/AuditLogServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\AuditLogServiceGetResponse**](../Model/AuditLogServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

