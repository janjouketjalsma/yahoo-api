# # ReportDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; | [optional] 
**completeTime** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ジョブの完了時刻です。&lt;br&gt;※YYYY/MM/DD hh:mm:ss形式になります。&lt;br&gt;※hhは24時間表記になります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Completion time of Report Job request.&lt;br&gt;*Displays in YYYY/MM/DD hh:mm:ss form.&lt;br&gt;*hh will display in 24-hour time.&lt;/div&gt; | [optional] 
**dateRange** | [**\Yahoo\Model\ReportDefinitionServiceReportDateRange**](ReportDefinitionServiceReportDateRange.md) |  | [optional] 
**fields** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;フィールド（レポートの出力項目名）です。&lt;br&gt;ADD時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Item name of the report.&lt;br&gt;Can appoint the value retrieved from getReportFields. &lt;br&gt;This field is required in ADD operation.&lt;/div&gt; | [optional] 
**filters** | [**\Yahoo\Model\ReportDefinitionServiceReportFilter[]**](ReportDefinitionServiceReportFilter.md) |  | [optional] 
**reportCompressType** | [**\Yahoo\Model\ReportDefinitionServiceReportCompressType**](ReportDefinitionServiceReportCompressType.md) |  | [optional] 
**reportDateRangeType** | [**\Yahoo\Model\ReportDefinitionServiceReportDateRangeType**](ReportDefinitionServiceReportDateRangeType.md) |  | [optional] 
**reportDownloadEncode** | [**\Yahoo\Model\ReportDefinitionServiceReportDownloadEncode**](ReportDefinitionServiceReportDownloadEncode.md) |  | [optional] 
**reportDownloadFormat** | [**\Yahoo\Model\ReportDefinitionServiceReportDownloadFormat**](ReportDefinitionServiceReportDownloadFormat.md) |  | [optional] 
**reportIncludeDeleted** | [**\Yahoo\Model\ReportDefinitionServiceReportIncludeDeleted**](ReportDefinitionServiceReportIncludeDeleted.md) |  | [optional] 
**reportIncludeZeroImpressions** | [**\Yahoo\Model\ReportDefinitionServiceReportIncludeZeroImpressions**](ReportDefinitionServiceReportIncludeZeroImpressions.md) |  | [optional] 
**reportJobErrorDetail** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;レポートジョブのエラー詳細です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Error details of Report Job.&lt;/div&gt; | [optional] 
**reportJobId** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;レポートジョブIDです。&lt;br&gt; REMOVE時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Report Job ID. &lt;br&gt;This field is required in REMOVE operation.&lt;/div&gt; | [optional] 
**reportJobStatus** | [**\Yahoo\Model\ReportDefinitionServiceReportJobStatus**](ReportDefinitionServiceReportJobStatus.md) |  | [optional] 
**reportLanguage** | [**\Yahoo\Model\ReportDefinitionServiceReportLanguage**](ReportDefinitionServiceReportLanguage.md) |  | [optional] 
**reportName** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;レポート名称です。&lt;br&gt;ADD時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Name of the report. &lt;br&gt;This field is required in ADD operation.&lt;/div&gt; | [optional] 
**reportType** | [**\Yahoo\Model\ReportDefinitionServiceReportType**](ReportDefinitionServiceReportType.md) |  | [optional] 
**requestTime** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ジョブの起動時刻です。&lt;br&gt;※YYYY/MM/DD hh:mm:ss形式になります。&lt;br&gt;※hhは24時間表記になります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Start time of Report Job request.&lt;br&gt;*Displays in YYYY/MM/DD hh:mm:ss form.&lt;br&gt;*hh will display in 24-hour time.&lt;/div&gt; | [optional] 
**sortFields** | [**\Yahoo\Model\ReportDefinitionServiceReportSortField[]**](ReportDefinitionServiceReportSortField.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


