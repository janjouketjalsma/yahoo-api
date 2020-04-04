<?php
/**
 * AdGroupCriterionServiceBidSource
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
 * AdGroupCriterionServiceBidSource Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupCriterionServiceBidSourceは、入札価格の設定されているレベルを表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupCriterionServiceBidSource displays which level bid belongs to (criterion or ad group.)&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;ADGROUP&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告グループレベルです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Effective Bid is Adgroup level bid&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;CRITERION&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;キーワードレベルです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Effective Bid is Keyword level bid&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupCriterionServiceBidSource
{
    /**
     * Possible values of this enum
     */
    const ADGROUP = 'ADGROUP';
    const CRITERION = 'CRITERION';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADGROUP,
            self::CRITERION,
            self::UNKNOWN,
        ];
    }
}

