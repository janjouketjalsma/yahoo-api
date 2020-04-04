<?php
/**
 * CampaignServiceServingStatusTest
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
 * Please update the test case below to test the model.
 */

namespace Yahoo;

use PHPUnit\Framework\TestCase;

/**
 * CampaignServiceServingStatusTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignServiceServingStatusは、キャンペーンレベルの配信状況です。 ユーザーによる広告配信の調整に関わらず、キャンペーンとしての状態を表します。&lt;br&gt;このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignServiceServingStatus displays delivery status in campaign level. Display the campaign status, regardless of userStatus setting.&lt;br&gt;Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;SERVING&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンは、現在配信されています。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The campaign is currently serving ads.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;ENDED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;配信が終了しています。&lt;br&gt;設定されたキャンペーン期間後のため、現在配信されていません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The campaign has ended.&lt;br&gt;It is already past the delivery period, so the campaign is currently not serving ads.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;PENDING&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;配信が開始していません。&lt;br&gt;設定されたキャンペーン期間前のため、現在まだ配信されていません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The campaign has not started.&lt;br&gt;It has not reached the delivery period, so the campaign is currently not serving ads.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;STOP&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンは、現在配信されていません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The campaign has been suspended.&lt;br&gt;(Reason may from lack of allocated funds)&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package     Yahoo
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CampaignServiceServingStatusTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "CampaignServiceServingStatus"
     */
    public function testCampaignServiceServingStatus()
    {
    }
}