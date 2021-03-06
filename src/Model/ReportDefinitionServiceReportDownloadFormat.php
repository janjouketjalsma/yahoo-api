<?php
/**
 * ReportDefinitionServiceReportDownloadFormat
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
 * ReportDefinitionServiceReportDownloadFormat Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ReportDefinitionServiceReportDownloadFormatは、定義されたダウンロードレポートのファイル形式を表します。&lt;br&gt;ADD時、このフィールドは省略可能となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ReportDefinitionServiceReportDownloadFormat displays a file format of the report. &lt;br&gt;This field is optional in ADD operation.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;CSV&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;CSVフォーマットです。&lt;br&gt;カンマで区分されます。&lt;br&gt; ※デフォルトに設定されます。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;CSV output format.&lt;br&gt;Separated by comma. &lt;br&gt; *Default setting. &lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;XML&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;XMLフォーマットです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;XML output format.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;TSV&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;TSVフォーマットです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;TSV output format.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinitionServiceReportDownloadFormat
{
    /**
     * Possible values of this enum
     */
    const CSV = 'CSV';
    const XML = 'XML';
    const TSV = 'TSV';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CSV,
            self::XML,
            self::TSV,
            self::UNKNOWN,
        ];
    }
}


