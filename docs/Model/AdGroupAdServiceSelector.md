# # AdGroupAdServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：アカウントID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Account ID.&lt;/div&gt; | 
**adGroupIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：広告グループID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Ad group ID.&lt;br&gt;Ads returned will be from adgroups whose ids are included in this list.&lt;/div&gt; | [optional] 
**adIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：広告ID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Ad ID.&lt;br&gt;Ads will return from ads whose ids are included in this list.&lt;br&gt;If you omit adIds field, it will return all adIds under the adGroup.&lt;/div&gt; | [optional] 
**adTypes** | [**\Yahoo\Model\AdGroupAdServiceAdType[]**](AdGroupAdServiceAdType.md) |  | [optional] 
**approvalStatuses** | [**\Yahoo\Model\AdGroupAdServiceApprovalStatus[]**](AdGroupAdServiceApprovalStatus.md) |  | [optional] 
**campaignIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：キャンペーンID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Campaign ID.&lt;br&gt;Ads returned will be from campaigns whose ids are included in this list.&lt;br&gt;An empty list means there are no campaign restrictions when selecting AdGroupAds.&lt;br&gt;* This field must contain distinct elements.&lt;br&gt;* This field cannot contain null elements.&lt;/div&gt; | [optional] 
**containsLabelId** | [**\Yahoo\Model\AdGroupAdServiceContainsLabelId**](AdGroupAdServiceContainsLabelId.md) |  | [optional] 
**labelIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：ラベルID&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition: Label ID&lt;/div&gt; | [optional] 
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**userStatuses** | [**\Yahoo\Model\AdGroupAdServiceUserStatus[]**](AdGroupAdServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


