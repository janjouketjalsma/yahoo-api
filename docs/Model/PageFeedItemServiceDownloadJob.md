# # PageFeedItemServiceDownloadJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;このフィールドは必須です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID. &lt;br&gt;This field is required.&lt;/div&gt; | [optional] 
**bulkEncoding** | [**\Yahoo\Model\PageFeedItemServiceBulkEncoding**](PageFeedItemServiceBulkEncoding.md) |  | [optional] 
**bulkLang** | [**\Yahoo\Model\PageFeedItemServiceBulkLang**](PageFeedItemServiceBulkLang.md) |  | [optional] 
**bulkOutput** | [**\Yahoo\Model\PageFeedItemServiceBulkOutput**](PageFeedItemServiceBulkOutput.md) |  | [optional] 
**downloadJobStatus** | [**\Yahoo\Model\PageFeedItemServiceDownloadJobStatus**](PageFeedItemServiceDownloadJobStatus.md) |  | [optional] 
**endDate** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ジョブの終了日です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;br&gt;形式：yyyyMMddHHmmss&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;End date of job. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input.  &lt;br&gt;Format:yyyyMMddHHmmss&lt;/div&gt; | [optional] 
**feedIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;フィードIDです。&lt;br&gt;このフィールドは必須です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed ID. &lt;br&gt; This field is required.&lt;/div&gt; | [optional] 
**jobId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ジョブIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Job ID. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**progress** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ジョブの進捗状況です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Progress of page feed item job. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**startDate** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ジョブの開始日です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;br&gt;形式：yyyyMMddHHmmss &lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Start date of job. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;br&gt;Format:yyyyMMddHHmmss&lt;/div&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


