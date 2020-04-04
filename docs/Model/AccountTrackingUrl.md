# # AccountTrackingUrl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;SET時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;This field is required in SET operation.&lt;/div&gt; | [optional] 
**accountName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウント名です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account name.&lt;/div&gt; | [optional] 
**disapprovalReasonCodes** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;審査否認理由コードです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Code of disapproval reason.&lt;/div&gt; | [optional] 
**disapprovalReviewUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;審査否認されたトラッキングURLです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking URL that has been disapproved.&lt;/div&gt; | [optional] 
**inReviewUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;審査中のトラッキングURLです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking URL that is in review.&lt;/div&gt; | [optional] 
**trackingUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキングURLです。&lt;br&gt;SET時、このフィールドは省略可能となります。&lt;br&gt;※空で設定すると、既存のトラッキングURLは削除されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking URL.&lt;br&gt;this field is optional in SET operation.&lt;br&gt;*When tag is set blank, existing Tracking URL will be deleted.&lt;/div&gt; | [optional] 
**urlApprovalStatus** | [**\Yahoo\Model\AccountTrackingUrlServiceUrlApprovalStatus**](AccountTrackingUrlServiceUrlApprovalStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


