<?php
/**
 * ConversionTrackerServicePage
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
 * ConversionTrackerServicePage Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ConversionTrackerServicePageオブジェクトは、取得されるコンバージョントラッカー情報のエントリーを表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTrackerServicePage object shows entry of ConversionTracker.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServicePage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionTrackerServicePage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalAllConversionValue' => 'string',
        'totalAllConversions' => 'int',
        'totalConversionValue' => 'string',
        'totalConversions' => 'int',
        'totalNumEntries' => 'int',
        'values' => '\Yahoo\Model\ConversionTrackerServiceValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'totalAllConversionValue' => null,
        'totalAllConversions' => 'int64',
        'totalConversionValue' => null,
        'totalConversions' => 'int64',
        'totalNumEntries' => 'int32',
        'values' => null
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
        'totalAllConversionValue' => 'totalAllConversionValue',
        'totalAllConversions' => 'totalAllConversions',
        'totalConversionValue' => 'totalConversionValue',
        'totalConversions' => 'totalConversions',
        'totalNumEntries' => 'totalNumEntries',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalAllConversionValue' => 'setTotalAllConversionValue',
        'totalAllConversions' => 'setTotalAllConversions',
        'totalConversionValue' => 'setTotalConversionValue',
        'totalConversions' => 'setTotalConversions',
        'totalNumEntries' => 'setTotalNumEntries',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalAllConversionValue' => 'getTotalAllConversionValue',
        'totalAllConversions' => 'getTotalAllConversions',
        'totalConversionValue' => 'getTotalConversionValue',
        'totalConversions' => 'getTotalConversions',
        'totalNumEntries' => 'getTotalNumEntries',
        'values' => 'getValues'
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
        $this->container['totalAllConversionValue'] = isset($data['totalAllConversionValue']) ? $data['totalAllConversionValue'] : null;
        $this->container['totalAllConversions'] = isset($data['totalAllConversions']) ? $data['totalAllConversions'] : null;
        $this->container['totalConversionValue'] = isset($data['totalConversionValue']) ? $data['totalConversionValue'] : null;
        $this->container['totalConversions'] = isset($data['totalConversions']) ? $data['totalConversions'] : null;
        $this->container['totalNumEntries'] = isset($data['totalNumEntries']) ? $data['totalNumEntries'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
     * Gets totalAllConversionValue
     *
     * @return string|null
     */
    public function getTotalAllConversionValue()
    {
        return $this->container['totalAllConversionValue'];
    }

    /**
     * Sets totalAllConversionValue
     *
     * @param string|null $totalAllConversionValue <div lang=\"ja\">自動入札設定の対象コンバージョン値と、対象外コンバージョン値の合計です。</div><div lang=\"en\">Total value of conversions on Auto Bidding setting and the value of conversions not on Auto Bidding setting.</div>
     *
     * @return $this
     */
    public function setTotalAllConversionValue($totalAllConversionValue)
    {
        $this->container['totalAllConversionValue'] = $totalAllConversionValue;

        return $this;
    }

    /**
     * Gets totalAllConversions
     *
     * @return int|null
     */
    public function getTotalAllConversions()
    {
        return $this->container['totalAllConversions'];
    }

    /**
     * Sets totalAllConversions
     *
     * @param int|null $totalAllConversions <div lang=\"ja\">自動入札設定の対象コンバージョン数と、対象外コンバージョン数の合計です。</div><div lang=\"en\">Total value of conversions on Auto Bidding setting and the value of conversions not on Auto Bidding setting.</div>
     *
     * @return $this
     */
    public function setTotalAllConversions($totalAllConversions)
    {
        $this->container['totalAllConversions'] = $totalAllConversions;

        return $this;
    }

    /**
     * Gets totalConversionValue
     *
     * @return string|null
     */
    public function getTotalConversionValue()
    {
        return $this->container['totalConversionValue'];
    }

    /**
     * Sets totalConversionValue
     *
     * @param string|null $totalConversionValue <div lang=\"ja\">自動入札設定の対象コンバージョン値の合計です。</div><div lang=\"en\">Total value of conversions on Auto Bidding setting.</div>
     *
     * @return $this
     */
    public function setTotalConversionValue($totalConversionValue)
    {
        $this->container['totalConversionValue'] = $totalConversionValue;

        return $this;
    }

    /**
     * Gets totalConversions
     *
     * @return int|null
     */
    public function getTotalConversions()
    {
        return $this->container['totalConversions'];
    }

    /**
     * Sets totalConversions
     *
     * @param int|null $totalConversions <div lang=\"ja\">自動入札設定の対象コンバージョン数の合計です。</div><div lang=\"en\">Total value of conversions on Auto Bidding setting.</div>
     *
     * @return $this
     */
    public function setTotalConversions($totalConversions)
    {
        $this->container['totalConversions'] = $totalConversions;

        return $this;
    }

    /**
     * Gets totalNumEntries
     *
     * @return int|null
     */
    public function getTotalNumEntries()
    {
        return $this->container['totalNumEntries'];
    }

    /**
     * Sets totalNumEntries
     *
     * @param int|null $totalNumEntries <div lang=\"ja\">取得される項目の総件数です。</div><div lang=\"en\">Total number of entries in the result that this page is a part of.</div>
     *
     * @return $this
     */
    public function setTotalNumEntries($totalNumEntries)
    {
        $this->container['totalNumEntries'] = $totalNumEntries;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \Yahoo\Model\ConversionTrackerServiceValue[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \Yahoo\Model\ConversionTrackerServiceValue[]|null $values values
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


