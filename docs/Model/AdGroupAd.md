# # AdGroupAd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**ad** | [**\Yahoo\Model\AdGroupAdServiceAd**](AdGroupAdServiceAd.md) |  | [optional] 
**adGroupId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループIDです。&lt;br&gt;このフィールドは、いずれの場合でも必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad group ID.&lt;br&gt;This field is required in any cases.&lt;/div&gt; | [optional] 
**adGroupName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループ名です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad group name.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**adGroupTrackId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキング用広告グループIDです。&lt;br&gt;のフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad group ID for tracking.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**adId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告IDです。&lt;br&gt;SETおよびREMOVE時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad ID.&lt;br&gt;This field is required in SET and REMOVE operation.&lt;/div&gt; | [optional] 
**adName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告名です。&lt;br&gt;このフィールドは、ADD時は必須となり、SET時は省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad name.&lt;br&gt;This field is required in ADD operation, and will be optional in SET operation.&lt;/div&gt; | [optional] 
**adTrackId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキング用広告IDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad ID for tracking.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**approvalStatus** | [**\Yahoo\Model\AdGroupAdServiceApprovalStatus**](AdGroupAdServiceApprovalStatus.md) |  | [optional] 
**campaignId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンIDです。&lt;br&gt;このフィールドは、いずれの場合でも必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID.&lt;br&gt;This field is required in any cases.&lt;/div&gt; | [optional] 
**campaignName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーン名です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign name.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**campaignTrackId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキング用キャンペーンIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID for tracking.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**disapprovalReasonCodes** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;審査否認の理由コードです。&lt;br&gt;(コード詳細は、DictionaryServiceのgetDisapprovalReasonのレスポンスを参照)&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Code of Disapproval reason.&lt;br&gt;(Refer to DictionaryService getDisapprovalReason response for details) &lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**feedId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;フィードIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed ID.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**invalidedTrademarks** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;制限された商標です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Invalided trademarks.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**labels** | [**\Yahoo\Model\AdGroupAdServiceLabel[]**](AdGroupAdServiceLabel.md) |  | [optional] 
**trademarkStatus** | [**\Yahoo\Model\AdGroupAdServiceTrademarkStatus**](AdGroupAdServiceTrademarkStatus.md) |  | [optional] 
**userStatus** | [**\Yahoo\Model\AdGroupAdServiceUserStatus**](AdGroupAdServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


