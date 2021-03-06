<?php
/**
 * BidLandscapeServiceAdGroupBidLandscapeType
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
 * BidLandscapeServiceAdGroupBidLandscapeType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;ja&gt;AdGroupBidLandscapeTypeは、AdGroupLandscapeのタイプを示します。&lt;/div&gt; &lt;div lang&#x3D;en&gt;The type of AdGroupLandscape&lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;UNIFORM&lt;/code&gt; - &lt;span lang&#x3D;ja&gt;デフォルトの入札単価があらゆるクライテリアに適用されることを示します。&lt;/span&gt;&lt;span lang&#x3D;en&gt;It shows a default bid price is applied to every criteria.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;DEFAULT&lt;/code&gt; - &lt;span lang&#x3D;ja&gt;クライテリアの入札単価がデフォルトの入札単価をオーバーライドすることを示します。&lt;/span&gt;&lt;span lang&#x3D;en&gt;It shows that the bid price of criteria will override a default bid price.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;ja&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;en&gt;Unknown Value.&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BidLandscapeServiceAdGroupBidLandscapeType
{
    /**
     * Possible values of this enum
     */
    const UNIFORM = 'UNIFORM';
    const _DEFAULT = 'DEFAULT';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNIFORM,
            self::_DEFAULT,
            self::UNKNOWN,
        ];
    }
}


