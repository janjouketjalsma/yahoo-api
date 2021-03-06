# # CampaignFeedServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; | 
**campaignIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID.&lt;/div&gt; | [optional] 
**feedItemIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedItem情報のIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedItem information ID.&lt;/div&gt; | [optional] 
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**placeholderTypes** | [**\Yahoo\Model\CampaignFeedServicePlaceholderType[]**](CampaignFeedServicePlaceholderType.md) |  | [optional] 
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


