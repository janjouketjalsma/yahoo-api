<?php
/**
 * DictionaryServiceGeographicLocation
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
 * DictionaryServiceGeographicLocation Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;DictionaryServiceGeographicLocationオブジェクトは、地域情報を格納します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;DictionaryServiceGeographicLocation contains geographic location information.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DictionaryServiceGeographicLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DictionaryServiceGeographicLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'child' => '\Yahoo\Model\DictionaryServiceGeographicLocation[]',
        'code' => 'string',
        'fullName' => 'string',
        'geographicLocationStatus' => '\Yahoo\Model\DictionaryServiceGeographicLocationStatus',
        'name' => 'string',
        'order' => 'string',
        'parent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'child' => null,
        'code' => null,
        'fullName' => null,
        'geographicLocationStatus' => null,
        'name' => null,
        'order' => null,
        'parent' => null
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
        'child' => 'child',
        'code' => 'code',
        'fullName' => 'fullName',
        'geographicLocationStatus' => 'geographicLocationStatus',
        'name' => 'name',
        'order' => 'order',
        'parent' => 'parent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'child' => 'setChild',
        'code' => 'setCode',
        'fullName' => 'setFullName',
        'geographicLocationStatus' => 'setGeographicLocationStatus',
        'name' => 'setName',
        'order' => 'setOrder',
        'parent' => 'setParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'child' => 'getChild',
        'code' => 'getCode',
        'fullName' => 'getFullName',
        'geographicLocationStatus' => 'getGeographicLocationStatus',
        'name' => 'getName',
        'order' => 'getOrder',
        'parent' => 'getParent'
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
        $this->container['child'] = isset($data['child']) ? $data['child'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['geographicLocationStatus'] = isset($data['geographicLocationStatus']) ? $data['geographicLocationStatus'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
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
     * Gets child
     *
     * @return \Yahoo\Model\DictionaryServiceGeographicLocation[]|null
     */
    public function getChild()
    {
        return $this->container['child'];
    }

    /**
     * Sets child
     *
     * @param \Yahoo\Model\DictionaryServiceGeographicLocation[]|null $child child
     *
     * @return $this
     */
    public function setChild($child)
    {
        $this->container['child'] = $child;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code <div lang=\"ja\">地域コードです。</div><div lang=\"en\">Geographic code</div>
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets fullName
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string|null $fullName <div lang=\"ja\">地域名(都道府県名からすべて)です。</div><div lang=\"en\">Name of places (Prefecture and all)</div>
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets geographicLocationStatus
     *
     * @return \Yahoo\Model\DictionaryServiceGeographicLocationStatus|null
     */
    public function getGeographicLocationStatus()
    {
        return $this->container['geographicLocationStatus'];
    }

    /**
     * Sets geographicLocationStatus
     *
     * @param \Yahoo\Model\DictionaryServiceGeographicLocationStatus|null $geographicLocationStatus geographicLocationStatus
     *
     * @return $this
     */
    public function setGeographicLocationStatus($geographicLocationStatus)
    {
        $this->container['geographicLocationStatus'] = $geographicLocationStatus;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name <div lang=\"ja\">地域名(市区町村のみ)です。</div><div lang=\"en\">Name of places (City Only)</div>
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string|null $order <div lang=\"ja\">並び順です。<br>下記の順序に基づいた連番となります。<br>都道府県は北海道、青森、・・・・沖縄の順<br>都道府県配下の市区町村は五十音順</div><div lang=\"en\">Order of list<br><br>Sequential number based on the order below.<br><br>- Prefecture is in order of Hokkaido, Aomori to Okinawa. (North to South)<br><br>- Cities under prefecture are listed in the order of the 50-character Japanese kana syllabary.</div>
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string|null $parent <div lang=\"ja\">上位地域コードです。</div><div lang=\"en\">Parent geographic code</div>
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

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


