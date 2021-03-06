<?php
/**
 * LabelServiceSelector
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
 * LabelServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;LabelServiceSelectorオブジェクトは、操作の対象とするラベルの情報およびフィルタ条件を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;LabelServiceSelector object describes the information of label to be operated and filter conditions.&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LabelServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'countLabeledEntity' => '\Yahoo\Model\LabelServiceCountLabeledEntity',
        'labelIds' => 'int[]',
        'numberResults' => 'int',
        'startIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'countLabeledEntity' => null,
        'labelIds' => 'int64',
        'numberResults' => 'int32',
        'startIndex' => 'int32'
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
        'countLabeledEntity' => 'countLabeledEntity',
        'labelIds' => 'labelIds',
        'numberResults' => 'numberResults',
        'startIndex' => 'startIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'countLabeledEntity' => 'setCountLabeledEntity',
        'labelIds' => 'setLabelIds',
        'numberResults' => 'setNumberResults',
        'startIndex' => 'setStartIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'countLabeledEntity' => 'getCountLabeledEntity',
        'labelIds' => 'getLabelIds',
        'numberResults' => 'getNumberResults',
        'startIndex' => 'getStartIndex'
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
        $this->container['countLabeledEntity'] = isset($data['countLabeledEntity']) ? $data['countLabeledEntity'] : null;
        $this->container['labelIds'] = isset($data['labelIds']) ? $data['labelIds'] : null;
        $this->container['numberResults'] = isset($data['numberResults']) ? $data['numberResults'] : 500;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : 1;
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
        if (!is_null($this->container['numberResults']) && ($this->container['numberResults'] > 2000)) {
            $invalidProperties[] = "invalid value for 'numberResults', must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['numberResults']) && ($this->container['numberResults'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberResults', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['startIndex']) && ($this->container['startIndex'] < 1)) {
            $invalidProperties[] = "invalid value for 'startIndex', must be bigger than or equal to 1.";
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
     * @param int $accountId <div lang=\"ja\">アカウントID</div><div lang=\"en\">Account ID.</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets countLabeledEntity
     *
     * @return \Yahoo\Model\LabelServiceCountLabeledEntity|null
     */
    public function getCountLabeledEntity()
    {
        return $this->container['countLabeledEntity'];
    }

    /**
     * Sets countLabeledEntity
     *
     * @param \Yahoo\Model\LabelServiceCountLabeledEntity|null $countLabeledEntity countLabeledEntity
     *
     * @return $this
     */
    public function setCountLabeledEntity($countLabeledEntity)
    {
        $this->container['countLabeledEntity'] = $countLabeledEntity;

        return $this;
    }

    /**
     * Gets labelIds
     *
     * @return int[]|null
     */
    public function getLabelIds()
    {
        return $this->container['labelIds'];
    }

    /**
     * Sets labelIds
     *
     * @param int[]|null $labelIds <div lang=\"ja\">ラベルID<br>指定しない場合は、フィルタ条件に すべてのラベルが含まれます。</div><div lang=\"en\">Label ID.<br>If not specified, the filter condition includes all labels.</div>
     *
     * @return $this
     */
    public function setLabelIds($labelIds)
    {
        $this->container['labelIds'] = $labelIds;

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

        if (!is_null($numberResults) && ($numberResults > 2000)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling LabelServiceSelector., must be smaller than or equal to 2000.');
        }
        if (!is_null($numberResults) && ($numberResults < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberResults when calling LabelServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['numberResults'] = $numberResults;

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
            throw new \InvalidArgumentException('invalid value for $startIndex when calling LabelServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['startIndex'] = $startIndex;

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


