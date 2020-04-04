<?php
/**
 * FeedItemServiceSelector
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
 * FeedItemServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedItemServiceSelectorオブジェクトは、フィードアイテムの情報を指定します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedItemServiceSelector describes the Feed item information.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedItemServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedItemServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'approvalStatuses' => '\Yahoo\Model\FeedItemServiceApprovalStatus[]',
        'feedIds' => 'int[]',
        'feedItemIds' => 'int[]',
        'numberResults' => 'int',
        'placeholderTypes' => '\Yahoo\Model\FeedItemServicePlaceholderType[]',
        'startIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'approvalStatuses' => null,
        'feedIds' => 'int64',
        'feedItemIds' => 'int64',
        'numberResults' => 'int32',
        'placeholderTypes' => null,
        'startIndex' => 'int32'
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
        'approvalStatuses' => 'approvalStatuses',
        'feedIds' => 'feedIds',
        'feedItemIds' => 'feedItemIds',
        'numberResults' => 'numberResults',
        'placeholderTypes' => 'placeholderTypes',
        'startIndex' => 'startIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'approvalStatuses' => 'setApprovalStatuses',
        'feedIds' => 'setFeedIds',
        'feedItemIds' => 'setFeedItemIds',
        'numberResults' => 'setNumberResults',
        'placeholderTypes' => 'setPlaceholderTypes',
        'startIndex' => 'setStartIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'approvalStatuses' => 'getApprovalStatuses',
        'feedIds' => 'getFeedIds',
        'feedItemIds' => 'getFeedItemIds',
        'numberResults' => 'getNumberResults',
        'placeholderTypes' => 'getPlaceholderTypes',
        'startIndex' => 'getStartIndex'
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
        $this->container['approvalStatuses'] = isset($data['approvalStatuses']) ? $data['approvalStatuses'] : null;
        $this->container['feedIds'] = isset($data['feedIds']) ? $data['feedIds'] : null;
        $this->container['feedItemIds'] = isset($data['feedItemIds']) ? $data['feedItemIds'] : null;
        $this->container['numberResults'] = isset($data['numberResults']) ? $data['numberResults'] : 500;
        $this->container['placeholderTypes'] = isset($data['placeholderTypes']) ? $data['placeholderTypes'] : null;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : 1;
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
        if (!is_null($this->container['numberResults']) && ($this->container['numberResults'] > 2000)) {
            $invalidProperties[] = "invalid value for 'numberResults', must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['numberResults']) && ($this->container['numberResults'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberResults', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['startIndex']) && ($this->container['startIndex'] < 1)) {
            $invalidProperties[] = "invalid value for 'startIndex', must be bigger than or equal to 1.";
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
     * @param int $accountId <div lang=\"ja\">検索条件：アカウントIDです。</div><div lang=\"en\">Search condition: Account ID.</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets approvalStatuses
     *
     * @return \Yahoo\Model\FeedItemServiceApprovalStatus[]|null
     */
    public function getApprovalStatuses()
    {
        return $this->container['approvalStatuses'];
    }

    /**
     * Sets approvalStatuses
     *
     * @param \Yahoo\Model\FeedItemServiceApprovalStatus[]|null $approvalStatuses approvalStatuses
     *
     * @return $this
     */
    public function setApprovalStatuses($approvalStatuses)
    {
        $this->container['approvalStatuses'] = $approvalStatuses;

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
     * @param int[]|null $feedIds <div lang=\"ja\">検索条件：フィードIDです。</div><div lang=\"en\">Search condition: Feed ID.</div>
     *
     * @return $this
     */
    public function setFeedIds($feedIds)
    {
        $this->container['feedIds'] = $feedIds;

        return $this;
    }

    /**
     * Gets feedItemIds
     *
     * @return int[]|null
     */
    public function getFeedItemIds()
    {
        return $this->container['feedItemIds'];
    }

    /**
     * Sets feedItemIds
     *
     * @param int[]|null $feedItemIds <div lang=\"ja\">検索条件：フィードアイテムIDです。</div><div lang=\"en\">Search condition: Feed Item ID.</div>
     *
     * @return $this
     */
    public function setFeedItemIds($feedItemIds)
    {
        $this->container['feedItemIds'] = $feedItemIds;

        return $this;
    }

    /**
     * Gets numberResults
     *
     * @return int|null
     */
    public function getNumberResults()
    {
        return $this->container['numberResults'];
    }

    /**
     * Sets numberResults
     *
     * @param int|null $numberResults <div lang=\"ja\">ページの最大件数です。このフィールドは、1以上を指定する必要があります。</div><div lang=\"en\">Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.</div>
     *
     * @return $this
     */
    public function setNumberResults($numberResults)
    {

        if (!is_null($numberResults) && ($numberResults > 2000)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling FeedItemServiceSelector., must be smaller than or equal to 2000.');
        }
        if (!is_null($numberResults) && ($numberResults < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling FeedItemServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['numberResults'] = $numberResults;

        return $this;
    }

    /**
     * Gets placeholderTypes
     *
     * @return \Yahoo\Model\FeedItemServicePlaceholderType[]|null
     */
    public function getPlaceholderTypes()
    {
        return $this->container['placeholderTypes'];
    }

    /**
     * Sets placeholderTypes
     *
     * @param \Yahoo\Model\FeedItemServicePlaceholderType[]|null $placeholderTypes placeholderTypes
     *
     * @return $this
     */
    public function setPlaceholderTypes($placeholderTypes)
    {
        $this->container['placeholderTypes'] = $placeholderTypes;

        return $this;
    }

    /**
     * Gets startIndex
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['startIndex'];
    }

    /**
     * Sets startIndex
     *
     * @param int|null $startIndex <div lang=\"ja\">ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。</div><div lang=\"en\">Index of the first result to return in this page. This field must be greater than or equal to 1.</div>
     *
     * @return $this
     */
    public function setStartIndex($startIndex)
    {

        if (!is_null($startIndex) && ($startIndex < 1)) {
            throw new \InvalidArgumentException('invalid value for $startIndex when calling FeedItemServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['startIndex'] = $startIndex;

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


