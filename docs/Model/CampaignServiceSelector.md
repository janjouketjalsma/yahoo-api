# # CampaignServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：アカウントIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Account ID.&lt;/div&gt; | 
**biddingStrategyIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：自動入札IDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Auto Bidding ID.&lt;/div&gt; | [optional] 
**campaignIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：キャンペーンIDです。&lt;br&gt;※指定しない場合は、フィルタ条件に すべてのキャンペーンが含まれます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Campaign ID&lt;br&gt;* All campaign will return, if no campaign are not specified.&lt;/div&gt; | [optional] 
**containsLabelId** | [**\Yahoo\Model\CampaignServiceContainsLabelId**](CampaignServiceContainsLabelId.md) |  | [optional] 
**labelIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：ラベルIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Label ID.&lt;/div&gt; | [optional] 
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**userStatuses** | [**\Yahoo\Model\CampaignServiceUserStatus[]**](CampaignServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


