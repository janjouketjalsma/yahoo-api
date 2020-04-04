<?php
/**
 * ReportDefinitionServiceReportTypeTest
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
 * ReportDefinitionServiceReportTypeTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ReportDefinitionServiceReportTypeは、レポートの種類を表します。&lt;br&gt; ADD時、このフィールドは必須となります。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;ReportDefinitionServiceReportType displays a type of available report. &lt;br&gt;This field is required in ADD operation.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;ACCOUNT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アカウントレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Account Report.&lt;br&gt;Performance data of selected account.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;FEED_ITEM&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告表示オプションレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ad Display Option Report.&lt;br&gt;Performance data for selected Quick Links and/or Call Extension.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;KEYWORDLESS_QUERY&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;検索クエリーレポート（動的検索連動型広告）です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Search Query Report(DAS).&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;CAMPAIGN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Campaign Report.&lt;br&gt;Performance data for selected campaigns.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;AD&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告レポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ad Report.&lt;br&gt;Performance data for selected ads.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;BID_STRATEGY&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;自動入札レポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Auto Bidding Report.&lt;br&gt;Performance data for selected Auto Bidding.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;AD_CUSTOMIZERS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;データ自動挿入レポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Data Auto Insertion Report.&lt;br&gt;Performance data for selected Data Auto Insertion.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;KEYWORDS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;キーワードレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Keyword Report.&lt;br&gt;Performance data for selected keywords.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;SCHEDULE_TARGET&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;曜日・時間帯ターゲティングレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Schedule Targeting Report.&lt;br&gt;Performance data in Day of Week / Hours.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;LANDING_PAGE_URL&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;最終リンク先URLレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Landing Page Report.&lt;br&gt;Performance data for the final URL.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;GEO_TARGET&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;地域ターゲティングレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Geo Targeting Report.&lt;br&gt;Performance data for location targeting.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;SEARCH_QUERY&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;検索クエリレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Search Query Report.&lt;br&gt;Performance data for search queries which triggered the ad and received the clicks.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;WEBPAGE_CRITERION&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ページフィードターゲティングレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Page Feed Targeting Report.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;GEO&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;地域別レポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Geo Report.&lt;br&gt;Performance data by selected location.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;TARGET_LIST&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ターゲットリスト設定レポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Target List Report.&lt;br&gt;Performance data for selected target list.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;ADGROUP&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告グループレポートです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ad Group Report.&lt;br&gt;Performance data for selected ad group for one or more of campaigns.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package     Yahoo
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ReportDefinitionServiceReportTypeTest extends TestCase
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
     * Test "ReportDefinitionServiceReportType"
     */
    public function testReportDefinitionServiceReportType()
    {
    }
}
