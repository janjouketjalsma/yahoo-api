<?php
/**
 * AdGroupCriterionServiceCriterion
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
 * AdGroupCriterionServiceCriterion Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupCriterionServiceCriterionオブジェクトは、クライテリアを表します。※広告グループ用クライテリアです。&lt;br&gt;このフィールドは、いずれの場合でも必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupCriterionServiceCriterion object displays criteria information. *Ad group criteria.&lt;br&gt;This field is required in any cases.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupCriterionServiceCriterion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupCriterionServiceCriterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'criterionId' => 'int',
        'criterionTrackId' => 'int',
        'criterionType' => '\Yahoo\Model\AdGroupCriterionServiceCriterionType',
        'keyword' => '\Yahoo\Model\AdGroupCriterionServiceKeyword'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'criterionId' => 'int64',
        'criterionTrackId' => 'int64',
        'criterionType' => null,
        'keyword' => null
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
        'criterionId' => 'criterionId',
        'criterionTrackId' => 'criterionTrackId',
        'criterionType' => 'criterionType',
        'keyword' => 'keyword'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'criterionId' => 'setCriterionId',
        'criterionTrackId' => 'setCriterionTrackId',
        'criterionType' => 'setCriterionType',
        'keyword' => 'setKeyword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'criterionId' => 'getCriterionId',
        'criterionTrackId' => 'getCriterionTrackId',
        'criterionType' => 'getCriterionType',
        'keyword' => 'getKeyword'
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
        $this->container['criterionId'] = isset($data['criterionId']) ? $data['criterionId'] : null;
        $this->container['criterionTrackId'] = isset($data['criterionTrackId']) ? $data['criterionTrackId'] : null;
        $this->container['criterionType'] = isset($data['criterionType']) ? $data['criterionType'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
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
     * Gets criterionId
     *
     * @return int|null
     */
    public function getCriterionId()
    {
        return $this->container['criterionId'];
    }

    /**
     * Sets criterionId
     *
     * @param int|null $criterionId <div lang=\"ja\">クライテリアIDです。<br>SETおよびREMOVE時、このフィールドは必須となります。</div><div lang=\"en\">AdGroupCriterionServiceCriterion ID.<br>This field is required in SET and REMOVE operation.</div>
     *
     * @return $this
     */
    public function setCriterionId($criterionId)
    {
        $this->container['criterionId'] = $criterionId;

        return $this;
    }

    /**
     * Gets criterionTrackId
     *
     * @return int|null
     */
    public function getCriterionTrackId()
    {
        return $this->container['criterionTrackId'];
    }

    /**
     * Sets criterionTrackId
     *
     * @param int|null $criterionTrackId <div lang=\"ja\">トラッキング用クライテリアIDです。</div><div lang=\"en\">AdGroupCriterionServiceCriterion ID for tracking.</div>
     *
     * @return $this
     */
    public function setCriterionTrackId($criterionTrackId)
    {
        $this->container['criterionTrackId'] = $criterionTrackId;

        return $this;
    }

    /**
     * Gets criterionType
     *
     * @return \Yahoo\Model\AdGroupCriterionServiceCriterionType|null
     */
    public function getCriterionType()
    {
        return $this->container['criterionType'];
    }

    /**
     * Sets criterionType
     *
     * @param \Yahoo\Model\AdGroupCriterionServiceCriterionType|null $criterionType criterionType
     *
     * @return $this
     */
    public function setCriterionType($criterionType)
    {
        $this->container['criterionType'] = $criterionType;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return \Yahoo\Model\AdGroupCriterionServiceKeyword|null
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param \Yahoo\Model\AdGroupCriterionServiceKeyword|null $keyword keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

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


