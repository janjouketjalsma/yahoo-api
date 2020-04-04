<?php
/**
 * AdGroupAdServiceExtendedTextAd
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
 * AdGroupAdServiceExtendedTextAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupAdServiceExtendedTextAdオブジェクトは、拡大テキスト広告に関する情報を表します。&lt;br&gt;ADD時、このフィールドは省略可能となります。※adTypeがEXTENDED_TEXT_ADの場合は必須です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupAdServiceExtendedTextAd object describes the information of Extended Text Ad.&lt;br&gt;This field is optional in ADD operation. *If adType is EXTENDED_TEXT_AD, this field is required.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceExtendedTextAd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAdServiceExtendedTextAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'headline2' => 'string',
        'headline3' => 'string',
        'description2' => 'string',
        'path1' => 'string',
        'path2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'headline2' => null,
        'headline3' => null,
        'description2' => null,
        'path1' => null,
        'path2' => null
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
        'headline2' => 'headline2',
        'headline3' => 'headline3',
        'description2' => 'description2',
        'path1' => 'path1',
        'path2' => 'path2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headline2' => 'setHeadline2',
        'headline3' => 'setHeadline3',
        'description2' => 'setDescription2',
        'path1' => 'setPath1',
        'path2' => 'setPath2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headline2' => 'getHeadline2',
        'headline3' => 'getHeadline3',
        'description2' => 'getDescription2',
        'path1' => 'getPath1',
        'path2' => 'getPath2'
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
        $this->container['headline2'] = isset($data['headline2']) ? $data['headline2'] : null;
        $this->container['headline3'] = isset($data['headline3']) ? $data['headline3'] : null;
        $this->container['description2'] = isset($data['description2']) ? $data['description2'] : null;
        $this->container['path1'] = isset($data['path1']) ? $data['path1'] : null;
        $this->container['path2'] = isset($data['path2']) ? $data['path2'] : null;
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
     * Gets headline2
     *
     * @return string|null
     */
    public function getHeadline2()
    {
        return $this->container['headline2'];
    }

    /**
     * Sets headline2
     *
     * @param string|null $headline2 <div lang=\"ja\">2行目のタイトルです。<br>ADD時、このフィールドは必須となります。</div> <div lang=\"en\">Title on the second line.<br>This field is required in ADD operation.</div>
     *
     * @return $this
     */
    public function setHeadline2($headline2)
    {
        $this->container['headline2'] = $headline2;

        return $this;
    }

    /**
     * Gets headline3
     *
     * @return string|null
     */
    public function getHeadline3()
    {
        return $this->container['headline3'];
    }

    /**
     * Sets headline3
     *
     * @param string|null $headline3 <div lang=\"ja\">3行目のタイトルです。<br>ADD時、このフィールドは省略可能となります。その際、デフォルト設定値はnullとなります。</div> <div lang=\"en\">Title on the second line.<br>This field is optional in ADD operation. The default value will be null.</div>
     *
     * @return $this
     */
    public function setHeadline3($headline3)
    {
        $this->container['headline3'] = $headline3;

        return $this;
    }

    /**
     * Gets description2
     *
     * @return string|null
     */
    public function getDescription2()
    {
        return $this->container['description2'];
    }

    /**
     * Sets description2
     *
     * @param string|null $description2 <div lang=\"ja\">2行目の説明文です。<br>ADD時、このフィールドは省略可能となります。その際、デフォルト設定値はnullとなります。</div> <div lang=\"en\">Description on the second line.<br>This field is optional in ADD operation. The default value will be null.</div>
     *
     * @return $this
     */
    public function setDescription2($description2)
    {
        $this->container['description2'] = $description2;

        return $this;
    }

    /**
     * Gets path1
     *
     * @return string|null
     */
    public function getPath1()
    {
        return $this->container['path1'];
    }

    /**
     * Sets path1
     *
     * @param string|null $path1 <div lang=\"ja\">自動作成される表示URLを補足するパスです。<br>ADD時、このフィールドは省略可能となります。その際、デフォルト設定値はnullとなります。<br>※path2を指定する場合は、path1は必須です。</div> <div lang=\"en\">The path information which complements display URL generated automatically.<br>This field is optional in ADD operation. The default value will be null.<br>*To specify path2, path1 is required.</div>
     *
     * @return $this
     */
    public function setPath1($path1)
    {
        $this->container['path1'] = $path1;

        return $this;
    }

    /**
     * Gets path2
     *
     * @return string|null
     */
    public function getPath2()
    {
        return $this->container['path2'];
    }

    /**
     * Sets path2
     *
     * @param string|null $path2 <div lang=\"ja\">自動作成される表示URLを補足するパスです。<br>ADD時、このフィールドは省略可能となります。その際、デフォルト設定値はnullとなります。<br>※path1を指定していない場合、path2は無視されます。</div> <div lang=\\\"en\\\">The path information which complements display URL generated automatically.<br>This field is optional in ADD operation. The default value will be null.<br>*If path1 is not specified, path2 will be ignored.</div>
     *
     * @return $this
     */
    public function setPath2($path2)
    {
        $this->container['path2'] = $path2;

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

