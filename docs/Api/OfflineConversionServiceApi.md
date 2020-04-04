# Yahoo\OfflineConversionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**offlineConversionServiceDownloadErrorFilePost**](OfflineConversionServiceApi.md#offlineConversionServiceDownloadErrorFilePost) | **POST** /OfflineConversionService/downloadErrorFile | 
[**offlineConversionServiceDownloadPost**](OfflineConversionServiceApi.md#offlineConversionServiceDownloadPost) | **POST** /OfflineConversionService/download | 
[**offlineConversionServiceGetPost**](OfflineConversionServiceApi.md#offlineConversionServiceGetPost) | **POST** /OfflineConversionService/get | 
[**offlineConversionServiceUploadPost**](OfflineConversionServiceApi.md#offlineConversionServiceUploadPost) | **POST** /OfflineConversionService/upload | 



## offlineConversionServiceDownloadErrorFilePost

> \SplFileObject offlineConversionServiceDownloadErrorFilePost($offlineConversionServiceDownloadSelector)



<div lang=\"ja\">エラーファイルのダウンロードを実施します。</div> <div lang=\"en\">Download error files.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\OfflineConversionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offlineConversionServiceDownloadSelector = new \Yahoo\Model\OfflineConversionServiceDownloadSelector(); // \Yahoo\Model\OfflineConversionServiceDownloadSelector | 

try {
    $result = $apiInstance->offlineConversionServiceDownloadErrorFilePost($offlineConversionServiceDownloadSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineConversionServiceApi->offlineConversionServiceDownloadErrorFilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offlineConversionServiceDownloadSelector** | [**\Yahoo\Model\OfflineConversionServiceDownloadSelector**](../Model/OfflineConversionServiceDownloadSelector.md)|  | [optional]

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


## offlineConversionServiceDownloadPost

> \SplFileObject offlineConversionServiceDownloadPost($offlineConversionServiceDownloadSelector)



<div lang=\"ja\">ファイルの一括ダウンロードを実施します。</div> <div lang=\"en\">Download all files.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\OfflineConversionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offlineConversionServiceDownloadSelector = new \Yahoo\Model\OfflineConversionServiceDownloadSelector(); // \Yahoo\Model\OfflineConversionServiceDownloadSelector | 

try {
    $result = $apiInstance->offlineConversionServiceDownloadPost($offlineConversionServiceDownloadSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineConversionServiceApi->offlineConversionServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offlineConversionServiceDownloadSelector** | [**\Yahoo\Model\OfflineConversionServiceDownloadSelector**](../Model/OfflineConversionServiceDownloadSelector.md)|  | [optional]

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


## offlineConversionServiceGetPost

> \Yahoo\Model\OfflineConversionServiceGetResponse offlineConversionServiceGetPost($offlineConversionServiceSelector)



<div lang=\"ja\">登録したオフラインコンバージョンデータの情報を取得します。</div><div lang=\"en\">Get registered offline conversion data information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\OfflineConversionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offlineConversionServiceSelector = new \Yahoo\Model\OfflineConversionServiceSelector(); // \Yahoo\Model\OfflineConversionServiceSelector | 

try {
    $result = $apiInstance->offlineConversionServiceGetPost($offlineConversionServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineConversionServiceApi->offlineConversionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offlineConversionServiceSelector** | [**\Yahoo\Model\OfflineConversionServiceSelector**](../Model/OfflineConversionServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\OfflineConversionServiceGetResponse**](../Model/OfflineConversionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offlineConversionServiceUploadPost

> \Yahoo\Model\OfflineConversionServiceUploadResponse offlineConversionServiceUploadPost($accountId, $uploadType, $uploadFileName, $file)



<div lang=\"ja\">オフラインコンバージョンデータのアップロード処理を実施します。</div> <div lang=\"en\">Execute upload offline conversion data.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\OfflineConversionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
$uploadType = 'uploadType_example'; // string | <div lang=\"ja\">OfflineConversionUploadTypeは、アップロードする方法の種類を表します。</div><div lang=\"en\">OfflineConversionUploadType describes kind of upload method.</div><hr> <code>NEW</code> - <div lang=\"ja\">新規ファイルのアップロードです。</div><div lang=\"en\">New upload.</div> <code>ADJUSTMENT</code> - <div lang=\"ja\">調整用ファイルのアップロードです。</div><div lang=\"en\">Adjustment upload.</div>
$uploadFileName = 'uploadFileName_example'; // string | <div lang=\"ja\">アップロードファイル名です。</div> <div lang=\"en\">Upload file name.</div>
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->offlineConversionServiceUploadPost($accountId, $uploadType, $uploadFileName, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineConversionServiceApi->offlineConversionServiceUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
 **uploadType** | **string**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;OfflineConversionUploadTypeは、アップロードする方法の種類を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;OfflineConversionUploadType describes kind of upload method.&lt;/div&gt;&lt;hr&gt; &lt;code&gt;NEW&lt;/code&gt; - &lt;div lang&#x3D;\&quot;ja\&quot;&gt;新規ファイルのアップロードです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;New upload.&lt;/div&gt; &lt;code&gt;ADJUSTMENT&lt;/code&gt; - &lt;div lang&#x3D;\&quot;ja\&quot;&gt;調整用ファイルのアップロードです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Adjustment upload.&lt;/div&gt; |
 **uploadFileName** | **string**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アップロードファイル名です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Upload file name.&lt;/div&gt; |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\Yahoo\Model\OfflineConversionServiceUploadResponse**](../Model/OfflineConversionServiceUploadResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

