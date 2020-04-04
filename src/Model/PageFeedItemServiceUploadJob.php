<?php
/**
 * PageFeedItemServiceUploadJob
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
 * PageFeedItemServiceUploadJob Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;PageFeedItemServiceUploadJobオブジェクトは、ページフィードアイテム情報をダウンロードする処理内容を格納します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;PageFeedItemServiceUploadJob object retains contents of page feed item information for upload.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageFeedItemServiceUploadJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageFeedItemServiceUploadJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'endDate' => 'string',
        'errorCount' => 'int',
        'feedIds' => 'int[]',
        'jobId' => 'int',
        'progress' => 'int',
        'startDate' => 'string',
        'uploadJobStatus' => '\Yahoo\Model\PageFeedItemServiceUploadJobStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'endDate' => null,
        'errorCount' => 'int32',
        'feedIds' => 'int64',
        'jobId' => 'int64',
        'progress' => 'int32',
        'startDate' => null,
        'uploadJobStatus' => null
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
        'endDate' => 'endDate',
        'errorCount' => 'errorCount',
        'feedIds' => 'feedIds',
        'jobId' => 'jobId',
        'progress' => 'progress',
        'startDate' => 'startDate',
        'uploadJobStatus' => 'uploadJobStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'endDate' => 'setEndDate',
        'errorCount' => 'setErrorCount',
        'feedIds' => 'setFeedIds',
        'jobId' => 'setJobId',
        'progress' => 'setProgress',
        'startDate' => 'setStartDate',
        'uploadJobStatus' => 'setUploadJobStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'endDate' => 'getEndDate',
        'errorCount' => 'getErrorCount',
        'feedIds' => 'getFeedIds',
        'jobId' => 'getJobId',
        'progress' => 'getProgress',
        'startDate' => 'getStartDate',
        'uploadJobStatus' => 'getUploadJobStatus'
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
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['errorCount'] = isset($data['errorCount']) ? $data['errorCount'] : null;
        $this->container['feedIds'] = isset($data['feedIds']) ? $data['feedIds'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['uploadJobStatus'] = isset($data['uploadJobStatus']) ? $data['uploadJobStatus'] : null;
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
     * @param int|null $accountId <div lang=\"ja\">アカウントID</div><div lang=\"en\">Account ID</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|null $endDate <div lang=\"ja\">ジョブの終了日<br>形式：yyyyMMddHHmmss</div><div lang=\"en\">End date of job<br>Format:yyyyMMddHHmmss</div>
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets errorCount
     *
     * @return int|null
     */
    public function getErrorCount()
    {
        return $this->container['errorCount'];
    }

    /**
     * Sets errorCount
     *
     * @param int|null $errorCount <div lang=\"ja\">エラーの件数</div><div lang=\"en\">count of error occured</div>
     *
     * @return $this
     */
    public function setErrorCount($errorCount)
    {
        $this->container['errorCount'] = $errorCount;

        return $this;
    }

    /**
     * Gets feedIds
     *
     * @return int[]|null
     */
    public function getFeedIds()
    {
        return $this->container['feedIds'];
    }

    /**
     * Sets feedIds
     *
     * @param int[]|null $feedIds feedIds
     *
     * @return $this
     */
    public function setFeedIds($feedIds)
    {
        $this->container['feedIds'] = $feedIds;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return int|null
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param int|null $jobId <div lang=\"ja\">ジョブID</div><div lang=\"en\">Job ID.</div>
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return int|null
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param int|null $progress <div lang=\"ja\">ジョブの進捗状況</div><div lang=\"en\">Progress of page feed item job</div>
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string|null $startDate <div lang=\"ja\">ジョブの開始日<br>形式：yyyyMMddHHmmss</div><div lang=\"en\">Start date of job<br>Format:yyyyMMddHHmmss</div>
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets uploadJobStatus
     *
     * @return \Yahoo\Model\PageFeedItemServiceUploadJobStatus|null
     */
    public function getUploadJobStatus()
    {
        return $this->container['uploadJobStatus'];
    }

    /**
     * Sets uploadJobStatus
     *
     * @param \Yahoo\Model\PageFeedItemServiceUploadJobStatus|null $uploadJobStatus uploadJobStatus
     *
     * @return $this
     */
    public function setUploadJobStatus($uploadJobStatus)
    {
        $this->container['uploadJobStatus'] = $uploadJobStatus;

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

