# # BidLandscapeServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt;&lt;br&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID&lt;/div&gt; | 
**campaignId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンIDです。&lt;/div&gt;&lt;br&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID&lt;/div&gt; | 
**adGroupId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループIDです。&lt;/div&gt;&lt;br&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad Gropup ID.&lt;/div&gt; | 
**criterionIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;クライテリアIDです。最大100個まで指定できます。&lt;/div&gt;&lt;br&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ID of this criterion. The maximum value is 100.&lt;/div&gt; | [optional] 
**simType** | [**\Yahoo\Model\BidLandscapeServiceSimType**](BidLandscapeServiceSimType.md) |  | 
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 100]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


