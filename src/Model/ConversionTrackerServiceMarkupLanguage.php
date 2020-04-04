<?php
/**
 * ConversionTrackerServiceMarkupLanguage
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
 * ConversionTrackerServiceMarkupLanguage Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ConversionTrackerServiceMarkupLanguageは、スニペットの記述に使用するマークアップ言語を表します。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTrackerServiceMarkupLanguage shows ConversionTrackerServiceMarkupLanguage for Snipet. &lt;br&gt;This field is required in ADD operation, and is optional in SET operation.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;HTML&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;HTML言語です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;HTML&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;XHTML&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;XHTML言語です。参照のみ可能です。&lt;br&gt;※XHTMLの登録・更新は2016年6月15日で終了しました。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;XHTML. Reference only.&lt;br&gt;* Add/Update XHTML has been sunset on June15, 2016.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;CHTML&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;CHTML言語です。参照のみ可能です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;CHTML. Reference only.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;WML&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;WML言語です。参照のみ可能です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;WML. Reference only.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceMarkupLanguage
{
    /**
     * Possible values of this enum
     */
    const HTML = 'HTML';
    const CHTML = 'CHTML';
    const XHTML = 'XHTML';
    const WML = 'WML';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HTML,
            self::CHTML,
            self::XHTML,
            self::WML,
            self::UNKNOWN,
        ];
    }
}


