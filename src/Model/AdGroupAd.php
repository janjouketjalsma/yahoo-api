<?php
/**
 * AdGroupAd
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
 * AdGroupAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupAdオブジェクトは、広告に関する操作を行うための情報を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupAd object describes information for operations on ads.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'ad' => '\Yahoo\Model\AdGroupAdServiceAd',
        'adGroupId' => 'int',
        'adGroupName' => 'string',
        'adGroupTrackId' => 'int',
        'adId' => 'int',
        'adName' => 'string',
        'adTrackId' => 'int',
        'approvalStatus' => '\Yahoo\Model\AdGroupAdServiceApprovalStatus',
        'campaignId' => 'int',
        'campaignName' => 'string',
        'campaignTrackId' => 'int',
        'disapprovalReasonCodes' => 'string[]',
        'feedId' => 'int',
        'invalidedTrademarks' => 'string[]',
        'labels' => '\Yahoo\Model\AdGroupAdServiceLabel[]',
        'trademarkStatus' => '\Yahoo\Model\AdGroupAdServiceTrademarkStatus',
        'userStatus' => '\Yahoo\Model\AdGroupAdServiceUserStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'ad' => null,
        'adGroupId' => 'int64',
        'adGroupName' => null,
        'adGroupTrackId' => 'int64',
        'adId' => 'int64',
        'adName' => null,
        'adTrackId' => 'int64',
        'approvalStatus' => null,
        'campaignId' => 'int64',
        'campaignName' => null,
        'campaignTrackId' => 'int64',
        'disapprovalReasonCodes' => null,
        'feedId' => 'int64',
        'invalidedTrademarks' => null,
        'labels' => null,
        'trademarkStatus' => null,
        'userStatus' => null
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
        'ad' => 'ad',
        'adGroupId' => 'adGroupId',
        'adGroupName' => 'adGroupName',
        'adGroupTrackId' => 'adGroupTrackId',
        'adId' => 'adId',
        'adName' => 'adName',
        'adTrackId' => 'adTrackId',
        'approvalStatus' => 'approvalStatus',
        'campaignId' => 'campaignId',
        'campaignName' => 'campaignName',
        'campaignTrackId' => 'campaignTrackId',
        'disapprovalReasonCodes' => 'disapprovalReasonCodes',
        'feedId' => 'feedId',
        'invalidedTrademarks' => 'invalidedTrademarks',
        'labels' => 'labels',
        'trademarkStatus' => 'trademarkStatus',
        'userStatus' => 'userStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'ad' => 'setAd',
        'adGroupId' => 'setAdGroupId',
        'adGroupName' => 'setAdGroupName',
        'adGroupTrackId' => 'setAdGroupTrackId',
        'adId' => 'setAdId',
        'adName' => 'setAdName',
        'adTrackId' => 'setAdTrackId',
        'approvalStatus' => 'setApprovalStatus',
        'campaignId' => 'setCampaignId',
        'campaignName' => 'setCampaignName',
        'campaignTrackId' => 'setCampaignTrackId',
        'disapprovalReasonCodes' => 'setDisapprovalReasonCodes',
        'feedId' => 'setFeedId',
        'invalidedTrademarks' => 'setInvalidedTrademarks',
        'labels' => 'setLabels',
        'trademarkStatus' => 'setTrademarkStatus',
        'userStatus' => 'setUserStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'ad' => 'getAd',
        'adGroupId' => 'getAdGroupId',
        'adGroupName' => 'getAdGroupName',
        'adGroupTrackId' => 'getAdGroupTrackId',
        'adId' => 'getAdId',
        'adName' => 'getAdName',
        'adTrackId' => 'getAdTrackId',
        'approvalStatus' => 'getApprovalStatus',
        'campaignId' => 'getCampaignId',
        'campaignName' => 'getCampaignName',
        'campaignTrackId' => 'getCampaignTrackId',
        'disapprovalReasonCodes' => 'getDisapprovalReasonCodes',
        'feedId' => 'getFeedId',
        'invalidedTrademarks' => 'getInvalidedTrademarks',
        'labels' => 'getLabels',
        'trademarkStatus' => 'getTrademarkStatus',
        'userStatus' => 'getUserStatus'
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
        $this->container['ad'] = isset($data['ad']) ? $data['ad'] : null;
        $this->container['adGroupId'] = isset($data['adGroupId']) ? $data['adGroupId'] : null;
        $this->container['adGroupName'] = isset($data['adGroupName']) ? $data['adGroupName'] : null;
        $this->container['adGroupTrackId'] = isset($data['adGroupTrackId']) ? $data['adGroupTrackId'] : null;
        $this->container['adId'] = isset($data['adId']) ? $data['adId'] : null;
        $this->container['adName'] = isset($data['adName']) ? $data['adName'] : null;
        $this->container['adTrackId'] = isset($data['adTrackId']) ? $data['adTrackId'] : null;
        $this->container['approvalStatus'] = isset($data['approvalStatus']) ? $data['approvalStatus'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['campaignTrackId'] = isset($data['campaignTrackId']) ? $data['campaignTrackId'] : null;
        $this->container['disapprovalReasonCodes'] = isset($data['disapprovalReasonCodes']) ? $data['disapprovalReasonCodes'] : null;
        $this->container['feedId'] = isset($data['feedId']) ? $data['feedId'] : null;
        $this->container['invalidedTrademarks'] = isset($data['invalidedTrademarks']) ? $data['invalidedTrademarks'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['trademarkStatus'] = isset($data['trademarkStatus']) ? $data['trademarkStatus'] : null;
        $this->container['userStatus'] = isset($data['userStatus']) ? $data['userStatus'] : null;
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
     * @param int|null $accountId <div lang=\"ja\">アカウントIDです。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Account ID.<br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets ad
     *
     * @return \Yahoo\Model\AdGroupAdServiceAd|null
     */
    public function getAd()
    {
        return $this->container['ad'];
    }

    /**
     * Sets ad
     *
     * @param \Yahoo\Model\AdGroupAdServiceAd|null $ad ad
     *
     * @return $this
     */
    public function setAd($ad)
    {
        $this->container['ad'] = $ad;

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
     * @param int|null $adGroupId <div lang=\"ja\">広告グループIDです。<br>このフィールドは、いずれの場合でも必須となります。</div><div lang=\"en\">Ad group ID.<br>This field is required in any cases.</div>
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
     * @param string|null $adGroupName <div lang=\"ja\">広告グループ名です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Ad group name.<br>Although this field will be returned in the response, it will be ignored on input. </div>
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
     * @param int|null $adGroupTrackId <div lang=\"ja\">トラッキング用広告グループIDです。<br>のフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Ad group ID for tracking.<br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAdGroupTrackId($adGroupTrackId)
    {
        $this->container['adGroupTrackId'] = $adGroupTrackId;

        return $this;
    }

    /**
     * Gets adId
     *
     * @return int|null
     */
    public function getAdId()
    {
        return $this->container['adId'];
    }

    /**
     * Sets adId
     *
     * @param int|null $adId <div lang=\"ja\">広告IDです。<br>SETおよびREMOVE時、このフィールドは必須となります。</div><div lang=\"en\">Ad ID.<br>This field is required in SET and REMOVE operation.</div>
     *
     * @return $this
     */
    public function setAdId($adId)
    {
        $this->container['adId'] = $adId;

        return $this;
    }

    /**
     * Gets adName
     *
     * @return string|null
     */
    public function getAdName()
    {
        return $this->container['adName'];
    }

    /**
     * Sets adName
     *
     * @param string|null $adName <div lang=\"ja\">広告名です。<br>このフィールドは、ADD時は必須となり、SET時は省略可能となります。</div><div lang=\"en\">Ad name.<br>This field is required in ADD operation, and will be optional in SET operation.</div>
     *
     * @return $this
     */
    public function setAdName($adName)
    {
        $this->container['adName'] = $adName;

        return $this;
    }

    /**
     * Gets adTrackId
     *
     * @return int|null
     */
    public function getAdTrackId()
    {
        return $this->container['adTrackId'];
    }

    /**
     * Sets adTrackId
     *
     * @param int|null $adTrackId <div lang=\"ja\">トラッキング用広告IDです。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Ad ID for tracking.<br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAdTrackId($adTrackId)
    {
        $this->container['adTrackId'] = $adTrackId;

        return $this;
    }

    /**
     * Gets approvalStatus
     *
     * @return \Yahoo\Model\AdGroupAdServiceApprovalStatus|null
     */
    public function getApprovalStatus()
    {
        return $this->container['approvalStatus'];
    }

    /**
     * Sets approvalStatus
     *
     * @param \Yahoo\Model\AdGroupAdServiceApprovalStatus|null $approvalStatus approvalStatus
     *
     * @return $this
     */
    public function setApprovalStatus($approvalStatus)
    {
        $this->container['approvalStatus'] = $approvalStatus;

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
     * @param int|null $campaignId <div lang=\"ja\">キャンペーンIDです。<br>このフィールドは、いずれの場合でも必須となります。</div><div lang=\"en\">Campaign ID.<br>This field is required in any cases.</div>
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
     * @param string|null $campaignName <div lang=\"ja\">キャンペーン名です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Campaign name.<br>Although this field will be returned in the response, it will be ignored on input. </div>
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
     * @param int|null $campaignTrackId <div lang=\"ja\">トラッキング用キャンペーンIDです。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Campaign ID for tracking.<br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setCampaignTrackId($campaignTrackId)
    {
        $this->container['campaignTrackId'] = $campaignTrackId;

        return $this;
    }

    /**
     * Gets disapprovalReasonCodes
     *
     * @return string[]|null
     */
    public function getDisapprovalReasonCodes()
    {
        return $this->container['disapprovalReasonCodes'];
    }

    /**
     * Sets disapprovalReasonCodes
     *
     * @param string[]|null $disapprovalReasonCodes <div lang=\"ja\">審査否認の理由コードです。<br>(コード詳細は、DictionaryServiceのgetDisapprovalReasonのレスポンスを参照)<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Code of Disapproval reason.<br>(Refer to DictionaryService getDisapprovalReason response for details) <br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setDisapprovalReasonCodes($disapprovalReasonCodes)
    {
        $this->container['disapprovalReasonCodes'] = $disapprovalReasonCodes;

        return $this;
    }

    /**
     * Gets feedId
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param int|null $feedId <div lang=\"ja\">フィードIDです。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Feed ID.<br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setFeedId($feedId)
    {
        $this->container['feedId'] = $feedId;

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
     * @param string[]|null $invalidedTrademarks <div lang=\"ja\">制限された商標です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div><div lang=\"en\">Invalided trademarks.<br>Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setInvalidedTrademarks($invalidedTrademarks)
    {
        $this->container['invalidedTrademarks'] = $invalidedTrademarks;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Yahoo\Model\AdGroupAdServiceLabel[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Yahoo\Model\AdGroupAdServiceLabel[]|null $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets trademarkStatus
     *
     * @return \Yahoo\Model\AdGroupAdServiceTrademarkStatus|null
     */
    public function getTrademarkStatus()
    {
        return $this->container['trademarkStatus'];
    }

    /**
     * Sets trademarkStatus
     *
     * @param \Yahoo\Model\AdGroupAdServiceTrademarkStatus|null $trademarkStatus trademarkStatus
     *
     * @return $this
     */
    public function setTrademarkStatus($trademarkStatus)
    {
        $this->container['trademarkStatus'] = $trademarkStatus;

        return $this;
    }

    /**
     * Gets userStatus
     *
     * @return \Yahoo\Model\AdGroupAdServiceUserStatus|null
     */
    public function getUserStatus()
    {
        return $this->container['userStatus'];
    }

    /**
     * Sets userStatus
     *
     * @param \Yahoo\Model\AdGroupAdServiceUserStatus|null $userStatus userStatus
     *
     * @return $this
     */
    public function setUserStatus($userStatus)
    {
        $this->container['userStatus'] = $userStatus;

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


