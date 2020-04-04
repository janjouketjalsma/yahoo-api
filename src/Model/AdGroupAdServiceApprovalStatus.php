<?php
/**
 * AdGroupAdServiceApprovalStatus
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
 * AdGroupAdServiceApprovalStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupAdServiceApprovalStatusは、審査状況を表します。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupAdServiceApprovalStatus displays Editorial Status.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;APPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;承認済です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item is approved&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;APPROVED_WITH_REVIEW&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;承認済です。&lt;br&gt;すでに掲載中のキーワード・広告を再編集し、審査中となり、編集前の広告が掲載されています。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item is approved&lt;br&gt;Updated items are under review&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;REVIEW&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;審査中です。&lt;br&gt;新しく追加したキーワード・広告が審査中となり、広告は未掲載です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Under editorial review&lt;br&gt;Newly added keywords/ads are under review, and not displayed yet&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;PRE_DISAPPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;掲載不可です。&lt;br&gt;新しく追加したキーワード・広告が審査で承認されず非掲載です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item was rejected&lt;br&gt;Newly added keywords/ads have been rejected, so it cannot be displayed&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;POST_DISAPPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;掲載停止です。&lt;br&gt;すでに掲載中のキーワード・広告について審査が行われた結果、承認されず非掲載です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item was rejected&lt;br&gt;Ads already displayed have been taken offline due to a result from post review&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  Yahoo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceApprovalStatus
{
    /**
     * Possible values of this enum
     */
    const APPROVED = 'APPROVED';
    const APPROVED_WITH_REVIEW = 'APPROVED_WITH_REVIEW';
    const REVIEW = 'REVIEW';
    const PRE_DISAPPROVED = 'PRE_DISAPPROVED';
    const POST_DISAPPROVED = 'POST_DISAPPROVED';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPROVED,
            self::APPROVED_WITH_REVIEW,
            self::REVIEW,
            self::PRE_DISAPPROVED,
            self::POST_DISAPPROVED,
            self::UNKNOWN,
        ];
    }
}


