# # ConversionTracker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; | [optional] 
**allConversionValue** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札設定対象のコンバージョン値と、対象外のコンバージョン値の合計です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Total value of conversions to be included to auto bidding and to be exluded from auto bidding.&lt;/div&gt; | [optional] 
**allConversions** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札設定対象のコンバージョン数と、対象外のコンバージョン数の合計です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Total number of conversions to be included to auto bidding and to be excluded from auto bidding.&lt;/div&gt; | [optional] 
**appConversion** | [**\Yahoo\Model\ConversionTrackerServiceAppConversion**](ConversionTrackerServiceAppConversion.md) |  | [optional] 
**category** | [**\Yahoo\Model\ConversionTrackerServiceCategory**](ConversionTrackerServiceCategory.md) |  | [optional] 
**conversionCountingType** | [**\Yahoo\Model\ConversionTrackerServiceConversionCountingType**](ConversionTrackerServiceConversionCountingType.md) |  | [optional] 
**conversionTrackerId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョントラッカーのIDです。&lt;br&gt; このフィールドは、SET時に必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTracker  ID. &lt;br&gt;This field is required in SET operation.&lt;/div&gt; | [optional] 
**conversionTrackerName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョントラッカーの名称です。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTracker  Name. &lt;br&gt;This field is required in ADD operation, and is optional in SET operation.&lt;/div&gt; | [optional] 
**conversionTrackerType** | [**\Yahoo\Model\ConversionTrackerServiceConversionTrackerType**](ConversionTrackerServiceConversionTrackerType.md) |  | [optional] 
**conversionValue** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札設定対象のコンバージョン値です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Conversion value to be included to auto bidding.&lt;/div&gt; | [optional] 
**conversions** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;自動入札設定対象のコンバージョン数です。&lt;br&gt;ユニークコンバージョンか総コンバージョンかは、countingTypeに依存します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Conversions which counts as included to Auto Bidding setting.&lt;br&gt;countingType specifies whether one-per-click or many-per-click.&lt;/div&gt; | [optional] 
**excludeFromBidding** | [**\Yahoo\Model\ConversionTrackerServiceExcludeFromBidding**](ConversionTrackerServiceExcludeFromBidding.md) |  | [optional] 
**measurementPeriod** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョン計測期間です（単位：日)。&lt;br&gt;7～90日間で設定可能です。&lt;br&gt;※アプリダウンロードの場合は30日間固定。&lt;br&gt;このフィールドは、ADDおよびSET時に省略可能となります。&lt;br&gt;※ADD時のデフォルト設定値は30となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Counting period of conversoins (days).&lt;br&gt;It is  available between 7 to 90 days&lt;br&gt;* For Mobile App Download, this period is fixed as 30 days. &lt;br&gt;This field is  optional in ADD and SET operation. &lt;br&gt; *The default value in ADD operation will be 30.&lt;/div&gt; | [optional] 
**mostRecentConversionDate** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;直近のコンバージョン発生日です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;The most latest date when conversion occured.&lt;/div&gt; | [optional] 
**status** | [**\Yahoo\Model\ConversionTrackerServiceStatus**](ConversionTrackerServiceStatus.md) |  | [optional] 
**userRevenueValue** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;このコンバージョントラッカーに対するユーザー指定の収益値です。&lt;br&gt;1コンバージョンあたりの売上金額が固定値の場合、その金額を設定することで、売上金額をレポートなどで確認できます。&lt;br&gt;ADDリクエスト時に未指定の場合、0が設定されます。&lt;br&gt;このフィールドは、ADD時およびSET時に省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;The value of revenue of the conversion tracker specified by user.&lt;br&gt;When the sales revenue of 1 conversion is fixed value, you are able to review the total sales on reports by specifying the amount on this item.&lt;br&gt;If it is not specified on ADD request, the value &amp;#34;0&amp;#34; is set. &lt;br&gt;This field is optional in ADD and SET operation. &lt;/div&gt; | [optional] 
**webConversion** | [**\Yahoo\Model\ConversionTrackerServiceWebConversion**](ConversionTrackerServiceWebConversion.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


