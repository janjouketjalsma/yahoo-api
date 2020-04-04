# Yahoo\PageFeedItemServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pageFeedItemServiceAddDownloadJobPost**](PageFeedItemServiceApi.md#pageFeedItemServiceAddDownloadJobPost) | **POST** /PageFeedItemService/addDownloadJob | 
[**pageFeedItemServiceDownloadErrorFilePost**](PageFeedItemServiceApi.md#pageFeedItemServiceDownloadErrorFilePost) | **POST** /PageFeedItemService/downloadErrorFile | 
[**pageFeedItemServiceDownloadPost**](PageFeedItemServiceApi.md#pageFeedItemServiceDownloadPost) | **POST** /PageFeedItemService/download | 
[**pageFeedItemServiceGetJobStatusPost**](PageFeedItemServiceApi.md#pageFeedItemServiceGetJobStatusPost) | **POST** /PageFeedItemService/getJobStatus | 
[**pageFeedItemServiceGetPost**](PageFeedItemServiceApi.md#pageFeedItemServiceGetPost) | **POST** /PageFeedItemService/get | 
[**pageFeedItemServiceGetReviewSummaryPost**](PageFeedItemServiceApi.md#pageFeedItemServiceGetReviewSummaryPost) | **POST** /PageFeedItemService/getReviewSummary | 
[**pageFeedItemServiceUploadPost**](PageFeedItemServiceApi.md#pageFeedItemServiceUploadPost) | **POST** /PageFeedItemService/upload | 



## pageFeedItemServiceAddDownloadJobPost

> \Yahoo\Model\PageFeedItemServiceAddDownloadJobResponse pageFeedItemServiceAddDownloadJobPost($pageFeedItemServiceDownloadJobOperation)



<div lang=\"ja\">登録されているページフィードアイテムを一括でダウンロードするためジョブを登録します。</div><div lang=\"en\">Registers job to bulk download registered page feed item.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageFeedItemServiceDownloadJobOperation = new \Yahoo\Model\PageFeedItemServiceDownloadJobOperation(); // \Yahoo\Model\PageFeedItemServiceDownloadJobOperation | 

try {
    $result = $apiInstance->pageFeedItemServiceAddDownloadJobPost($pageFeedItemServiceDownloadJobOperation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceAddDownloadJobPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageFeedItemServiceDownloadJobOperation** | [**\Yahoo\Model\PageFeedItemServiceDownloadJobOperation**](../Model/PageFeedItemServiceDownloadJobOperation.md)|  | [optional]

### Return type

[**\Yahoo\Model\PageFeedItemServiceAddDownloadJobResponse**](../Model/PageFeedItemServiceAddDownloadJobResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceDownloadErrorFilePost

> \SplFileObject pageFeedItemServiceDownloadErrorFilePost($pageFeedItemServiceDownloadSelector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageFeedItemServiceDownloadSelector = new \Yahoo\Model\PageFeedItemServiceDownloadSelector(); // \Yahoo\Model\PageFeedItemServiceDownloadSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceDownloadErrorFilePost($pageFeedItemServiceDownloadSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceDownloadErrorFilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageFeedItemServiceDownloadSelector** | [**\Yahoo\Model\PageFeedItemServiceDownloadSelector**](../Model/PageFeedItemServiceDownloadSelector.md)|  | [optional]

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


## pageFeedItemServiceDownloadPost

> \SplFileObject pageFeedItemServiceDownloadPost($pageFeedItemServiceDownloadSelector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageFeedItemServiceDownloadSelector = new \Yahoo\Model\PageFeedItemServiceDownloadSelector(); // \Yahoo\Model\PageFeedItemServiceDownloadSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceDownloadPost($pageFeedItemServiceDownloadSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageFeedItemServiceDownloadSelector** | [**\Yahoo\Model\PageFeedItemServiceDownloadSelector**](../Model/PageFeedItemServiceDownloadSelector.md)|  | [optional]

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


## pageFeedItemServiceGetJobStatusPost

> \Yahoo\Model\PageFeedItemServiceGetJobStatusResponse pageFeedItemServiceGetJobStatusPost($pageFeedItemServiceJobStatusSelector)



<div lang=\"ja\">upload、downloadの処理状況を取得します。downloadJobStatusがCOMPLETEDの場合、レスポンスにダウンロードURLが設定されます。</div><div lang=\"en\">Gets processing status about upload or download. If downloadJobStatus is COMPLETED, returns download URL as response.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageFeedItemServiceJobStatusSelector = new \Yahoo\Model\PageFeedItemServiceJobStatusSelector(); // \Yahoo\Model\PageFeedItemServiceJobStatusSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceGetJobStatusPost($pageFeedItemServiceJobStatusSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceGetJobStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageFeedItemServiceJobStatusSelector** | [**\Yahoo\Model\PageFeedItemServiceJobStatusSelector**](../Model/PageFeedItemServiceJobStatusSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\PageFeedItemServiceGetJobStatusResponse**](../Model/PageFeedItemServiceGetJobStatusResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceGetPost

> \Yahoo\Model\PageFeedItemServiceGetResponse pageFeedItemServiceGetPost($pageFeedItemServiceSelector)



<div lang=\"ja\">ページフィードアイテム情報を取得します。</div><div lang=\"en\">Gets information related to page feed item.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageFeedItemServiceSelector = new \Yahoo\Model\PageFeedItemServiceSelector(); // \Yahoo\Model\PageFeedItemServiceSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceGetPost($pageFeedItemServiceSelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageFeedItemServiceSelector** | [**\Yahoo\Model\PageFeedItemServiceSelector**](../Model/PageFeedItemServiceSelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\PageFeedItemServiceGetResponse**](../Model/PageFeedItemServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceGetReviewSummaryPost

> \Yahoo\Model\PageFeedItemServiceGetReviewSummaryResponse pageFeedItemServiceGetReviewSummaryPost($pageFeedItemServiceReviewSummarySelector)



<div lang=\"ja\">登録されているページフィードアイテムの審査成績・状況のサマリーを取得します。</div><div lang=\"en\">Gets registered approval records of page feed item and summary of each status.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageFeedItemServiceReviewSummarySelector = new \Yahoo\Model\PageFeedItemServiceReviewSummarySelector(); // \Yahoo\Model\PageFeedItemServiceReviewSummarySelector | 

try {
    $result = $apiInstance->pageFeedItemServiceGetReviewSummaryPost($pageFeedItemServiceReviewSummarySelector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceGetReviewSummaryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageFeedItemServiceReviewSummarySelector** | [**\Yahoo\Model\PageFeedItemServiceReviewSummarySelector**](../Model/PageFeedItemServiceReviewSummarySelector.md)|  | [optional]

### Return type

[**\Yahoo\Model\PageFeedItemServiceGetReviewSummaryResponse**](../Model/PageFeedItemServiceGetReviewSummaryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceUploadPost

> \Yahoo\Model\PageFeedItemServiceUploadResponse pageFeedItemServiceUploadPost($accountId, $uploadType, $feedId, $file)



<div lang=\"ja\">ページフィードアイテムのアップロード処理を実施します。</div><div lang=\"en\">Executes upload page feed item.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = Yahoo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yahoo\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | <div lang=\"ja\">アカウントIDです。</div><div lang=\"en\">Account ID.</div>
$uploadType = 'uploadType_example'; // string | <div lang=\"ja\">PageFeedItemUploadTypeは、アップロードする方法の種類を表します。</div><div lang=\"en\">PageFeedItemUploadType displays kind of upload method.</div><hr> <code>NEW_OR_REPLACE</code> - <div lang=\"ja\">新規登録または、すべて置き換える場合の設定</div><div lang=\"en\">New registration or replace all.</div> <code>MODIFY</code> - <div lang=\"ja\">既存のページフィードアイテムを更新</div><div lang=\"en\">Modify existing page feed item.</div>
$feedId = 56; // int | <div lang=\"ja\">フィードIDです。</div><div lang=\"en\">Feed ID.</div>
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->pageFeedItemServiceUploadPost($accountId, $uploadType, $feedId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
 **uploadType** | **string**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;PageFeedItemUploadTypeは、アップロードする方法の種類を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;PageFeedItemUploadType displays kind of upload method.&lt;/div&gt;&lt;hr&gt; &lt;code&gt;NEW_OR_REPLACE&lt;/code&gt; - &lt;div lang&#x3D;\&quot;ja\&quot;&gt;新規登録または、すべて置き換える場合の設定&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;New registration or replace all.&lt;/div&gt; &lt;code&gt;MODIFY&lt;/code&gt; - &lt;div lang&#x3D;\&quot;ja\&quot;&gt;既存のページフィードアイテムを更新&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Modify existing page feed item.&lt;/div&gt; |
 **feedId** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;フィードIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed ID.&lt;/div&gt; |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\Yahoo\Model\PageFeedItemServiceUploadResponse**](../Model/PageFeedItemServiceUploadResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

