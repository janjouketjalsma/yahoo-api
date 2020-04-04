<?php
/**
 * PageFeedItemServiceApprovalStatusTest
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
 * PageFeedItemServiceApprovalStatusTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;PageFeedItemServiceApprovalStatusは、審査ステータスを表します。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;PageFeedItemServiceApprovalStatus displays Editorial Status.&lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;APPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;承認済&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item is approved&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;APPROVED_WITH_REVIEW&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;編集内容審査中&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item is approved&lt;br&gt;Updated items are under review&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;REVIEW&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;審査中&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Under editorial review&lt;br&gt;Newly added keywords/ads are under review, and not displayed yet&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;PRE_DISAPPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;掲載不可&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item was rejected&lt;br&gt;Newly added keywords/ads have been rejected, so it cannot be displayed&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;POST_DISAPPROVED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;掲載停止&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The item was rejected&lt;br&gt;Ads already displayed have been taken offline due to a result from post review&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package     Yahoo
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PageFeedItemServiceApprovalStatusTest extends TestCase
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
     * Test "PageFeedItemServiceApprovalStatus"
     */
    public function testPageFeedItemServiceApprovalStatus()
    {
    }
}
