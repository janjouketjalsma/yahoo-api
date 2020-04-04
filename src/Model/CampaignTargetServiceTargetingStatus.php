<?php
/**
 * CampaignTargetServiceTargetingStatus
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
 * CampaignTargetServiceTargetingStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignTargetServiceTargetingStatusは、キャンペーンのターゲティングステータスを表します。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Status of targeting setting. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;ACTIVE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ターゲティング可能な状態です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Status when targeting is possible&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;OBSOLETE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;廃止のためターゲティング不可能な状態です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Status when targeting is not possible, because it is abolished&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;PHASING_OUT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;まもなく廃止またはターゲティング不可能になる状態です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Status when it soon be abolished, or targeting will become impossible&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignTargetServiceTargetingStatus
{
    /**
     * Possible values of this enum
     */
    const ACTIVE = 'ACTIVE';
    const OBSOLETE = 'OBSOLETE';
    const PHASING_OUT = 'PHASING_OUT';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::OBSOLETE,
            self::PHASING_OUT,
            self::UNKNOWN,
        ];
    }
}

