<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Accountオブジェクトは、アカウントを表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Account&lt;/div&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'int',
        'accountName' => 'string',
        'accountStatus' => '\Yahoo\Model\AccountServiceStatus',
        'accountType' => '\Yahoo\Model\AccountServiceType',
        'authType' => '\Yahoo\Model\AccountServiceAuthType',
        'autoTaggingEnabled' => '\Yahoo\Model\AccountServiceAutoTaggingEnabled',
        'budget' => '\Yahoo\Model\AccountServiceBudget',
        'deliveryStatus' => '\Yahoo\Model\AccountServiceDeliveryStatus',
        'isTestAccount' => '\Yahoo\Model\AccountServiceIsTestAccount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => 'int64',
        'accountName' => null,
        'accountStatus' => null,
        'accountType' => null,
        'authType' => null,
        'autoTaggingEnabled' => null,
        'budget' => null,
        'deliveryStatus' => null,
        'isTestAccount' => null
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
        'accountName' => 'accountName',
        'accountStatus' => 'accountStatus',
        'accountType' => 'accountType',
        'authType' => 'authType',
        'autoTaggingEnabled' => 'autoTaggingEnabled',
        'budget' => 'budget',
        'deliveryStatus' => 'deliveryStatus',
        'isTestAccount' => 'isTestAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'accountName' => 'setAccountName',
        'accountStatus' => 'setAccountStatus',
        'accountType' => 'setAccountType',
        'authType' => 'setAuthType',
        'autoTaggingEnabled' => 'setAutoTaggingEnabled',
        'budget' => 'setBudget',
        'deliveryStatus' => 'setDeliveryStatus',
        'isTestAccount' => 'setIsTestAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'accountName' => 'getAccountName',
        'accountStatus' => 'getAccountStatus',
        'accountType' => 'getAccountType',
        'authType' => 'getAuthType',
        'autoTaggingEnabled' => 'getAutoTaggingEnabled',
        'budget' => 'getBudget',
        'deliveryStatus' => 'getDeliveryStatus',
        'isTestAccount' => 'getIsTestAccount'
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountStatus'] = isset($data['accountStatus']) ? $data['accountStatus'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['autoTaggingEnabled'] = isset($data['autoTaggingEnabled']) ? $data['autoTaggingEnabled'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['deliveryStatus'] = isset($data['deliveryStatus']) ? $data['deliveryStatus'] : null;
        $this->container['isTestAccount'] = isset($data['isTestAccount']) ? $data['isTestAccount'] : null;
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
     * @param int|null $accountId <div lang=\"ja\">アカウントIDです。<br>SET時、このフィールドは必須となります。</div> <div lang=\"en\">Account ID.<br>This field is required in SET operation.</div>
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string|null $accountName <div lang=\"ja\">アカウント名です。<br>SET時、このフィールドは省略可能となります。</div> <div lang=\"en\">Account Name.<br>This field is optional in SET operation.</div>
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets accountStatus
     *
     * @return \Yahoo\Model\AccountServiceStatus|null
     */
    public function getAccountStatus()
    {
        return $this->container['accountStatus'];
    }

    /**
     * Sets accountStatus
     *
     * @param \Yahoo\Model\AccountServiceStatus|null $accountStatus accountStatus
     *
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->container['accountStatus'] = $accountStatus;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return \Yahoo\Model\AccountServiceType|null
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     *
     * @param \Yahoo\Model\AccountServiceType|null $accountType accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets authType
     *
     * @return \Yahoo\Model\AccountServiceAuthType|null
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     *
     * @param \Yahoo\Model\AccountServiceAuthType|null $authType authType
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;

        return $this;
    }

    /**
     * Gets autoTaggingEnabled
     *
     * @return \Yahoo\Model\AccountServiceAutoTaggingEnabled|null
     */
    public function getAutoTaggingEnabled()
    {
        return $this->container['autoTaggingEnabled'];
    }

    /**
     * Sets autoTaggingEnabled
     *
     * @param \Yahoo\Model\AccountServiceAutoTaggingEnabled|null $autoTaggingEnabled autoTaggingEnabled
     *
     * @return $this
     */
    public function setAutoTaggingEnabled($autoTaggingEnabled)
    {
        $this->container['autoTaggingEnabled'] = $autoTaggingEnabled;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \Yahoo\Model\AccountServiceBudget|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \Yahoo\Model\AccountServiceBudget|null $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets deliveryStatus
     *
     * @return \Yahoo\Model\AccountServiceDeliveryStatus|null
     */
    public function getDeliveryStatus()
    {
        return $this->container['deliveryStatus'];
    }

    /**
     * Sets deliveryStatus
     *
     * @param \Yahoo\Model\AccountServiceDeliveryStatus|null $deliveryStatus deliveryStatus
     *
     * @return $this
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->container['deliveryStatus'] = $deliveryStatus;

        return $this;
    }

    /**
     * Gets isTestAccount
     *
     * @return \Yahoo\Model\AccountServiceIsTestAccount|null
     */
    public function getIsTestAccount()
    {
        return $this->container['isTestAccount'];
    }

    /**
     * Sets isTestAccount
     *
     * @param \Yahoo\Model\AccountServiceIsTestAccount|null $isTestAccount isTestAccount
     *
     * @return $this
     */
    public function setIsTestAccount($isTestAccount)
    {
        $this->container['isTestAccount'] = $isTestAccount;

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


