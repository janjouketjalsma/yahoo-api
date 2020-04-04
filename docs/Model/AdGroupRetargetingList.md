# # AdGroupRetargetingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**adGroupId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループIDです。&lt;br&gt;このフィールドは、いずれの場合でも必須です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad group ID.&lt;br&gt;This field is required in any cases. &lt;/div&gt; | [optional] 
**adGroupName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループ名です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad group name.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**bidMultiplier** | **double** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;MaxCPC上昇値です。&lt;br&gt;このフィールドは省略可能となります。その際、デフォルト設定値は1.00となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum CPC increase value.&lt;br&gt;This field is optional. The default value will be 1.00.&lt;/div&gt; | [optional] 
**campaignId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンIDです。&lt;br&gt;このフィールドは、いずれの場合でも必須です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID.&lt;br&gt;This field is required in any cases. &lt;/div&gt; | [optional] 
**campaignName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーン名です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign name.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**criterionTargetList** | [**\Yahoo\Model\AdGroupRetargetingListServiceCriterionTargetList**](AdGroupRetargetingListServiceCriterionTargetList.md) |  | [optional] 
**excludedType** | [**\Yahoo\Model\AdGroupRetargetingListServiceExcludedType**](AdGroupRetargetingListServiceExcludedType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


