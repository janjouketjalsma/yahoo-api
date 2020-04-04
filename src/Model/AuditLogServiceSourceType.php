<?php
/**
 * AuditLogServiceSourceType
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
 * AuditLogServiceSourceType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AuditLogServiceSourceTypeは、操作履歴における操作者を表します。&lt;br&gt;このフィールドは、省略可能となります。その際、デフォルト値はAPIとなります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AuditLogServiceSourceType desribes the operator information of operation history data.&lt;br&gt;This field is optional. The default value will be API. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;API&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;APIアカウントによる操作です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Operated by API account.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;YAHOO_JAPAN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;Yahoo!広告システムによる操作です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Operated by the system of Yahoo! Ads. &lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;CAMPAIGN_MANAGEMENT_TOOL&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告管理ツールからの履歴です。 &lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Campaign Management Tool&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;ALL&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;すべての操作者による操作です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Operated by all of operators.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuditLogServiceSourceType
{
    /**
     * Possible values of this enum
     */
    const API = 'API';
    const YAHOO_JAPAN = 'YAHOO_JAPAN';
    const CAMPAIGN_MANAGEMENT_TOOL = 'CAMPAIGN_MANAGEMENT_TOOL';
    const ALL = 'ALL';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::API,
            self::YAHOO_JAPAN,
            self::CAMPAIGN_MANAGEMENT_TOOL,
            self::ALL,
            self::UNKNOWN,
        ];
    }
}


