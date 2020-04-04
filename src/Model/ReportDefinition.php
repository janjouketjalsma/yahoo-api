<?php
/**
 * ReportDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 検索広告 API リファレンス / Yahoo! Ads Search Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 検索広告 APIのWebサービスについて説明します。<br> 「Try it out」のご利用には、事前にアプリケーションの登録が必要です。また、アプリケーションのリダイレクトURIの1つに<br> https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.htmlを登録してください。 </div> <div lang=\"en\">Search Ads API Web Services supported in Yahoo! Ads API.<br> When you use \"Try it out\", you need to register your application in advance.<br> As one of redirect URI for application, you need to set \"https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.html\". </div>
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Yahoo\Model;

use \ArrayAccess;
use \Yahoo\ObjectSerializer;

/**
 * ReportDefinition Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ReportDefinitionオブジェクトは、レポートの情報を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ReportDefinition object describes report information.&lt;/div&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;completeTime&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;dateRange&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;fields&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;filters&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportJobErrorDetail&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportJobId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportJobStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;requestTime&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;sortFields&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportIncludeDeleted&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;div lang&#x3D;\&quot;ja\&quot;&gt;※レポートタイプが以下の場合のみ。&lt;br&gt;・CAMPAIGN&lt;br&gt;・ADGROUP&lt;br&gt;・AD&lt;br&gt;・KEYWORDS&lt;br&gt;・FEED_ITEM&lt;br&gt;・AD_CUSTOMIZERS&lt;br&gt;これ以外の場合はIgnore&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;∗ If ReportType is [ CAMPAIGN, ADGROUP, AD, KEYWORDS, FEED_ITEM, AD_CUSTOMIZERS ], Optional&lt;br&gt;Otherwise, Ignore&lt;/div&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportCompressType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportDateRangeType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportDownloadFormat&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportLanguage&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportDownloadEncode&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportIncludeZeroImpressions&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'completeTime' => 'string',
        'dateRange' => '\Yahoo\Model\ReportDefinitionServiceReportDateRange',
        'fields' => 'string[]',
        'filters' => '\Yahoo\Model\ReportDefinitionServiceReportFilter[]',
        'reportCompressType' => '\Yahoo\Model\ReportDefinitionServiceReportCompressType',
        'reportDateRangeType' => '\Yahoo\Model\ReportDefinitionServiceReportDateRangeType',
        'reportDownloadEncode' => '\Yahoo\Model\ReportDefinitionServiceReportDownloadEncode',
        'reportDownloadFormat' => '\Yahoo\Model\ReportDefinitionServiceReportDownloadFormat',
        'reportIncludeDeleted' => '\Yahoo\Model\ReportDefinitionServiceReportIncludeDeleted',
        'reportIncludeZeroImpressions' => '\Yahoo\Model\ReportDefinitionServiceReportIncludeZeroImpressions',
        'reportJobErrorDetail' => 'string',
        'reportJobId' => 'int',
        'reportJobStatus' => '\Yahoo\Model\ReportDefinitionServiceReportJobStatus',
        'reportLanguage' => '\Yahoo\Model\ReportDefinitionServiceReportLanguage',
        'reportName' => 'string',
        'reportType' => '\Yahoo\Model\ReportDefinitionServiceReportType',
        'requestTime' => 'string',
        'sortFields' => '\Yahoo\Model\ReportDefinitionServiceReportSortField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'completeTime' => null,
        'dateRange' => null,
        'fields' => null,
        'filters' => null,
        'reportCompressType' => null,
        'reportDateRangeType' => null,
        'reportDownloadEncode' => null,
        'reportDownloadFormat' => null,
        'reportIncludeDeleted' => null,
        'reportIncludeZeroImpressions' => null,
        'reportJobErrorDetail' => null,
        'reportJobId' => 'int64',
        'reportJobStatus' => null,
        'reportLanguage' => null,
        'reportName' => null,
        'reportType' => null,
        'requestTime' => null,
        'sortFields' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accountId' => 'accountId',
        'completeTime' => 'completeTime',
        'dateRange' => 'dateRange',
        'fields' => 'fields',
        'filters' => 'filters',
        'reportCompressType' => 'reportCompressType',
        'reportDateRangeType' => 'reportDateRangeType',
        'reportDownloadEncode' => 'reportDownloadEncode',
        'reportDownloadFormat' => 'reportDownloadFormat',
        'reportIncludeDeleted' => 'reportIncludeDeleted',
        'reportIncludeZeroImpressions' => 'reportIncludeZeroImpressions',
        'reportJobErrorDetail' => 'reportJobErrorDetail',
        'reportJobId' => 'reportJobId',
        'reportJobStatus' => 'reportJobStatus',
        'reportLanguage' => 'reportLanguage',
        'reportName' => 'reportName',
        'reportType' => 'reportType',
        'requestTime' => 'requestTime',
        'sortFields' => 'sortFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'completeTime' => 'setCompleteTime',
        'dateRange' => 'setDateRange',
        'fields' => 'setFields',
        'filters' => 'setFilters',
        'reportCompressType' => 'setReportCompressType',
        'reportDateRangeType' => 'setReportDateRangeType',
        'reportDownloadEncode' => 'setReportDownloadEncode',
        'reportDownloadFormat' => 'setReportDownloadFormat',
        'reportIncludeDeleted' => 'setReportIncludeDeleted',
        'reportIncludeZeroImpressions' => 'setReportIncludeZeroImpressions',
        'reportJobErrorDetail' => 'setReportJobErrorDetail',
        'reportJobId' => 'setReportJobId',
        'reportJobStatus' => 'setReportJobStatus',
        'reportLanguage' => 'setReportLanguage',
        'reportName' => 'setReportName',
        'reportType' => 'setReportType',
        'requestTime' => 'setRequestTime',
        'sortFields' => 'setSortFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'completeTime' => 'getCompleteTime',
        'dateRange' => 'getDateRange',
        'fields' => 'getFields',
        'filters' => 'getFilters',
        'reportCompressType' => 'getReportCompressType',
        'reportDateRangeType' => 'getReportDateRangeType',
        'reportDownloadEncode' => 'getReportDownloadEncode',
        'reportDownloadFormat' => 'getReportDownloadFormat',
        'reportIncludeDeleted' => 'getReportIncludeDeleted',
        'reportIncludeZeroImpressions' => 'getReportIncludeZeroImpressions',
        'reportJobErrorDetail' => 'getReportJobErrorDetail',
        'reportJobId' => 'getReportJobId',
        'reportJobStatus' => 'getReportJobStatus',
        'reportLanguage' => 'getReportLanguage',
        'reportName' => 'getReportName',
        'reportType' => 'getReportType',
        'requestTime' => 'getRequestTime',
        'sortFields' => 'getSortFields'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['completeTime'] = isset($data['completeTime']) ? $data['completeTime'] : null;
        $this->container['dateRange'] = isset($data['dateRange']) ? $data['dateRange'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['reportCompressType'] = isset($data['reportCompressType']) ? $data['reportCompressType'] : null;
        $this->container['reportDateRangeType'] = isset($data['reportDateRangeType']) ? $data['reportDateRangeType'] : null;
        $this->container['reportDownloadEncode'] = isset($data['reportDownloadEncode']) ? $data['reportDownloadEncode'] : null;
        $this->container['reportDownloadFormat'] = isset($data['reportDownloadFormat']) ? $data['reportDownloadFormat'] : null;
        $this->container['reportIncludeDeleted'] = isset($data['reportIncludeDeleted']) ? $data['reportIncludeDeleted'] : null;
        $this->container['reportIncludeZeroImpressions'] = isset($data['reportIncludeZeroImpressions']) ? $data['reportIncludeZeroImpressions'] : null;
        $this->container['reportJobErrorDetail'] = isset($data['reportJobErrorDetail']) ? $data['reportJobErrorDetail'] : null;
        $this->container['reportJobId'] = isset($data['reportJobId']) ? $data['reportJobId'] : null;
        $this->container['reportJobStatus'] = isset($data['reportJobStatus']) ? $data['reportJobStatus'] : null;
        $this->container['reportLanguage'] = isset($data['reportLanguage']) ? $data['reportLanguage'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportType'] = isset($data['reportType']) ? $data['reportType'] : null;
        $this->container['requestTime'] = isset($data['requestTime']) ? $data['requestTime'] : null;
        $this->container['sortFields'] = isset($data['sortFields']) ? $data['sortFields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accountId
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|null $accountId <div lang=\"ja\">アカウントIDです。</div><div lang=\"en\">Account ID.</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets completeTime
     *
     * @return string|null
     */
    public function getCompleteTime()
    {
        return $this->container['completeTime'];
    }

    /**
     * Sets completeTime
     *
     * @param string|null $completeTime <div lang=\"ja\">ジョブの完了時刻です。<br>※YYYY/MM/DD hh:mm:ss形式になります。<br>※hhは24時間表記になります。</div><div lang=\"en\">Completion time of Report Job request.<br>*Displays in YYYY/MM/DD hh:mm:ss form.<br>*hh will display in 24-hour time.</div>
     *
     * @return $this
     */
    public function setCompleteTime($completeTime)
    {
        $this->container['completeTime'] = $completeTime;

        return $this;
    }

    /**
     * Gets dateRange
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportDateRange|null
     */
    public function getDateRange()
    {
        return $this->container['dateRange'];
    }

    /**
     * Sets dateRange
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportDateRange|null $dateRange dateRange
     *
     * @return $this
     */
    public function setDateRange($dateRange)
    {
        $this->container['dateRange'] = $dateRange;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|null $fields <div lang=\"ja\">フィールド（レポートの出力項目名）です。<br>ADD時、このフィールドは必須となります。</div><div lang=\"en\">Item name of the report.<br>Can appoint the value retrieved from getReportFields. <br>This field is required in ADD operation.</div>
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportFilter[]|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportFilter[]|null $filters filters
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets reportCompressType
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportCompressType|null
     */
    public function getReportCompressType()
    {
        return $this->container['reportCompressType'];
    }

    /**
     * Sets reportCompressType
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportCompressType|null $reportCompressType reportCompressType
     *
     * @return $this
     */
    public function setReportCompressType($reportCompressType)
    {
        $this->container['reportCompressType'] = $reportCompressType;

        return $this;
    }

    /**
     * Gets reportDateRangeType
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportDateRangeType|null
     */
    public function getReportDateRangeType()
    {
        return $this->container['reportDateRangeType'];
    }

    /**
     * Sets reportDateRangeType
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportDateRangeType|null $reportDateRangeType reportDateRangeType
     *
     * @return $this
     */
    public function setReportDateRangeType($reportDateRangeType)
    {
        $this->container['reportDateRangeType'] = $reportDateRangeType;

        return $this;
    }

    /**
     * Gets reportDownloadEncode
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportDownloadEncode|null
     */
    public function getReportDownloadEncode()
    {
        return $this->container['reportDownloadEncode'];
    }

    /**
     * Sets reportDownloadEncode
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportDownloadEncode|null $reportDownloadEncode reportDownloadEncode
     *
     * @return $this
     */
    public function setReportDownloadEncode($reportDownloadEncode)
    {
        $this->container['reportDownloadEncode'] = $reportDownloadEncode;

        return $this;
    }

    /**
     * Gets reportDownloadFormat
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportDownloadFormat|null
     */
    public function getReportDownloadFormat()
    {
        return $this->container['reportDownloadFormat'];
    }

    /**
     * Sets reportDownloadFormat
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportDownloadFormat|null $reportDownloadFormat reportDownloadFormat
     *
     * @return $this
     */
    public function setReportDownloadFormat($reportDownloadFormat)
    {
        $this->container['reportDownloadFormat'] = $reportDownloadFormat;

        return $this;
    }

    /**
     * Gets reportIncludeDeleted
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportIncludeDeleted|null
     */
    public function getReportIncludeDeleted()
    {
        return $this->container['reportIncludeDeleted'];
    }

    /**
     * Sets reportIncludeDeleted
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportIncludeDeleted|null $reportIncludeDeleted reportIncludeDeleted
     *
     * @return $this
     */
    public function setReportIncludeDeleted($reportIncludeDeleted)
    {
        $this->container['reportIncludeDeleted'] = $reportIncludeDeleted;

        return $this;
    }

    /**
     * Gets reportIncludeZeroImpressions
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportIncludeZeroImpressions|null
     */
    public function getReportIncludeZeroImpressions()
    {
        return $this->container['reportIncludeZeroImpressions'];
    }

    /**
     * Sets reportIncludeZeroImpressions
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportIncludeZeroImpressions|null $reportIncludeZeroImpressions reportIncludeZeroImpressions
     *
     * @return $this
     */
    public function setReportIncludeZeroImpressions($reportIncludeZeroImpressions)
    {
        $this->container['reportIncludeZeroImpressions'] = $reportIncludeZeroImpressions;

        return $this;
    }

    /**
     * Gets reportJobErrorDetail
     *
     * @return string|null
     */
    public function getReportJobErrorDetail()
    {
        return $this->container['reportJobErrorDetail'];
    }

    /**
     * Sets reportJobErrorDetail
     *
     * @param string|null $reportJobErrorDetail <div lang=\"ja\">レポートジョブのエラー詳細です。</div><div lang=\"en\">Error details of Report Job.</div>
     *
     * @return $this
     */
    public function setReportJobErrorDetail($reportJobErrorDetail)
    {
        $this->container['reportJobErrorDetail'] = $reportJobErrorDetail;

        return $this;
    }

    /**
     * Gets reportJobId
     *
     * @return int|null
     */
    public function getReportJobId()
    {
        return $this->container['reportJobId'];
    }

    /**
     * Sets reportJobId
     *
     * @param int|null $reportJobId <div lang=\"ja\">レポートジョブIDです。<br> REMOVE時、このフィールドは必須となります。</div><div lang=\"en\">Report Job ID. <br>This field is required in REMOVE operation.</div>
     *
     * @return $this
     */
    public function setReportJobId($reportJobId)
    {
        $this->container['reportJobId'] = $reportJobId;

        return $this;
    }

    /**
     * Gets reportJobStatus
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportJobStatus|null
     */
    public function getReportJobStatus()
    {
        return $this->container['reportJobStatus'];
    }

    /**
     * Sets reportJobStatus
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportJobStatus|null $reportJobStatus reportJobStatus
     *
     * @return $this
     */
    public function setReportJobStatus($reportJobStatus)
    {
        $this->container['reportJobStatus'] = $reportJobStatus;

        return $this;
    }

    /**
     * Gets reportLanguage
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportLanguage|null
     */
    public function getReportLanguage()
    {
        return $this->container['reportLanguage'];
    }

    /**
     * Sets reportLanguage
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportLanguage|null $reportLanguage reportLanguage
     *
     * @return $this
     */
    public function setReportLanguage($reportLanguage)
    {
        $this->container['reportLanguage'] = $reportLanguage;

        return $this;
    }

    /**
     * Gets reportName
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
     * Sets reportName
     *
     * @param string|null $reportName <div lang=\"ja\">レポート名称です。<br>ADD時、このフィールドは必須となります。</div><div lang=\"en\">Name of the report. <br>This field is required in ADD operation.</div>
     *
     * @return $this
     */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;

        return $this;
    }

    /**
     * Gets reportType
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportType|null
     */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
     * Sets reportType
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportType|null $reportType reportType
     *
     * @return $this
     */
    public function setReportType($reportType)
    {
        $this->container['reportType'] = $reportType;

        return $this;
    }

    /**
     * Gets requestTime
     *
     * @return string|null
     */
    public function getRequestTime()
    {
        return $this->container['requestTime'];
    }

    /**
     * Sets requestTime
     *
     * @param string|null $requestTime <div lang=\"ja\">ジョブの起動時刻です。<br>※YYYY/MM/DD hh:mm:ss形式になります。<br>※hhは24時間表記になります。</div><div lang=\"en\">Start time of Report Job request.<br>*Displays in YYYY/MM/DD hh:mm:ss form.<br>*hh will display in 24-hour time.</div>
     *
     * @return $this
     */
    public function setRequestTime($requestTime)
    {
        $this->container['requestTime'] = $requestTime;

        return $this;
    }

    /**
     * Gets sortFields
     *
     * @return \Yahoo\Model\ReportDefinitionServiceReportSortField[]|null
     */
    public function getSortFields()
    {
        return $this->container['sortFields'];
    }

    /**
     * Sets sortFields
     *
     * @param \Yahoo\Model\ReportDefinitionServiceReportSortField[]|null $sortFields sortFields
     *
     * @return $this
     */
    public function setSortFields($sortFields)
    {
        $this->container['sortFields'] = $sortFields;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

