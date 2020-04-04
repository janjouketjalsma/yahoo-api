# # TargetingIdeaServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;This field is required.&lt;/div&gt; | 
**relatedToKeywordSearchParameter** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キーワードを格納するコンテナです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Container that stores the keyword.&lt;/div&gt; | [optional] 
**relatedToUrlSearchParameter** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;提案対象のURLです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;URL for the suggested target.&lt;/div&gt; | [optional] 
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


