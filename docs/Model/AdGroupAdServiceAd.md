# # AdGroupAdServiceAd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adType** | [**\Yahoo\Model\AdGroupAdServiceAdType**](AdGroupAdServiceAdType.md) |  | [optional] 
**additionalAdvancedMobileUrls** | [**\Yahoo\Model\AdGroupAdServiceAdditionalAdvancedMobileUrls[]**](AdGroupAdServiceAdditionalAdvancedMobileUrls.md) |  | [optional] 
**additionalAdvancedUrls** | [**\Yahoo\Model\AdGroupAdServiceAdditionalAdvancedUrls[]**](AdGroupAdServiceAdditionalAdvancedUrls.md) |  | [optional] 
**advancedMobileUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;最終リンク先URL（スマートフォン）です。&lt;br&gt;ADD時、このフィールドは省略可能となります。※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合は無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Landing Page URL (Smartphone).&lt;br&gt;This field is optional in ADD operation. *If adType is DYNAMIC_SEARCH_LINKED_AD, this field will be ignored.&lt;/div&gt; | [optional] 
**advancedUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;最終リンク先URLです。&lt;br&gt;ADD時、このフィールドは必須となります。※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合は無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Landing Page URL.&lt;br&gt;This field is required in ADD operation. *If adType is DYNAMIC_SEARCH_LINKED_AD, this field will be ignored.&lt;/div&gt; | [optional] 
**appAd** | [**\Yahoo\Model\AdGroupAdServiceAppAd**](AdGroupAdServiceAppAd.md) |  | [optional] 
**customParameters** | [**\Yahoo\Model\AdGroupAdServiceCustomParameters**](AdGroupAdServiceCustomParameters.md) |  | [optional] 
**description** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;説明文です。&lt;br&gt;ADD時、このフィールドは必須となります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Description of ad.&lt;br&gt;This field is required in ADD operation.&lt;/div&gt; | [optional] 
**devicePreference** | [**\Yahoo\Model\AdGroupAdServiceDevicePreference**](AdGroupAdServiceDevicePreference.md) |  | [optional] 
**displayUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;表示URLです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Display URL.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 
**extendedTextAd** | [**\Yahoo\Model\AdGroupAdServiceExtendedTextAd**](AdGroupAdServiceExtendedTextAd.md) |  | [optional] 
**headline** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;タイトル文です。&lt;br&gt;ADD時、このフィールドは必須となります。※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合は無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Title of ad.&lt;br&gt;This field is required in ADD operation. *If adType is DYNAMIC_SEARCH_LINKED_AD, this field will be ignored.&lt;/div&gt; | [optional] 
**textAd2** | [**\Yahoo\Model\AdGroupAdServiceTextAd2**](AdGroupAdServiceTextAd2.md) |  | [optional] 
**trackingUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキングURLです。&lt;br&gt;ADD時、このフィールドは省略可能となります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking URL.&lt;br&gt;This field is optional in ADD operation.&lt;/div&gt; | [optional] 
**url** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;移行前のリンク先URLです。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Destination URL before upgrading. &lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


