<?php
/**
 * AdGroupCriterion
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
 * AdGroupCriterion Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupCriterionオブジェクトは、広告グループのクライテリアを表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupCriterion object describes ad group criteria information.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupCriterion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupCriterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'adGroupId' => 'int',
        'adGroupName' => 'string',
        'adGroupTrackId' => 'int',
        'biddableAdGroupCriterion' => '\Yahoo\Model\AdGroupCriterionServiceBiddableAdGroupCriterion',
        'campaignId' => 'int',
        'campaignName' => 'string',
        'campaignTrackId' => 'int',
        'criterion' => '\Yahoo\Model\AdGroupCriterionServiceCriterion',
        'labels' => '\Yahoo\Model\AdGroupCriterionServiceLabel[]',
        'use' => '\Yahoo\Model\AdGroupCriterionServiceUse',
        'trademarkStatus' => '\Yahoo\Model\AdGroupCriterionServiceTrademarkStatus',
        'invalidedTrademarks' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'adGroupId' => 'int64',
        'adGroupName' => null,
        'adGroupTrackId' => 'int64',
        'biddableAdGroupCriterion' => null,
        'campaignId' => 'int64',
        'campaignName' => null,
        'campaignTrackId' => 'int64',
        'criterion' => null,
        'labels' => null,
        'use' => null,
        'trademarkStatus' => null,
        'invalidedTrademarks' => null
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
        'adGroupId' => 'adGroupId',
        'adGroupName' => 'adGroupName',
        'adGroupTrackId' => 'adGroupTrackId',
        'biddableAdGroupCriterion' => 'biddableAdGroupCriterion',
        'campaignId' => 'campaignId',
        'campaignName' => 'campaignName',
        'campaignTrackId' => 'campaignTrackId',
        'criterion' => 'criterion',
        'labels' => 'labels',
        'use' => 'use',
        'trademarkStatus' => 'trademarkStatus',
        'invalidedTrademarks' => 'invalidedTrademarks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'adGroupId' => 'setAdGroupId',
        'adGroupName' => 'setAdGroupName',
        'adGroupTrackId' => 'setAdGroupTrackId',
        'biddableAdGroupCriterion' => 'setBiddableAdGroupCriterion',
        'campaignId' => 'setCampaignId',
        'campaignName' => 'setCampaignName',
        'campaignTrackId' => 'setCampaignTrackId',
        'criterion' => 'setCriterion',
        'labels' => 'setLabels',
        'use' => 'setUse',
        'trademarkStatus' => 'setTrademarkStatus',
        'invalidedTrademarks' => 'setInvalidedTrademarks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'adGroupId' => 'getAdGroupId',
        'adGroupName' => 'getAdGroupName',
        'adGroupTrackId' => 'getAdGroupTrackId',
        'biddableAdGroupCriterion' => 'getBiddableAdGroupCriterion',
        'campaignId' => 'getCampaignId',
        'campaignName' => 'getCampaignName',
        'campaignTrackId' => 'getCampaignTrackId',
        'criterion' => 'getCriterion',
        'labels' => 'getLabels',
        'use' => 'getUse',
        'trademarkStatus' => 'getTrademarkStatus',
        'invalidedTrademarks' => 'getInvalidedTrademarks'
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
        $this->container['adGroupId'] = isset($data['adGroupId']) ? $data['adGroupId'] : null;
        $this->container['adGroupName'] = isset($data['adGroupName']) ? $data['adGroupName'] : null;
        $this->container['adGroupTrackId'] = isset($data['adGroupTrackId']) ? $data['adGroupTrackId'] : null;
        $this->container['biddableAdGroupCriterion'] = isset($data['biddableAdGroupCriterion']) ? $data['biddableAdGroupCriterion'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['campaignTrackId'] = isset($data['campaignTrackId']) ? $data['campaignTrackId'] : null;
        $this->container['criterion'] = isset($data['criterion']) ? $data['criterion'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['use'] = isset($data['use']) ? $data['use'] : null;
        $this->container['trademarkStatus'] = isset($data['trademarkStatus']) ? $data['trademarkStatus'] : null;
        $this->container['invalidedTrademarks'] = isset($data['invalidedTrademarks']) ? $data['invalidedTrademarks'] : null;
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
     * @param int|null $accountId <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets adGroupId
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->container['adGroupId'];
    }

    /**
     * Sets adGroupId
     *
     * @param int|null $adGroupId <div lang=\"ja\">広告グループIDです。<br>このフィールドは、いずれの場合でも必須となります。</div> <div lang=\"en\">Ad group ID.<br>This field is required in any cases.</div>
     *
     * @return $this
     */
    public function setAdGroupId($adGroupId)
    {
        $this->container['adGroupId'] = $adGroupId;

        return $this;
    }

    /**
     * Gets adGroupName
     *
     * @return string|null
     */
    public function getAdGroupName()
    {
        return $this->container['adGroupName'];
    }

    /**
     * Sets adGroupName
     *
     * @param string|null $adGroupName <div lang=\"ja\">広告グループ名です。</div> <div lang=\"en\">Ad group name.</div>
     *
     * @return $this
     */
    public function setAdGroupName($adGroupName)
    {
        $this->container['adGroupName'] = $adGroupName;

        return $this;
    }

    /**
     * Gets adGroupTrackId
     *
     * @return int|null
     */
    public function getAdGroupTrackId()
    {
        return $this->container['adGroupTrackId'];
    }

    /**
     * Sets adGroupTrackId
     *
     * @param int|null $adGroupTrackId <div lang=\"ja\">トラッキング用広告グループIDです。</div> <div lang=\"en\">Ad group ID for tracking.</div>
     *
     * @return $this
     */
    public function setAdGroupTrackId($adGroupTrackId)
    {
        $this->container['adGroupTrackId'] = $adGroupTrackId;

        return $this;
    }

    /**
     * Gets biddableAdGroupCriterion
     *
     * @return \Yahoo\Model\AdGroupCriterionServiceBiddableAdGroupCriterion|null
     */
    public function getBiddableAdGroupCriterion()
    {
        return $this->container['biddableAdGroupCriterion'];
    }

    /**
     * Sets biddableAdGroupCriterion
     *
     * @param \Yahoo\Model\AdGroupCriterionServiceBiddableAdGroupCriterion|null $biddableAdGroupCriterion biddableAdGroupCriterion
     *
     * @return $this
     */
    public function setBiddableAdGroupCriterion($biddableAdGroupCriterion)
    {
        $this->container['biddableAdGroupCriterion'] = $biddableAdGroupCriterion;

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
     * @param int|null $campaignId <div lang=\"ja\">キャンペーンIDです。<br>このフィールドは、いずれの場合でも必須となります。</div> <div lang=\"en\">Campaign ID.<br>This field is required in any cases.</div>
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets campaignName
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string|null $campaignName <div lang=\"ja\">キャンペーン名です。</div> <div lang=\"en\">Campaign name.</div>
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets campaignTrackId
     *
     * @return int|null
     */
    public function getCampaignTrackId()
    {
        return $this->container['campaignTrackId'];
    }

    /**
     * Sets campaignTrackId
     *
     * @param int|null $campaignTrackId <div lang=\"ja\">トラッキング用キャンペーンIDです。</div> <div lang=\"en\">Campaign ID for tracking.</div>
     *
     * @return $this
     */
    public function setCampaignTrackId($campaignTrackId)
    {
        $this->container['campaignTrackId'] = $campaignTrackId;

        return $this;
    }

    /**
     * Gets criterion
     *
     * @return \Yahoo\Model\AdGroupCriterionServiceCriterion|null
     */
    public function getCriterion()
    {
        return $this->container['criterion'];
    }

    /**
     * Sets criterion
     *
     * @param \Yahoo\Model\AdGroupCriterionServiceCriterion|null $criterion criterion
     *
     * @return $this
     */
    public function setCriterion($criterion)
    {
        $this->container['criterion'] = $criterion;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Yahoo\Model\AdGroupCriterionServiceLabel[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Yahoo\Model\AdGroupCriterionServiceLabel[]|null $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets use
     *
     * @return \Yahoo\Model\AdGroupCriterionServiceUse|null
     */
    public function getUse()
    {
        return $this->container['use'];
    }

    /**
     * Sets use
     *
     * @param \Yahoo\Model\AdGroupCriterionServiceUse|null $use use
     *
     * @return $this
     */
    public function setUse($use)
    {
        $this->container['use'] = $use;

        return $this;
    }

    /**
     * Gets trademarkStatus
     *
     * @return \Yahoo\Model\AdGroupCriterionServiceTrademarkStatus|null
     */
    public function getTrademarkStatus()
    {
        return $this->container['trademarkStatus'];
    }

    /**
     * Sets trademarkStatus
     *
     * @param \Yahoo\Model\AdGroupCriterionServiceTrademarkStatus|null $trademarkStatus trademarkStatus
     *
     * @return $this
     */
    public function setTrademarkStatus($trademarkStatus)
    {
        $this->container['trademarkStatus'] = $trademarkStatus;

        return $this;
    }

    /**
     * Gets invalidedTrademarks
     *
     * @return string[]|null
     */
    public function getInvalidedTrademarks()
    {
        return $this->container['invalidedTrademarks'];
    }

    /**
     * Sets invalidedTrademarks
     *
     * @param string[]|null $invalidedTrademarks <div lang=\"ja\">制限された商標です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\">Invalided trademarks. <br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setInvalidedTrademarks($invalidedTrademarks)
    {
        $this->container['invalidedTrademarks'] = $invalidedTrademarks;

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


