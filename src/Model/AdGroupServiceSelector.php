<?php
/**
 * AdGroupServiceSelector
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
 * AdGroupServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupServiceSelectorオブジェクトは、指定された広告グループを表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupServiceSelector object displays the specified ad group.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'adGroupIds' => 'int[]',
        'biddingStrategyIds' => 'int[]',
        'campaignIds' => 'int[]',
        'containsLabelId' => '\Yahoo\Model\AdGroupServiceContainsLabelId',
        'labelIds' => 'int[]',
        'numberResults' => 'int',
        'startIndex' => 'int',
        'userStatuses' => '\Yahoo\Model\AdGroupServiceUserStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'adGroupIds' => 'int64',
        'biddingStrategyIds' => 'int64',
        'campaignIds' => 'int64',
        'containsLabelId' => null,
        'labelIds' => 'int64',
        'numberResults' => 'int32',
        'startIndex' => 'int32',
        'userStatuses' => null
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
        'adGroupIds' => 'adGroupIds',
        'biddingStrategyIds' => 'biddingStrategyIds',
        'campaignIds' => 'campaignIds',
        'containsLabelId' => 'containsLabelId',
        'labelIds' => 'labelIds',
        'numberResults' => 'numberResults',
        'startIndex' => 'startIndex',
        'userStatuses' => 'userStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'adGroupIds' => 'setAdGroupIds',
        'biddingStrategyIds' => 'setBiddingStrategyIds',
        'campaignIds' => 'setCampaignIds',
        'containsLabelId' => 'setContainsLabelId',
        'labelIds' => 'setLabelIds',
        'numberResults' => 'setNumberResults',
        'startIndex' => 'setStartIndex',
        'userStatuses' => 'setUserStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'adGroupIds' => 'getAdGroupIds',
        'biddingStrategyIds' => 'getBiddingStrategyIds',
        'campaignIds' => 'getCampaignIds',
        'containsLabelId' => 'getContainsLabelId',
        'labelIds' => 'getLabelIds',
        'numberResults' => 'getNumberResults',
        'startIndex' => 'getStartIndex',
        'userStatuses' => 'getUserStatuses'
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
        $this->container['adGroupIds'] = isset($data['adGroupIds']) ? $data['adGroupIds'] : null;
        $this->container['biddingStrategyIds'] = isset($data['biddingStrategyIds']) ? $data['biddingStrategyIds'] : null;
        $this->container['campaignIds'] = isset($data['campaignIds']) ? $data['campaignIds'] : null;
        $this->container['containsLabelId'] = isset($data['containsLabelId']) ? $data['containsLabelId'] : null;
        $this->container['labelIds'] = isset($data['labelIds']) ? $data['labelIds'] : null;
        $this->container['numberResults'] = isset($data['numberResults']) ? $data['numberResults'] : 500;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : 1;
        $this->container['userStatuses'] = isset($data['userStatuses']) ? $data['userStatuses'] : null;
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
        if (!is_null($this->container['numberResults']) && ($this->container['numberResults'] > 10000)) {
            $invalidProperties[] = "invalid value for 'numberResults', must be smaller than or equal to 10000.";
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
     * @param int $accountId <div lang=\"ja\">検索条件：アカウントID</div><div lang=\"en\">Search condition: Account ID</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

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
     * @param int[]|null $adGroupIds <div lang=\"ja\">検索条件：広告グループID</div><div lang=\"en\">Search condition: Ad Group ID</div>
     *
     * @return $this
     */
    public function setAdGroupIds($adGroupIds)
    {
        $this->container['adGroupIds'] = $adGroupIds;

        return $this;
    }

    /**
     * Gets biddingStrategyIds
     *
     * @return int[]|null
     */
    public function getBiddingStrategyIds()
    {
        return $this->container['biddingStrategyIds'];
    }

    /**
     * Sets biddingStrategyIds
     *
     * @param int[]|null $biddingStrategyIds <div lang=\"ja\">検索条件：自動入札ID</div><div lang=\"en\">Search condition: Auto Bidding ID</div>
     *
     * @return $this
     */
    public function setBiddingStrategyIds($biddingStrategyIds)
    {
        $this->container['biddingStrategyIds'] = $biddingStrategyIds;

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
     * @param int[]|null $campaignIds <div lang=\"ja\">検索条件：キャンペーンID</div><div lang=\"en\">Search condition: Campaign ID</div>
     *
     * @return $this
     */
    public function setCampaignIds($campaignIds)
    {
        $this->container['campaignIds'] = $campaignIds;

        return $this;
    }

    /**
     * Gets containsLabelId
     *
     * @return \Yahoo\Model\AdGroupServiceContainsLabelId|null
     */
    public function getContainsLabelId()
    {
        return $this->container['containsLabelId'];
    }

    /**
     * Sets containsLabelId
     *
     * @param \Yahoo\Model\AdGroupServiceContainsLabelId|null $containsLabelId containsLabelId
     *
     * @return $this
     */
    public function setContainsLabelId($containsLabelId)
    {
        $this->container['containsLabelId'] = $containsLabelId;

        return $this;
    }

    /**
     * Gets labelIds
     *
     * @return int[]|null
     */
    public function getLabelIds()
    {
        return $this->container['labelIds'];
    }

    /**
     * Sets labelIds
     *
     * @param int[]|null $labelIds <div lang=\"ja\">検索条件：ラベルID</div><div lang=\"en\">Search condition: Label ID</div>
     *
     * @return $this
     */
    public function setLabelIds($labelIds)
    {
        $this->container['labelIds'] = $labelIds;

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

        if (!is_null($numberResults) && ($numberResults > 10000)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling AdGroupServiceSelector., must be smaller than or equal to 10000.');
        }
        if (!is_null($numberResults) && ($numberResults < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling AdGroupServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['numberResults'] = $numberResults;

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
            throw new \InvalidArgumentException('invalid value for $startIndex when calling AdGroupServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['startIndex'] = $startIndex;

        return $this;
    }

    /**
     * Gets userStatuses
     *
     * @return \Yahoo\Model\AdGroupServiceUserStatus[]|null
     */
    public function getUserStatuses()
    {
        return $this->container['userStatuses'];
    }

    /**
     * Sets userStatuses
     *
     * @param \Yahoo\Model\AdGroupServiceUserStatus[]|null $userStatuses userStatuses
     *
     * @return $this
     */
    public function setUserStatuses($userStatuses)
    {
        $this->container['userStatuses'] = $userStatuses;

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


