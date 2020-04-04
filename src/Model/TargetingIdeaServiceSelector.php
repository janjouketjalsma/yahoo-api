<?php
/**
 * TargetingIdeaServiceSelector
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
 * TargetingIdeaServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;TargetingIdeaSelectorオブジェクトは、関連キーワードの提案条件を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Condition for related keyword suggestion.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TargetingIdeaServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TargetingIdeaServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'relatedToKeywordSearchParameter' => 'string[]',
        'relatedToUrlSearchParameter' => 'string',
        'startIndex' => 'int',
        'numberResults' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'relatedToKeywordSearchParameter' => null,
        'relatedToUrlSearchParameter' => null,
        'startIndex' => 'int32',
        'numberResults' => 'int32'
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
        'relatedToKeywordSearchParameter' => 'relatedToKeywordSearchParameter',
        'relatedToUrlSearchParameter' => 'relatedToUrlSearchParameter',
        'startIndex' => 'startIndex',
        'numberResults' => 'numberResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'relatedToKeywordSearchParameter' => 'setRelatedToKeywordSearchParameter',
        'relatedToUrlSearchParameter' => 'setRelatedToUrlSearchParameter',
        'startIndex' => 'setStartIndex',
        'numberResults' => 'setNumberResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'relatedToKeywordSearchParameter' => 'getRelatedToKeywordSearchParameter',
        'relatedToUrlSearchParameter' => 'getRelatedToUrlSearchParameter',
        'startIndex' => 'getStartIndex',
        'numberResults' => 'getNumberResults'
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
        $this->container['relatedToKeywordSearchParameter'] = isset($data['relatedToKeywordSearchParameter']) ? $data['relatedToKeywordSearchParameter'] : null;
        $this->container['relatedToUrlSearchParameter'] = isset($data['relatedToUrlSearchParameter']) ? $data['relatedToUrlSearchParameter'] : null;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : 1;
        $this->container['numberResults'] = isset($data['numberResults']) ? $data['numberResults'] : 500;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if (!is_null($this->container['startIndex']) && ($this->container['startIndex'] < 1)) {
            $invalidProperties[] = "invalid value for 'startIndex', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['numberResults']) && ($this->container['numberResults'] > 500)) {
            $invalidProperties[] = "invalid value for 'numberResults', must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['numberResults']) && ($this->container['numberResults'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberResults', must be bigger than or equal to 1.";
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
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId <div lang=\"ja\">アカウントIDです。<br>このフィールドは必須となります。</div><div lang=\"en\">Account ID.<br>This field is required.</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets relatedToKeywordSearchParameter
     *
     * @return string[]|null
     */
    public function getRelatedToKeywordSearchParameter()
    {
        return $this->container['relatedToKeywordSearchParameter'];
    }

    /**
     * Sets relatedToKeywordSearchParameter
     *
     * @param string[]|null $relatedToKeywordSearchParameter <div lang=\"ja\">キーワードを格納するコンテナです。</div> <div lang=\"en\">Container that stores the keyword.</div>
     *
     * @return $this
     */
    public function setRelatedToKeywordSearchParameter($relatedToKeywordSearchParameter)
    {
        $this->container['relatedToKeywordSearchParameter'] = $relatedToKeywordSearchParameter;

        return $this;
    }

    /**
     * Gets relatedToUrlSearchParameter
     *
     * @return string|null
     */
    public function getRelatedToUrlSearchParameter()
    {
        return $this->container['relatedToUrlSearchParameter'];
    }

    /**
     * Sets relatedToUrlSearchParameter
     *
     * @param string|null $relatedToUrlSearchParameter <div lang=\"ja\">提案対象のURLです。</div> <div lang=\"en\">URL for the suggested target.</div>
     *
     * @return $this
     */
    public function setRelatedToUrlSearchParameter($relatedToUrlSearchParameter)
    {
        $this->container['relatedToUrlSearchParameter'] = $relatedToUrlSearchParameter;

        return $this;
    }

    /**
     * Gets startIndex
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['startIndex'];
    }

    /**
     * Sets startIndex
     *
     * @param int|null $startIndex <div lang=\"ja\">ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。</div><div lang=\"en\">Index of the first result to return in this page. This field must be greater than or equal to 1.</div>
     *
     * @return $this
     */
    public function setStartIndex($startIndex)
    {

        if (!is_null($startIndex) && ($startIndex < 1)) {
            throw new \InvalidArgumentException('invalid value for $startIndex when calling TargetingIdeaServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['startIndex'] = $startIndex;

        return $this;
    }

    /**
     * Gets numberResults
     *
     * @return int|null
     */
    public function getNumberResults()
    {
        return $this->container['numberResults'];
    }

    /**
     * Sets numberResults
     *
     * @param int|null $numberResults <div lang=\"ja\">ページの最大件数です。このフィールドは、1以上を指定する必要があります。</div><div lang=\"en\">Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.</div>
     *
     * @return $this
     */
    public function setNumberResults($numberResults)
    {

        if (!is_null($numberResults) && ($numberResults > 500)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling TargetingIdeaServiceSelector., must be smaller than or equal to 500.');
        }
        if (!is_null($numberResults) && ($numberResults < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling TargetingIdeaServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['numberResults'] = $numberResults;

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


