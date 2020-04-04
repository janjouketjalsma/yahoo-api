<?php
/**
 * Label
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
 * Label Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Labelオブジェクトは、ラベルの情報を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Label object describes label information.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Label implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'color' => 'string',
        'description' => 'string',
        'labelId' => 'int',
        'labelName' => 'string',
        'labeledAdGroup' => 'int',
        'labeledAdGroupAd' => 'int',
        'labeledAdGroupCriterion' => 'int',
        'labeledCampaign' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'color' => null,
        'description' => null,
        'labelId' => 'int64',
        'labelName' => null,
        'labeledAdGroup' => 'int64',
        'labeledAdGroupAd' => 'int64',
        'labeledAdGroupCriterion' => 'int64',
        'labeledCampaign' => 'int64'
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
        'color' => 'color',
        'description' => 'description',
        'labelId' => 'labelId',
        'labelName' => 'labelName',
        'labeledAdGroup' => 'labeledAdGroup',
        'labeledAdGroupAd' => 'labeledAdGroupAd',
        'labeledAdGroupCriterion' => 'labeledAdGroupCriterion',
        'labeledCampaign' => 'labeledCampaign'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'color' => 'setColor',
        'description' => 'setDescription',
        'labelId' => 'setLabelId',
        'labelName' => 'setLabelName',
        'labeledAdGroup' => 'setLabeledAdGroup',
        'labeledAdGroupAd' => 'setLabeledAdGroupAd',
        'labeledAdGroupCriterion' => 'setLabeledAdGroupCriterion',
        'labeledCampaign' => 'setLabeledCampaign'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'color' => 'getColor',
        'description' => 'getDescription',
        'labelId' => 'getLabelId',
        'labelName' => 'getLabelName',
        'labeledAdGroup' => 'getLabeledAdGroup',
        'labeledAdGroupAd' => 'getLabeledAdGroupAd',
        'labeledAdGroupCriterion' => 'getLabeledAdGroupCriterion',
        'labeledCampaign' => 'getLabeledCampaign'
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
        $this->container['labelName'] = isset($data['labelName']) ? $data['labelName'] : null;
        $this->container['labeledAdGroup'] = isset($data['labeledAdGroup']) ? $data['labeledAdGroup'] : null;
        $this->container['labeledAdGroupAd'] = isset($data['labeledAdGroupAd']) ? $data['labeledAdGroupAd'] : null;
        $this->container['labeledAdGroupCriterion'] = isset($data['labeledAdGroupCriterion']) ? $data['labeledAdGroupCriterion'] : null;
        $this->container['labeledCampaign'] = isset($data['labeledCampaign']) ? $data['labeledCampaign'] : null;
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
     * @param int|null $accountId <div lang=\"ja\">アカウントIDです。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Account ID. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color <div lang=\"ja\">カラーです。<br> このフィールドは、ADDおよびSET時に省略可能となり、REMOVE時に無視されます。</div><div lang=\"en\">Color. <br>This field is optional in ADD and SET operation, and will be ignored in REMOVE operation.</div>
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description <div lang=\"ja\">説明文です。<br> このフィールドは、ADDおよびSET時に省略可能となり、REMOVE時に無視されます。</div><div lang=\"en\">Description. <br>This field is optional in ADD and SET operation, and will be ignored in REMOVE operation.</div>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets labelId
     *
     * @return int|null
     */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
     * Sets labelId
     *
     * @param int|null $labelId <div lang=\"ja\">ラベルIDです。<br> このフィールドは、SETおよびREMOVE時に必須となり、ADD時に無視されます。</div><div lang=\"en\">Label ID. <br>This field is required in SET and REMOVE operation, and will be ignored in ADD operation.</div>
     *
     * @return $this
     */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;

        return $this;
    }

    /**
     * Gets labelName
     *
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->container['labelName'];
    }

    /**
     * Sets labelName
     *
     * @param string|null $labelName <div lang=\"ja\">ラベル名です。<br> このフィールドは、ADD時に必須となり、SET時に省略可能となり、REMOVE時に無視されます。</div><div lang=\"en\">Label Name. <br>This field is required in ADD operation, is optional in SET operation, and will be ignored in REMOVE operation.</div>
     *
     * @return $this
     */
    public function setLabelName($labelName)
    {
        $this->container['labelName'] = $labelName;

        return $this;
    }

    /**
     * Gets labeledAdGroup
     *
     * @return int|null
     */
    public function getLabeledAdGroup()
    {
        return $this->container['labeledAdGroup'];
    }

    /**
     * Sets labeledAdGroup
     *
     * @param int|null $labeledAdGroup <div lang=\"ja\">広告グループの紐付け数です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Number of labeled AdGroup. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setLabeledAdGroup($labeledAdGroup)
    {
        $this->container['labeledAdGroup'] = $labeledAdGroup;

        return $this;
    }

    /**
     * Gets labeledAdGroupAd
     *
     * @return int|null
     */
    public function getLabeledAdGroupAd()
    {
        return $this->container['labeledAdGroupAd'];
    }

    /**
     * Sets labeledAdGroupAd
     *
     * @param int|null $labeledAdGroupAd <div lang=\"ja\">広告の紐付け数です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Number of labeled AdGroupAd. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setLabeledAdGroupAd($labeledAdGroupAd)
    {
        $this->container['labeledAdGroupAd'] = $labeledAdGroupAd;

        return $this;
    }

    /**
     * Gets labeledAdGroupCriterion
     *
     * @return int|null
     */
    public function getLabeledAdGroupCriterion()
    {
        return $this->container['labeledAdGroupCriterion'];
    }

    /**
     * Sets labeledAdGroupCriterion
     *
     * @param int|null $labeledAdGroupCriterion <div lang=\"ja\">キーワードの紐付け数です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Number of labeled Ad Group Criterion. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setLabeledAdGroupCriterion($labeledAdGroupCriterion)
    {
        $this->container['labeledAdGroupCriterion'] = $labeledAdGroupCriterion;

        return $this;
    }

    /**
     * Gets labeledCampaign
     *
     * @return int|null
     */
    public function getLabeledCampaign()
    {
        return $this->container['labeledCampaign'];
    }

    /**
     * Sets labeledCampaign
     *
     * @param int|null $labeledCampaign <div lang=\"ja\">キャンペーンの紐付け数です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Number of labeled Campaign. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setLabeledCampaign($labeledCampaign)
    {
        $this->container['labeledCampaign'] = $labeledCampaign;

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


