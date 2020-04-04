<?php
/**
 * CampaignServiceAppStore
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
 * CampaignServiceAppStore Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignServiceAppStore、ユーザーにより広告配信の有無を調整できる設定です。&lt;br&gt;ADD時、campaignTypeがSTANDARD、またはDYNAMIC_ADS_FOR_SEARCH_SETTINGの場合、無視され、MOBILE_APPの場合、必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignServiceAppStore is the type of app store.&lt;br&gt;In ADD operation, this field will be ignored when campaignType is &#39;STANDARD&#39; or &#39;DYNAMIC_ADS_FOR_SEARCH_SETTING&#39;, and is required when campaignType is MOBILE_APP. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;IOS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;iOS（App Store）です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;iOS (App Store)&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;ANDROID&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;Android（Google Play）です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Android (Google Play)&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceAppStore
{
    /**
     * Possible values of this enum
     */
    const IOS = 'IOS';
    const ANDROID = 'ANDROID';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IOS,
            self::ANDROID,
            self::UNKNOWN,
        ];
    }
}


