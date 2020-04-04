# # BiddingStrategyServiceTargetRoasBiddingScheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bidCeiling** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入札価格の上限です。（0〜50000）&lt;br&gt;※「0」が設定された場合、上限設定はありません。&lt;br&gt;このフィールドは、いずれの場合でも省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CPC  limit (0-50000).&lt;br&gt;* No limits if &amp;#34;0&amp;#34; is set.&lt;br&gt;This field is optional in any cases. &lt;/div&gt; | [optional] 
**bidFloor** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入札価格の下限です。&lt;br&gt;※ 設定を解除する場合は「0」を指定します。&lt;br&gt;このフィールドは、いずれの場合でも省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Minimum CPC.&lt;br&gt;* Set  &amp;#34;0&amp;#34; to deactivate.&lt;br&gt;This field is optional in any cases. &lt;/div&gt; | [optional] 
**targetRoas** | **double** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告費用対効果の目標値&lt;br&gt;※0.01 〜1000.00（1%〜100000%）の範囲内のみ許容します。&lt;br&gt;このフィールドは、ADD時は必須となり、SET時は省略可能となります。※Return On Advertising Spend(ROAS)&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Target ROAS.&lt;br&gt;* ROAS: Return On Average Spend.&lt;br&gt;* Setting limit: 0.01 〜1000.00（1%〜100000%）.&lt;br&gt;This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


