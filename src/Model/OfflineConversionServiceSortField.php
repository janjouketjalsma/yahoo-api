<?php
/**
 * OfflineConversionServiceSortField
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
 * OfflineConversionServiceSortField Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ソートフィールド名です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Sort field name.&lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;UPLOAD_ID&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アップロードIDです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload ID.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UPLOAD_FILE_NAME&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アップロードファイル名です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload file name.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;PROCESS_STATUS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ステータスです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Processing status.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UPLOADED_DATE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アップロード日時です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Uproad date and time.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UPLOAD_TYPE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アップロード種別です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload type.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value.&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfflineConversionServiceSortField
{
    /**
     * Possible values of this enum
     */
    const UPLOAD_ID = 'UPLOAD_ID';
    const UPLOAD_FILE_NAME = 'UPLOAD_FILE_NAME';
    const PROCESS_STATUS = 'PROCESS_STATUS';
    const UPLOADED_DATE = 'UPLOADED_DATE';
    const UPLOAD_TYPE = 'UPLOAD_TYPE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPLOAD_ID,
            self::UPLOAD_FILE_NAME,
            self::PROCESS_STATUS,
            self::UPLOADED_DATE,
            self::UPLOAD_TYPE,
            self::UNKNOWN,
        ];
    }
}

