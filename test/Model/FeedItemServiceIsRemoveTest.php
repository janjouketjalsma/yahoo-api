<?php
/**
 * FeedItemServiceIsRemoveTest
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
 * FeedItemServiceIsRemoveTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedItemServiceIsRemoveは、カスタムパラメータの削除フラグです。&lt;br&gt; customParametersおよびreviewCustomParameters配下の場合、このフィールドはSET時に省略可能となります。&lt;br&gt; locationオブジェクト配下の場合、このフィールドは、ADDおよびREMOVE時に無視され、SET時に省略可能となります。&lt;br&gt; ※地域設定を解除する場合は、locationオブジェクトのisRemoveにTRUEを指定します。&lt;br&gt; 地域設定解除後は、geoTargetingRestrictionにNONEが設定されます。&lt;/div&gt;&lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedItemServiceIsRemove is Delete flag. &lt;br&gt;Under customParameters and reviewCustomParameters, this field is optional in SET operation.&lt;br&gt;Under location object, this field will be ignored in ADD and REMOVE operation, and is optional in SET operation. &lt;br&gt;*To deactivate the location restriction, set isRemove of location object to TRUE. &lt;br&gt;After the deactivation, geoTargetingRestriction will be set to NONE. &lt;/div&gt;&lt;hr&gt; &lt;p&gt;* &lt;code&gt;TRUE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;カスタムパラメータの削除フラグがオンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Delete flag is on.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;FALSE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;カスタムパラメータの削除フラグがオフです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Delete flag is off.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package     Yahoo
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class FeedItemServiceIsRemoveTest extends TestCase
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
     * Test "FeedItemServiceIsRemove"
     */
    public function testFeedItemServiceIsRemove()
    {
    }
}
