<?php
/**
 * CampaignServiceTargetAll
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
 * CampaignServiceTargetAll Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;サイトリターゲティングにおける配信対象ユーザーの設定内容を表します。&lt;br&gt;ADD時およびSET時、このフィールドは必須となります。 &lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignServiceTargetAll describes the setting of target(include) users on Site Retargeting.&lt;br&gt;This field is required in ADD and SET operation. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;ACTIVE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;すべてのユーザーを配信対象とします。&lt;br&gt;ターゲットリストのユーザーは入札価格調整率の適用のみ行います。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;All users are target of ad delivery.&lt;br&gt;Only applying bid adjustment rate is done for users on the Target List.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;DEACTIVE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ターゲットリストのユーザーのみを配信対象とします。&lt;br&gt;また、ターゲットリストのユーザーに対して入札価格調整率を適用します。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Users on the Target List are target of ad delivery.&lt;br&gt;And bid adjustment rate is applied to users on the Target List.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceTargetAll
{
    /**
     * Possible values of this enum
     */
    const ACTIVE = 'ACTIVE';
    const DEACTIVE = 'DEACTIVE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::DEACTIVE,
            self::UNKNOWN,
        ];
    }
}


