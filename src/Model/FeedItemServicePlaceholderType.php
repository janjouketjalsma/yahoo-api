<?php
/**
 * FeedItemServicePlaceholderType
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
 * FeedItemServicePlaceholderType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedItemServicePlaceholderTypeは、FeedItem情報の種類を選択します。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedItemServicePlaceholderType selects FeeItem information type. &lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;AD_CUSTOMIZER&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;データ自動挿入です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Data Auto Insertion&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;CALLOUT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;テキスト補足オプションです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Callout option from Ad Display Option&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;STRUCTURED_SNIPPET&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;カテゴリ補足オプションです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Structured snippet option from Ad Display Option&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;QUICKLINK&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告表示オプションのクイックリンクオプションです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;QuickLink option from Ad Display Option&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;CALLEXTENSION&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告表示オプションの電話番号オプションです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Call Extension (Phone Number) option from Ad Display Option&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedItemServicePlaceholderType
{
    /**
     * Possible values of this enum
     */
    const QUICKLINK = 'QUICKLINK';
    const CALLEXTENSION = 'CALLEXTENSION';
    const AD_CUSTOMIZER = 'AD_CUSTOMIZER';
    const CALLOUT = 'CALLOUT';
    const STRUCTURED_SNIPPET = 'STRUCTURED_SNIPPET';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUICKLINK,
            self::CALLEXTENSION,
            self::AD_CUSTOMIZER,
            self::CALLOUT,
            self::STRUCTURED_SNIPPET,
            self::UNKNOWN,
        ];
    }
}


