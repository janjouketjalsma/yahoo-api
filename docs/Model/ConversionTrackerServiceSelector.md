# # ConversionTrackerServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; | 
**appIds** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アプリケーションIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;App ID.&lt;/div&gt; | [optional] 
**categories** | [**\Yahoo\Model\ConversionTrackerServiceCategory[]**](ConversionTrackerServiceCategory.md) |  | [optional] 
**conversionCountingTypes** | [**\Yahoo\Model\ConversionTrackerServiceConversionCountingType[]**](ConversionTrackerServiceConversionCountingType.md) |  | [optional] 
**conversionDateRange** | [**\Yahoo\Model\ConversionTrackerServiceConversionDateRange**](ConversionTrackerServiceConversionDateRange.md) |  | [optional] 
**conversionTrackerIds** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョントラッカーIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Conversion Tracker ID.&lt;/div&gt; | [optional] 
**conversionTrackerTypes** | [**\Yahoo\Model\ConversionTrackerServiceConversionTrackerType[]**](ConversionTrackerServiceConversionTrackerType.md) |  | [optional] 
**excludeFromBiddings** | [**\Yahoo\Model\ConversionTrackerServiceExcludeFromBidding[]**](ConversionTrackerServiceExcludeFromBidding.md) |  | [optional] 
**numberResults** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**startIndex** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**statuses** | [**\Yahoo\Model\ConversionTrackerServiceStatus[]**](ConversionTrackerServiceStatus.md) |  | [optional] 
**trackingCodeTypes** | [**\Yahoo\Model\ConversionTrackerServiceTrackingCodeType[]**](ConversionTrackerServiceTrackingCodeType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


