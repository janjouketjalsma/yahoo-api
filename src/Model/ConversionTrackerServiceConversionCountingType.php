<?php
/**
 * ConversionTrackerServiceConversionCountingType
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
 * ConversionTrackerServiceConversionCountingType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ConversionTrackerServiceConversionCountingTypeは、コンバージョンの計測方法を表します。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となります。&lt;br&gt;※ADD時のデフォルト設定値はMANY_PER_CLICKとなります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTrackerServiceConversionCountingType desribes how to count conversions. &lt;br&gt;This field is optional in ADD and SET operation. &lt;br&gt; *The default value in ADD operation will be MANY_PER_CLICK.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;ONE_PER_CLICK&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ユニークコンバージョンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;One perticular conversion&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;MANY_PER_CLICK&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;総コンバージョンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Total conversions (greater than one_per_click).&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceConversionCountingType
{
    /**
     * Possible values of this enum
     */
    const ONE_PER_CLICK = 'ONE_PER_CLICK';
    const MANY_PER_CLICK = 'MANY_PER_CLICK';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONE_PER_CLICK,
            self::MANY_PER_CLICK,
            self::UNKNOWN,
        ];
    }
}


