<?php
/**
 * ReportDefinitionServiceReportLanguage
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
 * ReportDefinitionServiceReportLanguage Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ReportDefinitionServiceReportLanguageは、レポート定義の言語選択を表します。&lt;br&gt; ADD時、このフィールドは省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ReportDefinitionServiceReportLanguage is a language selection for report definition. &lt;br&gt;This field is optional in ADD operation.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;JA&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;言語：日本語です。&lt;br&gt;※デフォルトに設定されます。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Language: Japanese. &lt;br&gt; *Default setting.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;EN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;言語：英語です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Language: English.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinitionServiceReportLanguage
{
    /**
     * Possible values of this enum
     */
    const JA = 'JA';
    const EN = 'EN';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JA,
            self::EN,
            self::UNKNOWN,
        ];
    }
}


