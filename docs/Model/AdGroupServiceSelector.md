# # AdGroupServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：アカウントID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Account ID&lt;/div&gt; | 
**adGroupIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：広告グループID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Ad Group ID&lt;/div&gt; | [optional] 
**biddingStrategyIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：自動入札ID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Auto Bidding ID&lt;/div&gt; | [optional] 
**campaignIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：キャンペーンID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Campaign ID&lt;/div&gt; | [optional] 
**containsLabelId** | [**\Yahoo\Model\AdGroupServiceContainsLabelId**](AdGroupServiceContainsLabelId.md) |  | [optional] 
**labelIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：ラベルID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Label ID&lt;/div&gt; | [optional] 
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**userStatuses** | [**\Yahoo\Model\AdGroupServiceUserStatus[]**](AdGroupServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


