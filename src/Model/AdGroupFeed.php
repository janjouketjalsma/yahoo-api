<?php
/**
 * AdGroupFeed
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
 * AdGroupFeed Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupFeedオブジェクトは、広告グループに紐づけられたFeedItem情報を表します。&lt;br&gt;SET時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupFeed describes the FeedItem information connected to ad group.&lt;br&gt;This field is required in SET operation.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupFeed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupFeed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'adGroupId' => 'int',
        'campaignId' => 'int',
        'feedItemId' => 'int',
        'placeholderType' => '\Yahoo\Model\AdGroupFeedServicePlaceholderType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'adGroupId' => 'int64',
        'campaignId' => 'int64',
        'feedItemId' => 'int64',
        'placeholderType' => null
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
        'adGroupId' => 'adGroupId',
        'campaignId' => 'campaignId',
        'feedItemId' => 'feedItemId',
        'placeholderType' => 'placeholderType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'adGroupId' => 'setAdGroupId',
        'campaignId' => 'setCampaignId',
        'feedItemId' => 'setFeedItemId',
        'placeholderType' => 'setPlaceholderType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'adGroupId' => 'getAdGroupId',
        'campaignId' => 'getCampaignId',
        'feedItemId' => 'getFeedItemId',
        'placeholderType' => 'getPlaceholderType'
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
        $this->container['adGroupId'] = isset($data['adGroupId']) ? $data['adGroupId'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['feedItemId'] = isset($data['feedItemId']) ? $data['feedItemId'] : null;
        $this->container['placeholderType'] = isset($data['placeholderType']) ? $data['placeholderType'] : null;
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
     * Gets adGroupId
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->container['adGroupId'];
    }

    /**
     * Sets adGroupId
     *
     * @param int|null $adGroupId <div lang=\"ja\">広告グループIDです。</div><div lang=\"en\">Ad group ID.</div>
     *
     * @return $this
     */
    public function setAdGroupId($adGroupId)
    {
        $this->container['adGroupId'] = $adGroupId;

        return $this;
    }

    /**
     * Gets campaignId
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int|null $campaignId <div lang=\"ja\">キャンペーンIDです。</div><div lang=\"en\">Campaign ID.</div>
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets feedItemId
     *
     * @return int|null
     */
    public function getFeedItemId()
    {
        return $this->container['feedItemId'];
    }

    /**
     * Sets feedItemId
     *
     * @param int|null $feedItemId <div lang=\"ja\">FeedItem情報のIDです。<br>SET時、このフィールドは必須となります。</div><div lang=\"en\">FeedItem information ID.<br>This field is required in SET operation.</div>
     *
     * @return $this
     */
    public function setFeedItemId($feedItemId)
    {
        $this->container['feedItemId'] = $feedItemId;

        return $this;
    }

    /**
     * Gets placeholderType
     *
     * @return \Yahoo\Model\AdGroupFeedServicePlaceholderType|null
     */
    public function getPlaceholderType()
    {
        return $this->container['placeholderType'];
    }

    /**
     * Sets placeholderType
     *
     * @param \Yahoo\Model\AdGroupFeedServicePlaceholderType|null $placeholderType placeholderType
     *
     * @return $this
     */
    public function setPlaceholderType($placeholderType)
    {
        $this->container['placeholderType'] = $placeholderType;

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

