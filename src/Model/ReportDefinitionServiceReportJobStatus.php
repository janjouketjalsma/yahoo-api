<?php
/**
 * ReportDefinitionServiceReportJobStatus
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
 * ReportDefinitionServiceReportJobStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ReportDefinitionServiceReportJobStatusは、定義されたレポートの処理状況です。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;A status of the requested report.&lt;/div&gt;&lt;hr&gt;  &lt;p&gt;* &lt;code&gt;WAIT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;待機中です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Please wait for report request to complete.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;COMPLETED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;正常に終了しました。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Report request completed successfully.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;IN_PROGRESS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;レポートは作成中です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Report is in creating process.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;FAILED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理が失敗しました。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Report request failed.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinitionServiceReportJobStatus
{
    /**
     * Possible values of this enum
     */
    const WAIT = 'WAIT';
    const COMPLETED = 'COMPLETED';
    const IN_PROGRESS = 'IN_PROGRESS';
    const FAILED = 'FAILED';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WAIT,
            self::COMPLETED,
            self::IN_PROGRESS,
            self::FAILED,
            self::UNKNOWN,
        ];
    }
}


