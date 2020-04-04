<?php
/**
 * Feed
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
 * Feed Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Feedオブジェクトは、自動データ挿入のリストを格納します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed object is the list of Data elements on auto data insertion.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Feed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Feed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'domain' => 'string',
        'feedAttribute' => '\Yahoo\Model\FeedServiceAttribute[]',
        'feedId' => 'int',
        'feedName' => 'string',
        'feedTrackId' => 'int',
        'placeholderType' => '\Yahoo\Model\FeedServicePlaceholderType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'domain' => null,
        'feedAttribute' => null,
        'feedId' => 'int64',
        'feedName' => null,
        'feedTrackId' => 'int64',
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
        'domain' => 'domain',
        'feedAttribute' => 'feedAttribute',
        'feedId' => 'feedId',
        'feedName' => 'feedName',
        'feedTrackId' => 'feedTrackId',
        'placeholderType' => 'placeholderType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'domain' => 'setDomain',
        'feedAttribute' => 'setFeedAttribute',
        'feedId' => 'setFeedId',
        'feedName' => 'setFeedName',
        'feedTrackId' => 'setFeedTrackId',
        'placeholderType' => 'setPlaceholderType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'domain' => 'getDomain',
        'feedAttribute' => 'getFeedAttribute',
        'feedId' => 'getFeedId',
        'feedName' => 'getFeedName',
        'feedTrackId' => 'getFeedTrackId',
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['feedAttribute'] = isset($data['feedAttribute']) ? $data['feedAttribute'] : null;
        $this->container['feedId'] = isset($data['feedId']) ? $data['feedId'] : null;
        $this->container['feedName'] = isset($data['feedName']) ? $data['feedName'] : null;
        $this->container['feedTrackId'] = isset($data['feedTrackId']) ? $data['feedTrackId'] : null;
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
     * @param int|null $accountId <div lang=\"ja\">アカウントIDです。<br>※入稿の仕様変更により不要になりました。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Account ID.<br>*Not required by design change on editorials.　<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain <div lang=\"ja\">ドメインです。<br> このフィールドは、ADD時に省略可能となり、SETおよびREMOVE時に無視されます。</div><div lang=\"en\">Domain.　<br>This field is optional in ADD operation, and will be ignored in SET and REMOVE operation.</div>
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets feedAttribute
     *
     * @return \Yahoo\Model\FeedServiceAttribute[]|null
     */
    public function getFeedAttribute()
    {
        return $this->container['feedAttribute'];
    }

    /**
     * Sets feedAttribute
     *
     * @param \Yahoo\Model\FeedServiceAttribute[]|null $feedAttribute feedAttribute
     *
     * @return $this
     */
    public function setFeedAttribute($feedAttribute)
    {
        $this->container['feedAttribute'] = $feedAttribute;

        return $this;
    }

    /**
     * Gets feedId
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param int|null $feedId <div lang=\"ja\">FeedIDです。<br>このフィールドは、SETおよびREMOVE時に必須となり、ADD時は無視されます。</div><div lang=\"en\">Feed ID. <br>This field is required in SET and REMOVE operation, and will be ignored in ADD operation.</div>
     *
     * @return $this
     */
    public function setFeedId($feedId)
    {
        $this->container['feedId'] = $feedId;

        return $this;
    }

    /**
     * Gets feedName
     *
     * @return string|null
     */
    public function getFeedName()
    {
        return $this->container['feedName'];
    }

    /**
     * Sets feedName
     *
     * @param string|null $feedName <div lang=\"ja\">Feedのリスト名です。<br>このフィールドは、ADD時に必須となり、SETおよびREMOVE時に無視されます。</div><div lang=\"en\">List name of Feed. <br>This field is required in ADD operation, and will be ignored in SET and REMOVE operation.</div>
     *
     * @return $this
     */
    public function setFeedName($feedName)
    {
        $this->container['feedName'] = $feedName;

        return $this;
    }

    /**
     * Gets feedTrackId
     *
     * @return int|null
     */
    public function getFeedTrackId()
    {
        return $this->container['feedTrackId'];
    }

    /**
     * Sets feedTrackId
     *
     * @param int|null $feedTrackId <div lang=\"ja\">Feedのトラッキング用IDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Tracking ID of Feed. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setFeedTrackId($feedTrackId)
    {
        $this->container['feedTrackId'] = $feedTrackId;

        return $this;
    }

    /**
     * Gets placeholderType
     *
     * @return \Yahoo\Model\FeedServicePlaceholderType|null
     */
    public function getPlaceholderType()
    {
        return $this->container['placeholderType'];
    }

    /**
     * Sets placeholderType
     *
     * @param \Yahoo\Model\FeedServicePlaceholderType|null $placeholderType placeholderType
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


