<?php
/**
 * CampaignExportServiceExportSetting
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
 * CampaignExportServiceExportSetting Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignExportServiceExportSetting オブジェクトは、エクスポートする条件を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignExportServiceExportSetting object describes the condition for exports.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignExportServiceExportSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignExportServiceExportSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'adGroupAdApprovalStatuses' => '\Yahoo\Model\CampaignExportServiceApprovalStatus[]',
        'adGroupAdUserStatuses' => '\Yahoo\Model\CampaignExportServiceUserStatus[]',
        'adGroupCriterionApprovalStatuses' => '\Yahoo\Model\CampaignExportServiceApprovalStatus[]',
        'adGroupCriterionIds' => 'int[]',
        'adGroupCriterionUserStatuses' => '\Yahoo\Model\CampaignExportServiceUserStatus[]',
        'adGroupIds' => 'int[]',
        'adGroupUserStatuses' => '\Yahoo\Model\CampaignExportServiceUserStatus[]',
        'adIds' => 'int[]',
        'campaignCriterionIds' => 'int[]',
        'campaignIds' => 'int[]',
        'campaignUserStatuses' => '\Yahoo\Model\CampaignExportServiceUserStatus[]',
        'encoding' => '\Yahoo\Model\CampaignExportServiceEncoding',
        'entityTypes' => '\Yahoo\Model\CampaignExportServiceEntityType[]',
        'exportFields' => 'string[]',
        'jobName' => 'string',
        'lang' => '\Yahoo\Model\CampaignExportServiceLang',
        'output' => '\Yahoo\Model\CampaignExportServiceOutput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'adGroupAdApprovalStatuses' => null,
        'adGroupAdUserStatuses' => null,
        'adGroupCriterionApprovalStatuses' => null,
        'adGroupCriterionIds' => 'int64',
        'adGroupCriterionUserStatuses' => null,
        'adGroupIds' => 'int64',
        'adGroupUserStatuses' => null,
        'adIds' => 'int64',
        'campaignCriterionIds' => 'int64',
        'campaignIds' => 'int64',
        'campaignUserStatuses' => null,
        'encoding' => null,
        'entityTypes' => null,
        'exportFields' => null,
        'jobName' => null,
        'lang' => null,
        'output' => null
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
        'adGroupAdApprovalStatuses' => 'adGroupAdApprovalStatuses',
        'adGroupAdUserStatuses' => 'adGroupAdUserStatuses',
        'adGroupCriterionApprovalStatuses' => 'adGroupCriterionApprovalStatuses',
        'adGroupCriterionIds' => 'adGroupCriterionIds',
        'adGroupCriterionUserStatuses' => 'adGroupCriterionUserStatuses',
        'adGroupIds' => 'adGroupIds',
        'adGroupUserStatuses' => 'adGroupUserStatuses',
        'adIds' => 'adIds',
        'campaignCriterionIds' => 'campaignCriterionIds',
        'campaignIds' => 'campaignIds',
        'campaignUserStatuses' => 'campaignUserStatuses',
        'encoding' => 'encoding',
        'entityTypes' => 'entityTypes',
        'exportFields' => 'exportFields',
        'jobName' => 'jobName',
        'lang' => 'lang',
        'output' => 'output'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'adGroupAdApprovalStatuses' => 'setAdGroupAdApprovalStatuses',
        'adGroupAdUserStatuses' => 'setAdGroupAdUserStatuses',
        'adGroupCriterionApprovalStatuses' => 'setAdGroupCriterionApprovalStatuses',
        'adGroupCriterionIds' => 'setAdGroupCriterionIds',
        'adGroupCriterionUserStatuses' => 'setAdGroupCriterionUserStatuses',
        'adGroupIds' => 'setAdGroupIds',
        'adGroupUserStatuses' => 'setAdGroupUserStatuses',
        'adIds' => 'setAdIds',
        'campaignCriterionIds' => 'setCampaignCriterionIds',
        'campaignIds' => 'setCampaignIds',
        'campaignUserStatuses' => 'setCampaignUserStatuses',
        'encoding' => 'setEncoding',
        'entityTypes' => 'setEntityTypes',
        'exportFields' => 'setExportFields',
        'jobName' => 'setJobName',
        'lang' => 'setLang',
        'output' => 'setOutput'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'adGroupAdApprovalStatuses' => 'getAdGroupAdApprovalStatuses',
        'adGroupAdUserStatuses' => 'getAdGroupAdUserStatuses',
        'adGroupCriterionApprovalStatuses' => 'getAdGroupCriterionApprovalStatuses',
        'adGroupCriterionIds' => 'getAdGroupCriterionIds',
        'adGroupCriterionUserStatuses' => 'getAdGroupCriterionUserStatuses',
        'adGroupIds' => 'getAdGroupIds',
        'adGroupUserStatuses' => 'getAdGroupUserStatuses',
        'adIds' => 'getAdIds',
        'campaignCriterionIds' => 'getCampaignCriterionIds',
        'campaignIds' => 'getCampaignIds',
        'campaignUserStatuses' => 'getCampaignUserStatuses',
        'encoding' => 'getEncoding',
        'entityTypes' => 'getEntityTypes',
        'exportFields' => 'getExportFields',
        'jobName' => 'getJobName',
        'lang' => 'getLang',
        'output' => 'getOutput'
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
        $this->container['adGroupAdApprovalStatuses'] = isset($data['adGroupAdApprovalStatuses']) ? $data['adGroupAdApprovalStatuses'] : null;
        $this->container['adGroupAdUserStatuses'] = isset($data['adGroupAdUserStatuses']) ? $data['adGroupAdUserStatuses'] : null;
        $this->container['adGroupCriterionApprovalStatuses'] = isset($data['adGroupCriterionApprovalStatuses']) ? $data['adGroupCriterionApprovalStatuses'] : null;
        $this->container['adGroupCriterionIds'] = isset($data['adGroupCriterionIds']) ? $data['adGroupCriterionIds'] : null;
        $this->container['adGroupCriterionUserStatuses'] = isset($data['adGroupCriterionUserStatuses']) ? $data['adGroupCriterionUserStatuses'] : null;
        $this->container['adGroupIds'] = isset($data['adGroupIds']) ? $data['adGroupIds'] : null;
        $this->container['adGroupUserStatuses'] = isset($data['adGroupUserStatuses']) ? $data['adGroupUserStatuses'] : null;
        $this->container['adIds'] = isset($data['adIds']) ? $data['adIds'] : null;
        $this->container['campaignCriterionIds'] = isset($data['campaignCriterionIds']) ? $data['campaignCriterionIds'] : null;
        $this->container['campaignIds'] = isset($data['campaignIds']) ? $data['campaignIds'] : null;
        $this->container['campaignUserStatuses'] = isset($data['campaignUserStatuses']) ? $data['campaignUserStatuses'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['entityTypes'] = isset($data['entityTypes']) ? $data['entityTypes'] : null;
        $this->container['exportFields'] = isset($data['exportFields']) ? $data['exportFields'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
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
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId <div lang=\"ja\">アカウントIDです。<br>このフィールドは、必須です。 </div><div lang=\"en\">Account ID.<br>This field is required. </div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets adGroupAdApprovalStatuses
     *
     * @return \Yahoo\Model\CampaignExportServiceApprovalStatus[]|null
     */
    public function getAdGroupAdApprovalStatuses()
    {
        return $this->container['adGroupAdApprovalStatuses'];
    }

    /**
     * Sets adGroupAdApprovalStatuses
     *
     * @param \Yahoo\Model\CampaignExportServiceApprovalStatus[]|null $adGroupAdApprovalStatuses adGroupAdApprovalStatuses
     *
     * @return $this
     */
    public function setAdGroupAdApprovalStatuses($adGroupAdApprovalStatuses)
    {
        $this->container['adGroupAdApprovalStatuses'] = $adGroupAdApprovalStatuses;

        return $this;
    }

    /**
     * Gets adGroupAdUserStatuses
     *
     * @return \Yahoo\Model\CampaignExportServiceUserStatus[]|null
     */
    public function getAdGroupAdUserStatuses()
    {
        return $this->container['adGroupAdUserStatuses'];
    }

    /**
     * Sets adGroupAdUserStatuses
     *
     * @param \Yahoo\Model\CampaignExportServiceUserStatus[]|null $adGroupAdUserStatuses adGroupAdUserStatuses
     *
     * @return $this
     */
    public function setAdGroupAdUserStatuses($adGroupAdUserStatuses)
    {
        $this->container['adGroupAdUserStatuses'] = $adGroupAdUserStatuses;

        return $this;
    }

    /**
     * Gets adGroupCriterionApprovalStatuses
     *
     * @return \Yahoo\Model\CampaignExportServiceApprovalStatus[]|null
     */
    public function getAdGroupCriterionApprovalStatuses()
    {
        return $this->container['adGroupCriterionApprovalStatuses'];
    }

    /**
     * Sets adGroupCriterionApprovalStatuses
     *
     * @param \Yahoo\Model\CampaignExportServiceApprovalStatus[]|null $adGroupCriterionApprovalStatuses adGroupCriterionApprovalStatuses
     *
     * @return $this
     */
    public function setAdGroupCriterionApprovalStatuses($adGroupCriterionApprovalStatuses)
    {
        $this->container['adGroupCriterionApprovalStatuses'] = $adGroupCriterionApprovalStatuses;

        return $this;
    }

    /**
     * Gets adGroupCriterionIds
     *
     * @return int[]|null
     */
    public function getAdGroupCriterionIds()
    {
        return $this->container['adGroupCriterionIds'];
    }

    /**
     * Sets adGroupCriterionIds
     *
     * @param int[]|null $adGroupCriterionIds <div lang=\"ja\">広告グループクライテリアIDです。<br>このフィールドは、省略可能となります。 </div><div lang=\"en\">Ad group criteria ID.<br>This field is optional. </div>
     *
     * @return $this
     */
    public function setAdGroupCriterionIds($adGroupCriterionIds)
    {
        $this->container['adGroupCriterionIds'] = $adGroupCriterionIds;

        return $this;
    }

    /**
     * Gets adGroupCriterionUserStatuses
     *
     * @return \Yahoo\Model\CampaignExportServiceUserStatus[]|null
     */
    public function getAdGroupCriterionUserStatuses()
    {
        return $this->container['adGroupCriterionUserStatuses'];
    }

    /**
     * Sets adGroupCriterionUserStatuses
     *
     * @param \Yahoo\Model\CampaignExportServiceUserStatus[]|null $adGroupCriterionUserStatuses adGroupCriterionUserStatuses
     *
     * @return $this
     */
    public function setAdGroupCriterionUserStatuses($adGroupCriterionUserStatuses)
    {
        $this->container['adGroupCriterionUserStatuses'] = $adGroupCriterionUserStatuses;

        return $this;
    }

    /**
     * Gets adGroupIds
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return $this->container['adGroupIds'];
    }

    /**
     * Sets adGroupIds
     *
     * @param int[]|null $adGroupIds <div lang=\"ja\">ダウンロード対象の広告グループIDです。<br>このフィールドは、省略可能となります。 </div><div lang=\"en\">Ad group ID of export objective.<br>This field is optional. </div>
     *
     * @return $this
     */
    public function setAdGroupIds($adGroupIds)
    {
        $this->container['adGroupIds'] = $adGroupIds;

        return $this;
    }

    /**
     * Gets adGroupUserStatuses
     *
     * @return \Yahoo\Model\CampaignExportServiceUserStatus[]|null
     */
    public function getAdGroupUserStatuses()
    {
        return $this->container['adGroupUserStatuses'];
    }

    /**
     * Sets adGroupUserStatuses
     *
     * @param \Yahoo\Model\CampaignExportServiceUserStatus[]|null $adGroupUserStatuses adGroupUserStatuses
     *
     * @return $this
     */
    public function setAdGroupUserStatuses($adGroupUserStatuses)
    {
        $this->container['adGroupUserStatuses'] = $adGroupUserStatuses;

        return $this;
    }

    /**
     * Gets adIds
     *
     * @return int[]|null
     */
    public function getAdIds()
    {
        return $this->container['adIds'];
    }

    /**
     * Sets adIds
     *
     * @param int[]|null $adIds <div lang=\"ja\">ダウンロード対象の広告IDです。<br>このフィールドは、省略可能となります。 </div><div lang=\"en\">Ad ID of export objective.<br>This field is optional. </div>
     *
     * @return $this
     */
    public function setAdIds($adIds)
    {
        $this->container['adIds'] = $adIds;

        return $this;
    }

    /**
     * Gets campaignCriterionIds
     *
     * @return int[]|null
     */
    public function getCampaignCriterionIds()
    {
        return $this->container['campaignCriterionIds'];
    }

    /**
     * Sets campaignCriterionIds
     *
     * @param int[]|null $campaignCriterionIds <div lang=\"ja\">キャンペーンクライテリアIDです。<br>このフィールドは、省略可能となります。 </div><div lang=\"en\">Campaign criteria ID.<br>This field is optional. </div>
     *
     * @return $this
     */
    public function setCampaignCriterionIds($campaignCriterionIds)
    {
        $this->container['campaignCriterionIds'] = $campaignCriterionIds;

        return $this;
    }

    /**
     * Gets campaignIds
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaignIds'];
    }

    /**
     * Sets campaignIds
     *
     * @param int[]|null $campaignIds <div lang=\"ja\">ダウンロード対象のキャンペーンIDです。<br>このフィールドは、省略可能となります。 </div><div lang=\"en\">Campaign ID of export objective.<br>This field is optional. </div>
     *
     * @return $this
     */
    public function setCampaignIds($campaignIds)
    {
        $this->container['campaignIds'] = $campaignIds;

        return $this;
    }

    /**
     * Gets campaignUserStatuses
     *
     * @return \Yahoo\Model\CampaignExportServiceUserStatus[]|null
     */
    public function getCampaignUserStatuses()
    {
        return $this->container['campaignUserStatuses'];
    }

    /**
     * Sets campaignUserStatuses
     *
     * @param \Yahoo\Model\CampaignExportServiceUserStatus[]|null $campaignUserStatuses campaignUserStatuses
     *
     * @return $this
     */
    public function setCampaignUserStatuses($campaignUserStatuses)
    {
        $this->container['campaignUserStatuses'] = $campaignUserStatuses;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return \Yahoo\Model\CampaignExportServiceEncoding|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param \Yahoo\Model\CampaignExportServiceEncoding|null $encoding encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets entityTypes
     *
     * @return \Yahoo\Model\CampaignExportServiceEntityType[]|null
     */
    public function getEntityTypes()
    {
        return $this->container['entityTypes'];
    }

    /**
     * Sets entityTypes
     *
     * @param \Yahoo\Model\CampaignExportServiceEntityType[]|null $entityTypes entityTypes
     *
     * @return $this
     */
    public function setEntityTypes($entityTypes)
    {
        $this->container['entityTypes'] = $entityTypes;

        return $this;
    }

    /**
     * Gets exportFields
     *
     * @return string[]|null
     */
    public function getExportFields()
    {
        return $this->container['exportFields'];
    }

    /**
     * Sets exportFields
     *
     * @param string[]|null $exportFields <div lang=\"ja\">エクスポートするフィールドを指定します。<br>このフィールドは、省略可能となります。 </div><div lang=\"en\">Select which field to export.<br>This field is optional. </div>
     *
     * @return $this
     */
    public function setExportFields($exportFields)
    {
        $this->container['exportFields'] = $exportFields;

        return $this;
    }

    /**
     * Gets jobName
     *
     * @return string|null
     */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
     * Sets jobName
     *
     * @param string|null $jobName <div lang=\"ja\">ダウンロードするジョブの名称です。<br>このフィールドは、省略可能となります。 </div><div lang=\"en\">Job information for export.<br>This field is optional. </div>
     *
     * @return $this
     */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return \Yahoo\Model\CampaignExportServiceLang|null
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param \Yahoo\Model\CampaignExportServiceLang|null $lang lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets output
     *
     * @return \Yahoo\Model\CampaignExportServiceOutput|null
     */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
     * Sets output
     *
     * @param \Yahoo\Model\CampaignExportServiceOutput|null $output output
     *
     * @return $this
     */
    public function setOutput($output)
    {
        $this->container['output'] = $output;

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

