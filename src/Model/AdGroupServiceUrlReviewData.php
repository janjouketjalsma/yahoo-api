<?php
/**
 * AdGroupServiceUrlReviewData
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
 * AdGroupServiceUrlReviewData Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupServiceUrlReviewDataオブジェクトは、URLの審査状況を表します。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupServiceUrlReviewData object displays review status of URL.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupServiceUrlReviewData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupServiceUrlReviewData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'disapprovalReasonCodes' => 'string[]',
        'disapprovalReviewUrl' => '\Yahoo\Model\AdGroupServiceReviewUrl',
        'inReviewUrl' => '\Yahoo\Model\AdGroupServiceReviewUrl',
        'urlApprovalStatus' => '\Yahoo\Model\AdGroupServiceUrlApprovalStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'disapprovalReasonCodes' => null,
        'disapprovalReviewUrl' => null,
        'inReviewUrl' => null,
        'urlApprovalStatus' => null
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
        'disapprovalReasonCodes' => 'disapprovalReasonCodes',
        'disapprovalReviewUrl' => 'disapprovalReviewUrl',
        'inReviewUrl' => 'inReviewUrl',
        'urlApprovalStatus' => 'urlApprovalStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'disapprovalReasonCodes' => 'setDisapprovalReasonCodes',
        'disapprovalReviewUrl' => 'setDisapprovalReviewUrl',
        'inReviewUrl' => 'setInReviewUrl',
        'urlApprovalStatus' => 'setUrlApprovalStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'disapprovalReasonCodes' => 'getDisapprovalReasonCodes',
        'disapprovalReviewUrl' => 'getDisapprovalReviewUrl',
        'inReviewUrl' => 'getInReviewUrl',
        'urlApprovalStatus' => 'getUrlApprovalStatus'
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
        $this->container['disapprovalReasonCodes'] = isset($data['disapprovalReasonCodes']) ? $data['disapprovalReasonCodes'] : null;
        $this->container['disapprovalReviewUrl'] = isset($data['disapprovalReviewUrl']) ? $data['disapprovalReviewUrl'] : null;
        $this->container['inReviewUrl'] = isset($data['inReviewUrl']) ? $data['inReviewUrl'] : null;
        $this->container['urlApprovalStatus'] = isset($data['urlApprovalStatus']) ? $data['urlApprovalStatus'] : null;
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
     * @param string[]|null $disapprovalReasonCodes <div lang=\"ja\">審査否認理由コードです。</div><div lang=\"en\">Code of Disapproval reason.<br></div>
     *
     * @return $this
     */
    public function setDisapprovalReasonCodes($disapprovalReasonCodes)
    {
        $this->container['disapprovalReasonCodes'] = $disapprovalReasonCodes;

        return $this;
    }

    /**
     * Gets disapprovalReviewUrl
     *
     * @return \Yahoo\Model\AdGroupServiceReviewUrl|null
     */
    public function getDisapprovalReviewUrl()
    {
        return $this->container['disapprovalReviewUrl'];
    }

    /**
     * Sets disapprovalReviewUrl
     *
     * @param \Yahoo\Model\AdGroupServiceReviewUrl|null $disapprovalReviewUrl disapprovalReviewUrl
     *
     * @return $this
     */
    public function setDisapprovalReviewUrl($disapprovalReviewUrl)
    {
        $this->container['disapprovalReviewUrl'] = $disapprovalReviewUrl;

        return $this;
    }

    /**
     * Gets inReviewUrl
     *
     * @return \Yahoo\Model\AdGroupServiceReviewUrl|null
     */
    public function getInReviewUrl()
    {
        return $this->container['inReviewUrl'];
    }

    /**
     * Sets inReviewUrl
     *
     * @param \Yahoo\Model\AdGroupServiceReviewUrl|null $inReviewUrl inReviewUrl
     *
     * @return $this
     */
    public function setInReviewUrl($inReviewUrl)
    {
        $this->container['inReviewUrl'] = $inReviewUrl;

        return $this;
    }

    /**
     * Gets urlApprovalStatus
     *
     * @return \Yahoo\Model\AdGroupServiceUrlApprovalStatus|null
     */
    public function getUrlApprovalStatus()
    {
        return $this->container['urlApprovalStatus'];
    }

    /**
     * Sets urlApprovalStatus
     *
     * @param \Yahoo\Model\AdGroupServiceUrlApprovalStatus|null $urlApprovalStatus urlApprovalStatus
     *
     * @return $this
     */
    public function setUrlApprovalStatus($urlApprovalStatus)
    {
        $this->container['urlApprovalStatus'] = $urlApprovalStatus;

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


