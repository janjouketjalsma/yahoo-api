# # AdGroupCriterionServiceBiddableAdGroupCriterion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalAdvancedMobileUrls** | [**\Yahoo\Model\AdGroupCriterionServiceAdditionalAdvancedMobileUrls**](AdGroupCriterionServiceAdditionalAdvancedMobileUrls.md) |  | [optional] 
**additionalAdvancedUrls** | [**\Yahoo\Model\AdGroupCriterionServiceAdditionalAdvancedUrls**](AdGroupCriterionServiceAdditionalAdvancedUrls.md) |  | [optional] 
**advancedMobileUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;カスタムURL（スマートフォン）です。&lt;br&gt;ADDおよびSET時、このフィールドは省略可能となります。&lt;br&gt;※空で設定すると、既存のカスタムURL（スマートフォン）は削除されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Upgraded Custom URL (Smartphone).&lt;br&gt;This field is optional in ADD and SET operation.&lt;br&gt;*When tag is set blank, existing upgraded Custom URL (Smartphone) will be deleted.&lt;/div&gt; | [optional] 
**advancedUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;移行後のカスタムURLです。&lt;br&gt;ADDおよびSET時、このフィールドは省略可能となります。※ADD時、移行してtracking Urlを指定している場合は必須となります。&lt;br&gt;※空で設定すると、既存の移行後のカスタムURLは削除されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Upgraded Custom URL.&lt;br&gt;This field is optional in ADD and SET operation. *If upgraded and tracking Url is specified, it is required in ADD operation.&lt;br&gt;*When this is set blank, existing upgraded Custom URL will be deleted.&lt;/div&gt; | [optional] 
**approvalStatus** | [**\Yahoo\Model\AdGroupCriterionServiceApprovalStatus**](AdGroupCriterionServiceApprovalStatus.md) |  | [optional] 
**bid** | [**\Yahoo\Model\AdGroupCriterionServiceBid**](AdGroupCriterionServiceBid.md) |  | [optional] 
**customParameters** | [**\Yahoo\Model\AdGroupCriterionServiceCustomParameters**](AdGroupCriterionServiceCustomParameters.md) |  | [optional] 
**destinationUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;移行前のカスタムURLです。&lt;br&gt;ADDおよびSET時、このフィールドは省略可能となります。&lt;br&gt;※空で設定すると、既存の移行前のカスタムURLは削除されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Custom URL of before upgrading.&lt;br&gt;This field is optional in ADD and SET operation.&lt;br&gt;*When tag is set blank, existing Custom URL before upgrade will be deleted.&lt;/div&gt; | [optional] 
**disapprovalReasonCodes** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;審査否認コードです。&lt;br&gt;(コード詳細は、DictionaryServiceのgetDisapprovalReasonのレスポンスを参照)&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Code of Disapproval reason.&lt;br&gt;(Refer to DictionaryService getDisapprovalReason response for details)&lt;/div&gt; | [optional] 
**reviewAdvancedMobileUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;配信審査中のカスタムURL（スマートフォン）です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Upgraded Custom URL (Smartphone), in review.&lt;/div&gt; | [optional] 
**reviewAdvancedUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;移行後の配信審査中のカスタムURLです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Upgraded Custom URL, in review.&lt;/div&gt; | [optional] 
**reviewCustomParameters** | [**\Yahoo\Model\AdGroupCriterionServiceCustomParameters**](AdGroupCriterionServiceCustomParameters.md) |  | [optional] 
**reviewDestinationUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;移行前の配信審査中のカスタムURLです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Custom URL of before upgrading, in review.&lt;/div&gt; | [optional] 
**reviewTrackingUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;配信審査中のトラッキングURLです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking URL, in review.&lt;/div&gt; | [optional] 
**trackingUrl** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;トラッキングURLです。&lt;br&gt;ADDおよびSET時、このフィールドは省略可能となります。&lt;br&gt;※空で設定すると、既存のトラッキングURLは削除されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking URL.&lt;br&gt;This field is optional in ADD and SET operation.&lt;br&gt;*When tag is set blank, existing Tracking URL will be deleted.&lt;/div&gt; | [optional] 
**userStatus** | [**\Yahoo\Model\AdGroupCriterionServiceUserStatus**](AdGroupCriterionServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


