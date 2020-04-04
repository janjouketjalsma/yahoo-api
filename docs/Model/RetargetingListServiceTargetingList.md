# # RetargetingListServiceTargetingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt; このフィールドは、いずれの場合でも必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account  ID. &lt;br&gt;This field is required in any cases.&lt;/div&gt; | [optional] 
**closingReason** | [**\Yahoo\Model\RetargetingListServiceClosingReason**](RetargetingListServiceClosingReason.md) |  | [optional] 
**defaultTargetList** | [**\Yahoo\Model\RetargetingListServiceDefaultTargetList**](RetargetingListServiceDefaultTargetList.md) |  | [optional] 
**logicalTargetList** | [**\Yahoo\Model\RetargetingListServiceLogicalTargetList**](RetargetingListServiceLogicalTargetList.md) |  | [optional] 
**reach** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;リストに蓄積されているユーザー数です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Number of users stored to the list.&lt;/div&gt; | [optional] 
**reachStorageSpan** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Cookieを保持する日数です。&lt;br&gt; SET時、このフィールドは省略可能となります。&lt;br&gt;LogicalTargetListの場合、SET時にこのフィールドは無視されます。&lt;br&gt;※Default：180&lt;br&gt;※1-540日まで設定可能です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Days to hold Cookie. &lt;br&gt;This field is optional in SET operation. &lt;br&gt; For LogicalTargetList, this field will be ignored  in SET operation.&lt;br&gt;*Default: 180&lt;br&gt;*Can set from 1-540 days.&lt;/div&gt; | [optional] 
**reachStorageStatus** | [**\Yahoo\Model\RetargetingListServiceReachStorageStatus**](RetargetingListServiceReachStorageStatus.md) |  | [optional] 
**retargetingAccountStatus** | [**\Yahoo\Model\RetargetingListServiceRetargetingAccountStatus**](RetargetingListServiceRetargetingAccountStatus.md) |  | [optional] 
**ruleBaseTargetList** | [**\Yahoo\Model\RetargetingListServiceRuleBaseTargetList**](RetargetingListServiceRuleBaseTargetList.md) |  | [optional] 
**targetListDescription** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ターゲットリストの説明です。&lt;br&gt;このフィールドは、いずれの場合でも省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Description  of Target List. &lt;br&gt;This field is optional in any cases.&lt;/div&gt; | [optional] 
**targetListId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ターゲットリストIDです。&lt;br&gt;SET時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Target  List ID. &lt;br&gt;This field is required in SET operation.&lt;/div&gt; | [optional] 
**targetListName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ターゲットリスト名です。&lt;br&gt;ADD時にこのフィールドは必須となり、SET時にこのフィールドは省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Target  List name. &lt;br&gt;This field is required in ADD operation, and is optional in SET operation.&lt;/div&gt; | [optional] 
**targetListOwner** | [**\Yahoo\Model\RetargetingListServiceTargetListOwner**](RetargetingListServiceTargetListOwner.md) |  | [optional] 
**targetListTrackId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ターゲットリストのトラッキング用IDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Tracking ID of Target list.&lt;/div&gt; | [optional] 
**targetListType** | [**\Yahoo\Model\RetargetingListServiceTargetListType**](RetargetingListServiceTargetListType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


