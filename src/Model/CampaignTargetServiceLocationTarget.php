<?php
/**
 * CampaignTargetServiceLocationTarget
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
 * CampaignTargetServiceLocationTarget Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignTargetServiceLocationTargetオブジェクトは、地域ターゲティング設定です。&lt;br&gt;このフィールドは、ADDおよびSET時に省略可能となります。&lt;br&gt; ※targetTypeがLOCATIONの場合、このフィールドはADD時に必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignTargetServiceLocationTarget object is a location target setting. &lt;br&gt;This field is optional in ADD and SET operation.  &lt;br&gt; *If targetType is LOCATION,  this field is required in ADD operation. &lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignTargetServiceLocationTarget implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignTargetServiceLocationTarget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cityNameEN' => 'string',
        'cityNameJA' => 'string',
        'excludedType' => '\Yahoo\Model\CampaignTargetServiceExcludedType',
        'provinceNameEN' => 'string',
        'provinceNameJA' => 'string',
        'targetingStatus' => '\Yahoo\Model\CampaignTargetServiceTargetingStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cityNameEN' => null,
        'cityNameJA' => null,
        'excludedType' => null,
        'provinceNameEN' => null,
        'provinceNameJA' => null,
        'targetingStatus' => null
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
        'cityNameEN' => 'cityNameEN',
        'cityNameJA' => 'cityNameJA',
        'excludedType' => 'excludedType',
        'provinceNameEN' => 'provinceNameEN',
        'provinceNameJA' => 'provinceNameJA',
        'targetingStatus' => 'targetingStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cityNameEN' => 'setCityNameEN',
        'cityNameJA' => 'setCityNameJA',
        'excludedType' => 'setExcludedType',
        'provinceNameEN' => 'setProvinceNameEN',
        'provinceNameJA' => 'setProvinceNameJA',
        'targetingStatus' => 'setTargetingStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cityNameEN' => 'getCityNameEN',
        'cityNameJA' => 'getCityNameJA',
        'excludedType' => 'getExcludedType',
        'provinceNameEN' => 'getProvinceNameEN',
        'provinceNameJA' => 'getProvinceNameJA',
        'targetingStatus' => 'getTargetingStatus'
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
        $this->container['cityNameEN'] = isset($data['cityNameEN']) ? $data['cityNameEN'] : null;
        $this->container['cityNameJA'] = isset($data['cityNameJA']) ? $data['cityNameJA'] : null;
        $this->container['excludedType'] = isset($data['excludedType']) ? $data['excludedType'] : null;
        $this->container['provinceNameEN'] = isset($data['provinceNameEN']) ? $data['provinceNameEN'] : null;
        $this->container['provinceNameJA'] = isset($data['provinceNameJA']) ? $data['provinceNameJA'] : null;
        $this->container['targetingStatus'] = isset($data['targetingStatus']) ? $data['targetingStatus'] : null;
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
     * Gets cityNameEN
     *
     * @return string|null
     */
    public function getCityNameEN()
    {
        return $this->container['cityNameEN'];
    }

    /**
     * Sets cityNameEN
     *
     * @param string|null $cityNameEN <div lang=\"ja\">市区町村名（英語）です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">City(English). <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setCityNameEN($cityNameEN)
    {
        $this->container['cityNameEN'] = $cityNameEN;

        return $this;
    }

    /**
     * Gets cityNameJA
     *
     * @return string|null
     */
    public function getCityNameJA()
    {
        return $this->container['cityNameJA'];
    }

    /**
     * Sets cityNameJA
     *
     * @param string|null $cityNameJA <div lang=\"ja\">市区町村名（日本語）です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">City(Japanese). <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setCityNameJA($cityNameJA)
    {
        $this->container['cityNameJA'] = $cityNameJA;

        return $this;
    }

    /**
     * Gets excludedType
     *
     * @return \Yahoo\Model\CampaignTargetServiceExcludedType|null
     */
    public function getExcludedType()
    {
        return $this->container['excludedType'];
    }

    /**
     * Sets excludedType
     *
     * @param \Yahoo\Model\CampaignTargetServiceExcludedType|null $excludedType excludedType
     *
     * @return $this
     */
    public function setExcludedType($excludedType)
    {
        $this->container['excludedType'] = $excludedType;

        return $this;
    }

    /**
     * Gets provinceNameEN
     *
     * @return string|null
     */
    public function getProvinceNameEN()
    {
        return $this->container['provinceNameEN'];
    }

    /**
     * Sets provinceNameEN
     *
     * @param string|null $provinceNameEN <div lang=\"ja\">都道府県名（英語）です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Prefecture(English). <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setProvinceNameEN($provinceNameEN)
    {
        $this->container['provinceNameEN'] = $provinceNameEN;

        return $this;
    }

    /**
     * Gets provinceNameJA
     *
     * @return string|null
     */
    public function getProvinceNameJA()
    {
        return $this->container['provinceNameJA'];
    }

    /**
     * Sets provinceNameJA
     *
     * @param string|null $provinceNameJA <div lang=\"ja\">都道府県名（日本語）です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Prefecture(Japanese). <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setProvinceNameJA($provinceNameJA)
    {
        $this->container['provinceNameJA'] = $provinceNameJA;

        return $this;
    }

    /**
     * Gets targetingStatus
     *
     * @return \Yahoo\Model\CampaignTargetServiceTargetingStatus|null
     */
    public function getTargetingStatus()
    {
        return $this->container['targetingStatus'];
    }

    /**
     * Sets targetingStatus
     *
     * @param \Yahoo\Model\CampaignTargetServiceTargetingStatus|null $targetingStatus targetingStatus
     *
     * @return $this
     */
    public function setTargetingStatus($targetingStatus)
    {
        $this->container['targetingStatus'] = $targetingStatus;

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

