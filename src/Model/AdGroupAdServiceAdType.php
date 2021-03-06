<?php
/**
 * AdGroupAdServiceAdType
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
 * AdGroupAdServiceAdType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupAdServiceAdTypeは、広告の配信先デバイスと配信先に応じたタイトル・説明文の文字数を表します。&lt;br&gt;ADD時、このフィールドは必須となります。&lt;br&gt;なお、選択した配信先デバイスにより、指定可能な広告の文字数は異なります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupAdServiceAdType is device type and number of title and description character.&lt;br&gt;This field is required in ADD operation.&lt;br&gt;The number of character vary from the device type you choose.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;EXTENDED_TEXT_AD&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;「タイトル15文字-15文字、説明文40文字」のテキスト広告です。&lt;br&gt;PC、スマートフォン・タブレット端末の場合にご利用いただけます。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Text ads for “Title: 15 - 15 characters, Description: 40 characters”.&lt;br&gt;It is available for PC, Smartphone and Tablet.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;DYNAMIC_SEARCH_LINKED_AD&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;動的検索連動型広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Dynamic Search Ads&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;TEXT_AD2&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;「タイトル15文字、説明文19文字-19文字」のテキスト広告です。&lt;br&gt;PC、スマートフォン・タブレット端末の場合にご利用いただけます。&lt;br&gt;※現在、こちらの広告タイプでは入稿できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Text ads for “Title: 15 characters, Description: 19 characters / 19 characters”.&lt;br&gt;It is available for PC, Smartphone and Tablet.&lt;br&gt;*Currently this ad type is not available for ad creation.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;APP_AD&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アプリ用広告です。&lt;br&gt;スマートフォン・タブレット端末の場合にご利用いただけます。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ads for Mobile App Ads.&lt;br&gt;It is available for Smartphone or Tablet.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceAdType
{
    /**
     * Possible values of this enum
     */
    const TEXT_AD2 = 'TEXT_AD2';
    const APP_AD = 'APP_AD';
    const EXTENDED_TEXT_AD = 'EXTENDED_TEXT_AD';
    const DYNAMIC_SEARCH_LINKED_AD = 'DYNAMIC_SEARCH_LINKED_AD';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT_AD2,
            self::APP_AD,
            self::EXTENDED_TEXT_AD,
            self::DYNAMIC_SEARCH_LINKED_AD,
            self::UNKNOWN,
        ];
    }
}


