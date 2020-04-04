# # Feed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;※入稿の仕様変更により不要になりました。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;*Not required by design change on editorials.　&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**domain** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ドメインです。&lt;br&gt; このフィールドは、ADD時に省略可能となり、SETおよびREMOVE時に無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Domain.　&lt;br&gt;This field is optional in ADD operation, and will be ignored in SET and REMOVE operation.&lt;/div&gt; | [optional] 
**feedAttribute** | [**\Yahoo\Model\FeedServiceAttribute[]**](FeedServiceAttribute.md) |  | [optional] 
**feedId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedIDです。&lt;br&gt;このフィールドは、SETおよびREMOVE時に必須となり、ADD時は無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed ID. &lt;br&gt;This field is required in SET and REMOVE operation, and will be ignored in ADD operation.&lt;/div&gt; | [optional] 
**feedName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Feedのリスト名です。&lt;br&gt;このフィールドは、ADD時に必須となり、SETおよびREMOVE時に無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;List name of Feed. &lt;br&gt;This field is required in ADD operation, and will be ignored in SET and REMOVE operation.&lt;/div&gt; | [optional] 
**feedTrackId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Feedのトラッキング用IDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking ID of Feed. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**placeholderType** | [**\Yahoo\Model\FeedServicePlaceholderType**](FeedServicePlaceholderType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


