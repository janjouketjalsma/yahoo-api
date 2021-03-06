<?php
/**
 * CampaignServiceGeoTargetType
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
 * CampaignServiceGeoTargetType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignServiceGeoTargetTypeは、地域ターゲティングの地域判定の詳細設定を指定します。&lt;br&gt;ADD時、このフィールドは省略可能となります。その際、デフォルト設定値はDONT_CAREとなります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignServiceGeoTargetType specifies Advanced Location options of Geo Targeting.&lt;br&gt;This field is optional in ADD operation. The default value will be DONT_CARE. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;DONT_CARE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ターゲット地域設定の場合：&lt;br&gt;対象地域に所在する可能性があるユーザー、対象地域に関連する語句で検索したユーザー、対象地域に関心を示している可能性のあるユーザーに広告を配信します。&lt;br&gt;除外ターゲット地域設定の場合：&lt;br&gt;対象地域に所在する可能性があるユーザー、対象地域に関連する語句で検索したユーザー、対象地域に関心を示している可能性のあるユーザーには広告を配信しません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Positive Geo Target (Advanced location options):&lt;br&gt;Your ads will be displayed to users who may be in the target areas, to users who searched with queries including the targeted locations, to users who may be interested in the target area.&lt;br&gt;Negative Geo Target (Location exclusion options):&lt;br&gt;Your ads will not be displayed to users who may stay in the targeted area, who searched with queries including the targeted locations, to users who may be interested in the area.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;AREA_OF_INTENT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ターゲット地域設定の場合：&lt;br&gt;対象地域に関連する語句で検索したユーザーや、対象地域に関心を示している可能性のあるユーザーのみに広告を配信します。&lt;br&gt;※除外ターゲット地域設定の場合は選択できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Positive Geo Target (Advanced location options):&lt;br&gt;Your ads will be displayed to users who searched with queries including the targeted locations, to users who may be interested in the target area.&lt;br&gt;* This is not selectable with Negative Geo Target (Location exclusion options).&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;LOCATION_OF_PRESENCE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ターゲット地域設定の場合：&lt;br&gt;対象地域に所在する可能性があるユーザーにのみ、広告を配信します。&lt;br&gt;除外ターゲット地域設定の場合：対象地域に所在する可能性があるユーザーには、広告は配信されません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Positive Geo Target (Advanced location options):&lt;br&gt;Your ads will be displayed only to users who may be in the targeted area.&lt;br&gt;Negative Geo Target (Location Exclusion options):&lt;br&gt;Your ads will not be displayed to users who may be in the targeted areas.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceGeoTargetType
{
    /**
     * Possible values of this enum
     */
    const DONT_CARE = 'DONT_CARE';
    const AREA_OF_INTENT = 'AREA_OF_INTENT';
    const LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DONT_CARE,
            self::AREA_OF_INTENT,
            self::LOCATION_OF_PRESENCE,
            self::UNKNOWN,
        ];
    }
}


