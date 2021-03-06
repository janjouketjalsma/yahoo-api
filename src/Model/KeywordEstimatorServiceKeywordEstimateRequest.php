<?php
/**
 * KeywordEstimatorServiceKeywordEstimateRequest
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
 * KeywordEstimatorServiceKeywordEstimateRequest Class Doc Comment
 *
 * @category Class
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class KeywordEstimatorServiceKeywordEstimateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KeywordEstimatorServiceKeywordEstimateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'estimateKeyword' => '\Yahoo\Model\KeywordEstimatorServiceEstimateKeyword',
        'isNegativeBool' => '\Yahoo\Model\KeywordEstimatorServiceIsNegativeBool',
        'maxCpc' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'estimateKeyword' => null,
        'isNegativeBool' => null,
        'maxCpc' => 'int64'
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
        'estimateKeyword' => 'estimateKeyword',
        'isNegativeBool' => 'isNegativeBool',
        'maxCpc' => 'maxCpc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'estimateKeyword' => 'setEstimateKeyword',
        'isNegativeBool' => 'setIsNegativeBool',
        'maxCpc' => 'setMaxCpc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'estimateKeyword' => 'getEstimateKeyword',
        'isNegativeBool' => 'getIsNegativeBool',
        'maxCpc' => 'getMaxCpc'
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
        $this->container['estimateKeyword'] = isset($data['estimateKeyword']) ? $data['estimateKeyword'] : null;
        $this->container['isNegativeBool'] = isset($data['isNegativeBool']) ? $data['isNegativeBool'] : null;
        $this->container['maxCpc'] = isset($data['maxCpc']) ? $data['maxCpc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['estimateKeyword'] === null) {
            $invalidProperties[] = "'estimateKeyword' can't be null";
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
     * Gets estimateKeyword
     *
     * @return \Yahoo\Model\KeywordEstimatorServiceEstimateKeyword
     */
    public function getEstimateKeyword()
    {
        return $this->container['estimateKeyword'];
    }

    /**
     * Sets estimateKeyword
     *
     * @param \Yahoo\Model\KeywordEstimatorServiceEstimateKeyword $estimateKeyword estimateKeyword
     *
     * @return $this
     */
    public function setEstimateKeyword($estimateKeyword)
    {
        $this->container['estimateKeyword'] = $estimateKeyword;

        return $this;
    }

    /**
     * Gets isNegativeBool
     *
     * @return \Yahoo\Model\KeywordEstimatorServiceIsNegativeBool|null
     */
    public function getIsNegativeBool()
    {
        return $this->container['isNegativeBool'];
    }

    /**
     * Sets isNegativeBool
     *
     * @param \Yahoo\Model\KeywordEstimatorServiceIsNegativeBool|null $isNegativeBool isNegativeBool
     *
     * @return $this
     */
    public function setIsNegativeBool($isNegativeBool)
    {
        $this->container['isNegativeBool'] = $isNegativeBool;

        return $this;
    }

    /**
     * Gets maxCpc
     *
     * @return int|null
     */
    public function getMaxCpc()
    {
        return $this->container['maxCpc'];
    }

    /**
     * Sets maxCpc
     *
     * @param int|null $maxCpc <div lang=\"ja\">キーワードの見積もりに使用する上限クリック単価です。</div> <div lang=\"en\">maxCpc for the keyword</div>
     *
     * @return $this
     */
    public function setMaxCpc($maxCpc)
    {
        $this->container['maxCpc'] = $maxCpc;

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


