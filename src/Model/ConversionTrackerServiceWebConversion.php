<?php
/**
 * ConversionTrackerServiceWebConversion
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
 * ConversionTrackerServiceWebConversion Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ConversionTrackerServiceWebConversionオブジェクトは、ウェブページのコンバージョン測定タグやタグごとのパフォーマンスデータなどのコンバージョントラッカー情報を表します。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となります。&lt;br&gt;※ADD時、conversionTrackerTypeがWEB_CONVERSIONの場合、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTrackerServiceWebConversion describes ConversionTracker information such as ConversionTag and performance data by tag. &lt;br&gt;This field is optional in ADD and SET operation. &lt;br&gt; *If the conversionTrackerType is WEB_CONVERSION,  this field will be required in ADD operation.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceWebConversion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionTrackerServiceWebConversion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'markupLanguage' => '\Yahoo\Model\ConversionTrackerServiceMarkupLanguage',
        'snippet' => 'string',
        'advancedSnippet' => 'string',
        'trackingCodeType' => '\Yahoo\Model\ConversionTrackerServiceTrackingCodeType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'markupLanguage' => null,
        'snippet' => null,
        'advancedSnippet' => null,
        'trackingCodeType' => null
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
        'markupLanguage' => 'markupLanguage',
        'snippet' => 'snippet',
        'advancedSnippet' => 'advancedSnippet',
        'trackingCodeType' => 'trackingCodeType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'markupLanguage' => 'setMarkupLanguage',
        'snippet' => 'setSnippet',
        'advancedSnippet' => 'setAdvancedSnippet',
        'trackingCodeType' => 'setTrackingCodeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'markupLanguage' => 'getMarkupLanguage',
        'snippet' => 'getSnippet',
        'advancedSnippet' => 'getAdvancedSnippet',
        'trackingCodeType' => 'getTrackingCodeType'
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
        $this->container['markupLanguage'] = isset($data['markupLanguage']) ? $data['markupLanguage'] : null;
        $this->container['snippet'] = isset($data['snippet']) ? $data['snippet'] : null;
        $this->container['advancedSnippet'] = isset($data['advancedSnippet']) ? $data['advancedSnippet'] : null;
        $this->container['trackingCodeType'] = isset($data['trackingCodeType']) ? $data['trackingCodeType'] : null;
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
     * Gets markupLanguage
     *
     * @return \Yahoo\Model\ConversionTrackerServiceMarkupLanguage|null
     */
    public function getMarkupLanguage()
    {
        return $this->container['markupLanguage'];
    }

    /**
     * Sets markupLanguage
     *
     * @param \Yahoo\Model\ConversionTrackerServiceMarkupLanguage|null $markupLanguage markupLanguage
     *
     * @return $this
     */
    public function setMarkupLanguage($markupLanguage)
    {
        $this->container['markupLanguage'] = $markupLanguage;

        return $this;
    }

    /**
     * Gets snippet
     *
     * @return string|null
     */
    public function getSnippet()
    {
        return $this->container['snippet'];
    }

    /**
     * Sets snippet
     *
     * @param string|null $snippet <div lang=\"ja\">トラッキングスクリプトです。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\"> Tracking script.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setSnippet($snippet)
    {
        $this->container['snippet'] = $snippet;

        return $this;
    }

    /**
     * Gets advancedSnippet
     *
     * @return string|null
     */
    public function getAdvancedSnippet()
    {
        return $this->container['advancedSnippet'];
    }

    /**
     * Sets advancedSnippet
     *
     * @param string|null $advancedSnippet <div lang=\"ja\">リニューアル版のコンバージョンタグは、従来のタグよりもブラウザーなどの環境の影響を受けづらい新しいフォーマットです。<br/> 詳細は[ヘルプ](https://support-marketing.yahoo.co.jp/promotionalads/ss/articledetail?lan=ja&aid=1159)をご参照ください。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">The new  format of conversion tag avoids the impacts such as changes made to the browser. <br/> [Help Page](https://support-marketing.yahoo.co.jp/promotionalads/ss/articledetail?lan=en&aid=353) <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAdvancedSnippet($advancedSnippet)
    {
        $this->container['advancedSnippet'] = $advancedSnippet;

        return $this;
    }

    /**
     * Gets trackingCodeType
     *
     * @return \Yahoo\Model\ConversionTrackerServiceTrackingCodeType|null
     */
    public function getTrackingCodeType()
    {
        return $this->container['trackingCodeType'];
    }

    /**
     * Sets trackingCodeType
     *
     * @param \Yahoo\Model\ConversionTrackerServiceTrackingCodeType|null $trackingCodeType trackingCodeType
     *
     * @return $this
     */
    public function setTrackingCodeType($trackingCodeType)
    {
        $this->container['trackingCodeType'] = $trackingCodeType;

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


