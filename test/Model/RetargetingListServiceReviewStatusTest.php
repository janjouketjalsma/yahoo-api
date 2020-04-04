<?php
/**
 * RetargetingListServiceReviewStatusTest
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
 * RetargetingListServiceReviewStatusTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;RetargetingListServiceReviewStatusは、ターゲットリストの審査状態を表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;RetargetingListServiceReviewStatus is the review status of target list..&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;DISAPPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;利用不可です。&lt;br&gt;プライバシーポリシーの違反などで強制停止されている状態です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Target list is not available.&lt;br&gt;It has been stopped for violation of privacy policy or other reasons.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;DISAPPROVED_WITH_REVIEW&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;審査中です。&lt;br&gt;審査上問題なければ、一度利用不可になった ターゲットリストを利用可能に戻ります。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Re-examining.&lt;br&gt;If there is no problem, the target list can be used again.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;APPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;利用可能です。&lt;br&gt;※初回作成時のデフォルト設定です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Target list is available to use.&lt;br&gt;*Default setting when list is created.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package     Yahoo
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RetargetingListServiceReviewStatusTest extends TestCase
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
     * Test "RetargetingListServiceReviewStatus"
     */
    public function testRetargetingListServiceReviewStatus()
    {
    }
}
