# # CampaignServiceTargetCpaBiddingScheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bidCeiling** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入札価格の上限です。&lt;br&gt;このフィールドは省略可能となります。その際、デフォルト設定値は0となります。&lt;br&gt;※「0」が設定された場合、上限設定はありません。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Limit of bid (CPC).&lt;br&gt;This field is optional. The default value will be 0. &lt;br&gt;* No limits if &amp;#34;0&amp;#34; is set.&lt;/div&gt; | [optional] 
**bidFloor** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入札価格の下限です。&lt;br&gt;このフィールドは省略可能となります。その際、デフォルト設定値は0となります。&lt;br&gt;※ 設定を解除する場合は「0」を指定します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Minimum CPC.&lt;br&gt;This field is optional. The default value will be 0. &lt;br&gt;* Set &amp;#34;0&amp;#34; to deactivate.&lt;/div&gt; | [optional] 
**targetCpa** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョン単価の目標値です。&lt;br&gt;ADD時およびSET時、このフィールドは必須となります。 &lt;br&gt;※制限値：0 ～ 99999999&lt;br&gt;※日本円のみの設定です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Target CPA (JPY).&lt;br&gt;This field is required in ADD and SET operation. &lt;br&gt;* Range limit: 0 - 99999999&lt;/div&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


