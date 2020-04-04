# # CampaignCriterion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;ADD時およびREMOVE時、このフィールドは必須です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;This field is required in ADD and REMOVE operation. &lt;/div&gt; | [optional] 
**campaignId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンIDです。&lt;br&gt;ADD時およびREMOVE時、このフィールドは必須です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID.&lt;br&gt;This field is required in ADD and REMOVE operation. &lt;/div&gt; | [optional] 
**campaignName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーン名です。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign name.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**criterion** | [**\Yahoo\Model\CampaignCriterionServiceCriterion**](CampaignCriterionServiceCriterion.md) |  | [optional] 
**use** | [**\Yahoo\Model\CampaignCriterionServiceUse**](CampaignCriterionServiceUse.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


