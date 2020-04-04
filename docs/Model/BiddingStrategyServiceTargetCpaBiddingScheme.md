# # BiddingStrategyServiceTargetCpaBiddingScheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bidCeiling** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入札価格の上限です。&lt;br&gt;※「0」が設定された場合、上限設定はありません。&lt;br&gt;このフィールドは、いずれの場合でも省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CPC limit.&lt;br&gt;* No limits if &amp;#34;0&amp;#34; is set.&lt;br&gt;This field is optional in any cases. &lt;/div&gt; | [optional] 
**bidFloor** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入札価格の下限です。&lt;br&gt;※ 設定を解除する場合は「0」を指定します。&lt;br&gt;このフィールドは、いずれの場合でも省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Minimum CPC.&lt;br&gt;* Set  &amp;#34;0&amp;#34; to deactivate.&lt;br&gt;This field is optional in any cases. &lt;/div&gt; | [optional] 
**targetCpa** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョン単価の目標値です（日本円です）。&lt;br&gt;このフィールドは、ADD時は必須となり、SET時は省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Target CPA (JPY).&lt;br&gt;This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


