<?php
/**
 * RetargetingListServiceIsDateSpecificRule
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
use \Yahoo\ObjectSerializer;

/**
 * RetargetingListServiceIsDateSpecificRule Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;RetargetingListServiceIsDateSpecificRuleは、期限付きルールか定義します。&lt;br&gt;ADD時、このフィールドは省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;RetargetingListServiceIsDateSpecificRule defines the rule with deadline. &lt;br&gt;This field is optional in ADD operation.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;TRUE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;期限が付くルールとして定義します。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Rule with deadline.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;FALSE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;期限を付けないルールとして定義します。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Rule without deadline.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingListServiceIsDateSpecificRule
{
    /**
     * Possible values of this enum
     */
    const TRUE = 'TRUE';
    const FALSE = 'FALSE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRUE,
            self::FALSE,
            self::UNKNOWN,
        ];
    }
}


