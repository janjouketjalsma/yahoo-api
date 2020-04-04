<?php
/**
 * AdGroupAdServiceDevicePreference
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
 * AdGroupAdServiceDevicePreference Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupAdServiceDevicePreferenceは、広告を優先的に配信するデバイスを選択します。&lt;br&gt;ADD時、このフィールドは省略可能となります。※adTypeがEXTENDED_TEXT_ADの場合は無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupAdServiceDevicePreference then select a device delivering an advertisement with precedence.&lt;br&gt;This field is optional in ADD operation. *If adType is EXTENDED_TEXT_AD, this field will be ignored.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;SMART_PHONE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;スマートフォンを優先的に配信します。&lt;br&gt;作成（add）時のみご利用いただけます。&lt;br&gt;※優先デバイスの変更（set）・削除（remove）は実施できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Deliver ads to Smartphone in higher priority&lt;br&gt;Available for add operation only&lt;br&gt;It cannot be used in set or remove operation&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceDevicePreference
{
    /**
     * Possible values of this enum
     */
    const SMART_PHONE = 'SMART_PHONE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SMART_PHONE,
            self::UNKNOWN,
        ];
    }
}

