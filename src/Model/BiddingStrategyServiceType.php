<?php
/**
 * BiddingStrategyServiceType
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
 * BiddingStrategyServiceType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;BiddingStrategyServiceTypeは、自動入札タイプを表します。&lt;br&gt;このフィールドは、biddingScheme配下ではADD時は必須となり、SET時は省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;BiddingStrategyServiceType  displays the Auto Bidding type.&lt;br&gt;Under biddingScheme, this field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt;&lt;hr&gt; * &lt;code&gt;TARGET_CPA&lt;/code&gt; - &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョン単価の目標値です。&lt;br&gt;※キャンペーンの更新時のみ適用可能です。広告グループには現在設定できません。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;Target conversion spend (CPA).&lt;br&gt;* Available on updating campaign process. Currently not available for ad group.&lt;/div&gt;&lt;p&gt;* &lt;code&gt;TARGET_ROAS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告費用対効果の目標値です。&lt;br&gt;※キャンペーンの更新時のみ適用可能です。広告グループには現在設定できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Target ROAS.&lt;br&gt;* Available on updating campaign process. Currently not available for ad group.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;TARGET_SPEND&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;クリック数を最大化します。&lt;br&gt;※キャンペーンに適用可能です。広告グループには現在設定できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Maximize Clicks.&lt;br&gt;* Applicable for campaign. Currently not available for ad group.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BiddingStrategyServiceType
{
    /**
     * Possible values of this enum
     */
    const TARGET_ROAS = 'TARGET_ROAS';
    const TARGET_SPEND = 'TARGET_SPEND';
    const TARGET_CPA = 'TARGET_CPA';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TARGET_ROAS,
            self::TARGET_SPEND,
            self::TARGET_CPA,
            self::UNKNOWN,
        ];
    }
}


