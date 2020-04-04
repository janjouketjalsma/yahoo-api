# # BiddingStrategy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;このフィールドは、いずれの場合でも必須です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;This field is required in any cases. &lt;/div&gt; | [optional] 
**biddingScheme** | [**\Yahoo\Model\BiddingStrategyServiceBiddingScheme**](BiddingStrategyServiceBiddingScheme.md) |  | [optional] 
**biddingStrategyId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札IDです。&lt;br&gt;SET時およびREMOVE時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Auto bidding ID.&lt;br&gt;This field is optional in SET and REMOVE operation. &lt;/div&gt; | [optional] 
**biddingStrategyName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札名です（50文字以内になります）。&lt;br&gt;このフィールドは、ADD時は必須となり、SET時は省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Auto bidding name(Can set up to 50 characters).&lt;br&gt;This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional] 
**type** | [**\Yahoo\Model\BiddingStrategyServiceType**](BiddingStrategyServiceType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


