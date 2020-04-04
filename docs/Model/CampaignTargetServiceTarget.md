# # CampaignTargetServiceTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locationTarget** | [**\Yahoo\Model\CampaignTargetServiceLocationTarget**](CampaignTargetServiceLocationTarget.md) |  | [optional] 
**networkTarget** | [**\Yahoo\Model\CampaignTargetServiceNetworkTarget**](CampaignTargetServiceNetworkTarget.md) |  | [optional] 
**platformTarget** | [**\Yahoo\Model\CampaignTargetServicePlatformTarget**](CampaignTargetServicePlatformTarget.md) |  | [optional] 
**scheduleTarget** | [**\Yahoo\Model\CampaignTargetServiceScheduleTarget**](CampaignTargetServiceScheduleTarget.md) |  | [optional] 
**targetId** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ターゲットIDです。&lt;br&gt;このフィールドは、ADD時は無視され、SETおよびREMOVE時は必須となります。&lt;br&gt;※LocationCampaignTargetServiceTargetの場合、ADD時に必須となります。&lt;br&gt;※PlatformCampaignTargetServiceTargetの場合、SET時に無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignTargetServiceTarget  ID. &lt;br&gt; This field will be ignored in ADD operation, and is required in ADD and REMOVE operation. &lt;br&gt; *For  LocationCampaignTargetServiceTarget, this is required in ADD operation. &lt;br&gt; *For PlatformCampaignTargetServiceTarget,  this will be ignored in SET operation.&lt;/div&gt; | [optional] 
**targetType** | [**\Yahoo\Model\CampaignTargetServiceTargetType**](CampaignTargetServiceTargetType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


