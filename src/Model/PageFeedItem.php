<?php
/**
 * PageFeedItem
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
 * PageFeedItem Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;PageFeedItemオブジェクトは、ページフィードアイテム情報を格納します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;PageFeedItem object retains page feed Item.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageFeedItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageFeedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'approvalStatus' => '\Yahoo\Model\PageFeedItemServiceApprovalStatus',
        'disapprovalReasonCodes' => 'string[]',
        'disapprovalReasonComment' => 'string',
        'feedId' => 'int',
        'pageFeedCustomLabel' => 'string',
        'pageFeedItemId' => 'int',
        'pageFeedUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'approvalStatus' => null,
        'disapprovalReasonCodes' => null,
        'disapprovalReasonComment' => null,
        'feedId' => 'int64',
        'pageFeedCustomLabel' => null,
        'pageFeedItemId' => 'int64',
        'pageFeedUrl' => null
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
        'approvalStatus' => 'approvalStatus',
        'disapprovalReasonCodes' => 'disapprovalReasonCodes',
        'disapprovalReasonComment' => 'disapprovalReasonComment',
        'feedId' => 'feedId',
        'pageFeedCustomLabel' => 'pageFeedCustomLabel',
        'pageFeedItemId' => 'pageFeedItemId',
        'pageFeedUrl' => 'pageFeedUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'approvalStatus' => 'setApprovalStatus',
        'disapprovalReasonCodes' => 'setDisapprovalReasonCodes',
        'disapprovalReasonComment' => 'setDisapprovalReasonComment',
        'feedId' => 'setFeedId',
        'pageFeedCustomLabel' => 'setPageFeedCustomLabel',
        'pageFeedItemId' => 'setPageFeedItemId',
        'pageFeedUrl' => 'setPageFeedUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'approvalStatus' => 'getApprovalStatus',
        'disapprovalReasonCodes' => 'getDisapprovalReasonCodes',
        'disapprovalReasonComment' => 'getDisapprovalReasonComment',
        'feedId' => 'getFeedId',
        'pageFeedCustomLabel' => 'getPageFeedCustomLabel',
        'pageFeedItemId' => 'getPageFeedItemId',
        'pageFeedUrl' => 'getPageFeedUrl'
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
        $this->container['approvalStatus'] = isset($data['approvalStatus']) ? $data['approvalStatus'] : null;
        $this->container['disapprovalReasonCodes'] = isset($data['disapprovalReasonCodes']) ? $data['disapprovalReasonCodes'] : null;
        $this->container['disapprovalReasonComment'] = isset($data['disapprovalReasonComment']) ? $data['disapprovalReasonComment'] : null;
        $this->container['feedId'] = isset($data['feedId']) ? $data['feedId'] : null;
        $this->container['pageFeedCustomLabel'] = isset($data['pageFeedCustomLabel']) ? $data['pageFeedCustomLabel'] : null;
        $this->container['pageFeedItemId'] = isset($data['pageFeedItemId']) ? $data['pageFeedItemId'] : null;
        $this->container['pageFeedUrl'] = isset($data['pageFeedUrl']) ? $data['pageFeedUrl'] : null;
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
     * @param int|null $accountId <div lang=\"ja\">アカウントID</div><div lang=\"en\">Account ID</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets approvalStatus
     *
     * @return \Yahoo\Model\PageFeedItemServiceApprovalStatus|null
     */
    public function getApprovalStatus()
    {
        return $this->container['approvalStatus'];
    }

    /**
     * Sets approvalStatus
     *
     * @param \Yahoo\Model\PageFeedItemServiceApprovalStatus|null $approvalStatus approvalStatus
     *
     * @return $this
     */
    public function setApprovalStatus($approvalStatus)
    {
        $this->container['approvalStatus'] = $approvalStatus;

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
     * @param string[]|null $disapprovalReasonCodes <div lang=\"ja\">審査否認理由コード</div><div lang=\"en\">Codes of disapproval reason</div>
     *
     * @return $this
     */
    public function setDisapprovalReasonCodes($disapprovalReasonCodes)
    {
        $this->container['disapprovalReasonCodes'] = $disapprovalReasonCodes;

        return $this;
    }

    /**
     * Gets disapprovalReasonComment
     *
     * @return string|null
     */
    public function getDisapprovalReasonComment()
    {
        return $this->container['disapprovalReasonComment'];
    }

    /**
     * Sets disapprovalReasonComment
     *
     * @param string|null $disapprovalReasonComment <div lang=\"ja\">審査否認理由のコメント</div><div lang=\"en\">Comment of disapproval reason</div>
     *
     * @return $this
     */
    public function setDisapprovalReasonComment($disapprovalReasonComment)
    {
        $this->container['disapprovalReasonComment'] = $disapprovalReasonComment;

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
     * @param int|null $feedId <div lang=\"ja\">フィードID</div><div lang=\"en\">Feed ID</div>
     *
     * @return $this
     */
    public function setFeedId($feedId)
    {
        $this->container['feedId'] = $feedId;

        return $this;
    }

    /**
     * Gets pageFeedCustomLabel
     *
     * @return string|null
     */
    public function getPageFeedCustomLabel()
    {
        return $this->container['pageFeedCustomLabel'];
    }

    /**
     * Sets pageFeedCustomLabel
     *
     * @param string|null $pageFeedCustomLabel <div lang=\"ja\">ページフィードアイテムのカスタムラベル<br>複数ある場合はカンマ区切り</div><div lang=\"en\">Custom label of Page feed item.<br>If multiple, comma separated.</div>
     *
     * @return $this
     */
    public function setPageFeedCustomLabel($pageFeedCustomLabel)
    {
        $this->container['pageFeedCustomLabel'] = $pageFeedCustomLabel;

        return $this;
    }

    /**
     * Gets pageFeedItemId
     *
     * @return int|null
     */
    public function getPageFeedItemId()
    {
        return $this->container['pageFeedItemId'];
    }

    /**
     * Sets pageFeedItemId
     *
     * @param int|null $pageFeedItemId <div lang=\"ja\">ページフィードアイテムID</div><div lang=\"en\">Page feed item ID</div>
     *
     * @return $this
     */
    public function setPageFeedItemId($pageFeedItemId)
    {
        $this->container['pageFeedItemId'] = $pageFeedItemId;

        return $this;
    }

    /**
     * Gets pageFeedUrl
     *
     * @return string|null
     */
    public function getPageFeedUrl()
    {
        return $this->container['pageFeedUrl'];
    }

    /**
     * Sets pageFeedUrl
     *
     * @param string|null $pageFeedUrl <div lang=\"ja\">ページフィードURL。</div><div lang=\"en\">Url of page feed</div>
     *
     * @return $this
     */
    public function setPageFeedUrl($pageFeedUrl)
    {
        $this->container['pageFeedUrl'] = $pageFeedUrl;

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


