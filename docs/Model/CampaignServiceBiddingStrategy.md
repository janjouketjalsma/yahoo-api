# # CampaignServiceBiddingStrategy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**biddingScheme** | [**\Yahoo\Model\CampaignServiceBiddingScheme**](CampaignServiceBiddingScheme.md) |  | [optional] 
**biddingStrategyId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札IDです。&lt;br&gt;ADD時、標準入札設定の場合、このフィールドは設定不可となり、ポートフォリオ入札設定の場合、必須となります。また、biddingSchemeと同時に設定することはできません。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Auto Bidding ID.&lt;br&gt;This field cannot be specified when Standard bidding is setting, and is required when Portfolio bidding is setting in ADD operation. It cannot be specified at the same times as biddingScheme. &lt;/div&gt; | [optional] 
**biddingStrategyName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札名です。&lt;br&gt;ADD時、このフィールドは無視されます。&lt;br&gt;※50文字以内になります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Auto Bidding name.&lt;br&gt;This field will be ignored in ADD operation. &lt;br&gt;* Up to 50 characters.&lt;/div&gt; | [optional] 
**biddingStrategySource** | [**\Yahoo\Model\CampaignServiceBiddingStrategySource**](CampaignServiceBiddingStrategySource.md) |  | [optional] 
**biddingStrategyType** | [**\Yahoo\Model\CampaignServiceBiddingStrategyType**](CampaignServiceBiddingStrategyType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


