# # PageFeedItemServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID&lt;/div&gt; | 
**approvalStatuses** | [**\Yahoo\Model\PageFeedItemServiceApprovalStatus[]**](PageFeedItemServiceApprovalStatus.md) |  | [optional] 
**feedIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;フィードID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed ID&lt;/div&gt; | 
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**pageFeedCustomLabel** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;カスタムラベル&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Custom label&lt;/div&gt; | [optional] 
**pageFeedUrl** | [**\Yahoo\Model\PageFeedItemServicePageFeedUrl[]**](PageFeedItemServicePageFeedUrl.md) |  | [optional] 
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


