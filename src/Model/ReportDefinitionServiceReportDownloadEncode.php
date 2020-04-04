<?php
/**
 * ReportDefinitionServiceReportDownloadEncode
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
 * ReportDefinitionServiceReportDownloadEncode Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ReportDefinitionServiceReportDownloadEncodeは、ダウンロードするレポートの文字コードを表します。&lt;br&gt;ADD時、このフィールドは省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ReportDefinitionServiceReportDownloadEncode displays a character code of the report. &lt;br&gt;This field is optional in ADD operation.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;UTF-8&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;文字コード：UTF-8です。&lt;br&gt;※デフォルトに設定されます。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Character code: UTF-8. &lt;br&gt;*Default setting.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;SJIS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;文字コード：Shift-JISです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Character code: SJIS.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;EUC&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;文字コード：EUCです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Character code: EUC.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UTF16LE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;文字コード：UTF16LEです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Character code: UTF16LE.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinitionServiceReportDownloadEncode
{
    /**
     * Possible values of this enum
     */
    const UTF_8 = 'UTF-8';
    const SJIS = 'SJIS';
    const EUC = 'EUC';
    const UTF16_LE = 'UTF16LE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UTF_8,
            self::SJIS,
            self::EUC,
            self::UTF16_LE,
            self::UNKNOWN,
        ];
    }
}


