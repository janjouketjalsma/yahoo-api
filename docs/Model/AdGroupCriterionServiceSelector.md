# # AdGroupCriterionServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：アカウントID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Account ID.&lt;/div&gt; | 
**adGroupIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：広告グループID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Ad group ID.&lt;/div&gt; | [optional] 
**approvalStatuses** | [**\Yahoo\Model\AdGroupCriterionServiceApprovalStatus[]**](AdGroupCriterionServiceApprovalStatus.md) |  | [optional] 
**biddingStrategyIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：自動入札ID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Auto bidding ID.&lt;/div&gt; | [optional] 
**campaignIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：キャンペーンID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Campaign ID.&lt;/div&gt; | [optional] 
**containsLabelId** | [**\Yahoo\Model\AdGroupCriterionServiceContainsLabelId**](AdGroupCriterionServiceContainsLabelId.md) |  | [optional] 
**criterionIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：クライテリオンID&lt;br&gt;指定しない場合は、広告グループID以下のすべてのクライ テリアが含まれます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Criterion ID.&lt;br&gt;* All criteria under the Ad group ID will return if theres is no designation.&lt;/div&gt; | [optional] 
**labelIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：ラベルID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Label ID&lt;/div&gt; | [optional] 
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**use** | [**\Yahoo\Model\AdGroupCriterionServiceUse**](AdGroupCriterionServiceUse.md) |  | 
**userStatuses** | [**\Yahoo\Model\AdGroupCriterionServiceUserStatus[]**](AdGroupCriterionServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


