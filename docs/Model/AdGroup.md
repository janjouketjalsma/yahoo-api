# # AdGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**adGroupAdRotationMode** | [**\Yahoo\Model\AdGroupServiceAdGroupAdRotationMode**](AdGroupServiceAdGroupAdRotationMode.md) |  | [optional] 
**adGroupId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループIDです。&lt;br&gt;このフィールドは、ADD時は無視され、SETおよびREMOVE時は必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad group ID.&lt;br&gt;This field will be ignored in ADD operation, and will be required in SET and REMOVE operation.&lt;/div&gt; | [optional] 
**adGroupName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループ名です。&lt;br&gt;このフィールドは、ADD時は必須となり、SET時は省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad Group name.&lt;br&gt;This field is required in ADD operation, and will be optional in SET operation.&lt;/div&gt; | [optional] 
**adGroupTrackId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキング用広告グループIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad Group ID for tracking.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**bid** | [**\Yahoo\Model\AdGroupServiceBid**](AdGroupServiceBid.md) |  | [optional] 
**campaignId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンIDです。&lt;br&gt;このフィールドは、いずれの場合でも必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID.&lt;br&gt;This field is required in any cases.&lt;/div&gt; | [optional] 
**campaignName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーン名です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign name.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**campaignTrackId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキング用キャンペーンIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID for tracking.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**customParameters** | [**\Yahoo\Model\AdGroupServiceCustomParameters**](AdGroupServiceCustomParameters.md) |  | [optional] 
**labels** | [**\Yahoo\Model\AdGroupServiceLabel[]**](AdGroupServiceLabel.md) |  | [optional] 
**settings** | [**\Yahoo\Model\AdGroupServiceSettings**](AdGroupServiceSettings.md) |  | [optional] 
**trackingUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキングURLです。&lt;br&gt;このフィールドは、省略可能となります。&lt;br&gt;※キャンペーンがアプリキャンペーンでAndroidの場合、設定はできません。&lt;br&gt;※SET時、こちらが審査中の場合、編集はできません。また、変更がない場合、審査対象とはなりません。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking URL.&lt;br&gt;This field is optional.&lt;br&gt;*Cannot set for a Mobile App campaign for Android OS.&lt;br&gt;*In SET operation, cannot update it when this field is in editorial review. In addition, if there is no change, it will not to be reviewed.&lt;/div&gt; | [optional] 
**urlReviewData** | [**\Yahoo\Model\AdGroupServiceUrlReviewData**](AdGroupServiceUrlReviewData.md) |  | [optional] 
**userStatus** | [**\Yahoo\Model\AdGroupServiceUserStatus**](AdGroupServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


