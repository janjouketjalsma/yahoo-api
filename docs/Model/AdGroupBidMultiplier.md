# # AdGroupBidMultiplier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**adGroupId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループIDです。&lt;br&gt;SETおよびREMOVE時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad group ID.&lt;br&gt;This field is required in SET and REMOVE operation.&lt;/div&gt; | [optional] 
**bidMultiplier** | **double** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入札調整率です。0～10.0まで指定できます。0を指定した場合、広告は配信されません。&lt;br&gt;SET時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Bid adjustment rate.&lt;br&gt;Can be specified between  0 to 10.0.&lt;br&gt;When specified &amp;#39;0&amp;#39;, the ad will not be delivered.&lt;br&gt;This field is required in SET operation.&lt;/div&gt; | [optional] 
**campaignId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンIDです。&lt;br&gt;SETおよびREMOVE時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Campaign ID.&lt;br&gt;This field is required in SET and REMOVE operation.&lt;/div&gt; | [optional] 
**platformType** | [**\Yahoo\Model\AdGroupBidMultiplierServicePlatformType**](AdGroupBidMultiplierServicePlatformType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


