<?php
/**
 * KeywordEstimatorServiceCampaignEstimateRequest
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
 * KeywordEstimatorServiceCampaignEstimateRequest Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;KeywordEstimatorServiceCampaignEstimateRequestオブジェクトは、見積もりを行うキャンペーンを格納するコンテナです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;KeywordEstimatorServiceCampaignEstimateRequest object is a container for a campaign to estimate.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class KeywordEstimatorServiceCampaignEstimateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KeywordEstimatorServiceCampaignEstimateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adGroupEstimateRequests' => '\Yahoo\Model\KeywordEstimatorServiceAdGroupEstimateRequest[]',
        'campaignId' => 'int',
        'dailyBudget' => 'int',
        'provinces' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'adGroupEstimateRequests' => null,
        'campaignId' => 'int64',
        'dailyBudget' => 'int64',
        'provinces' => null
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
        'adGroupEstimateRequests' => 'adGroupEstimateRequests',
        'campaignId' => 'campaignId',
        'dailyBudget' => 'dailyBudget',
        'provinces' => 'provinces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adGroupEstimateRequests' => 'setAdGroupEstimateRequests',
        'campaignId' => 'setCampaignId',
        'dailyBudget' => 'setDailyBudget',
        'provinces' => 'setProvinces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adGroupEstimateRequests' => 'getAdGroupEstimateRequests',
        'campaignId' => 'getCampaignId',
        'dailyBudget' => 'getDailyBudget',
        'provinces' => 'getProvinces'
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
        $this->container['adGroupEstimateRequests'] = isset($data['adGroupEstimateRequests']) ? $data['adGroupEstimateRequests'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['provinces'] = isset($data['provinces']) ? $data['provinces'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['adGroupEstimateRequests'] === null) {
            $invalidProperties[] = "'adGroupEstimateRequests' can't be null";
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
     * Gets adGroupEstimateRequests
     *
     * @return \Yahoo\Model\KeywordEstimatorServiceAdGroupEstimateRequest[]
     */
    public function getAdGroupEstimateRequests()
    {
        return $this->container['adGroupEstimateRequests'];
    }

    /**
     * Sets adGroupEstimateRequests
     *
     * @param \Yahoo\Model\KeywordEstimatorServiceAdGroupEstimateRequest[] $adGroupEstimateRequests <div lang=\"ja\">見積もりを行う広告グループを格納するコンテナです。</div> <div lang=\"en\">A container for the Ad Group to estimate</div>
     *
     * @return $this
     */
    public function setAdGroupEstimateRequests($adGroupEstimateRequests)
    {
        $this->container['adGroupEstimateRequests'] = $adGroupEstimateRequests;

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
     * @param int|null $campaignId <div lang=\"ja\">キャンペーンIDです。</div> <div lang=\"en\">Campaign ID</div>
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets dailyBudget
     *
     * @return int|null
     */
    public function getDailyBudget()
    {
        return $this->container['dailyBudget'];
    }

    /**
     * Sets dailyBudget
     *
     * @param int|null $dailyBudget <div lang=\"ja\">見積もりで使用するキャンペーンの一日あたりの予算です。</div> <div lang=\"en\">Daily campaign budget used to estimate</div>
     *
     * @return $this
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->container['dailyBudget'] = $dailyBudget;

        return $this;
    }

    /**
     * Gets provinces
     *
     * @return string[]|null
     */
    public function getProvinces()
    {
        return $this->container['provinces'];
    }

    /**
     * Sets provinces
     *
     * @param string[]|null $provinces <div lang=\"ja\">見積もりで使用する広告配信する指定地域（都道府県）です。</div> <div lang=\"en\">Province to serve Ads used to estimate</div>
     *
     * @return $this
     */
    public function setProvinces($provinces)
    {
        $this->container['provinces'] = $provinces;

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

