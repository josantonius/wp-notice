<?php 
/**
 * Display notices in WordPress administration panel.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/WP_Notice
 * @since      1.0.1
 */

namespace Josantonius\WP_Notice\Test;

use Josantonius\WP_Notice\WP_Notice;

/**
 * Tests class for WP_Notice library.
 *
 * @since 1.0.1
 */
final class NoticeTest extends \WP_UnitTestCase { 

    /**
     * Set up.
     *
     * @since 1.0.4
     *
     * @return void
     */
    public function setUp() {

        set_current_screen('admin.php');
    }

    /**
     * Notice success dimissable.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticeSuccessDimissable() {
        
        $this->assertTrue(

            WP_Notice::success('Success example')
        );
    }

    /**
     * Notice success not dimissable.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticeSuccessNotDimissable() {
        
        $this->assertTrue(

            WP_Notice::success('Success not dismissable', false)
        );
    }

    /**
     * Notice warning dimissable.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticeWarningDimissable() {
        
        $this->assertTrue(

            WP_Notice::warning('Warning example')
        );
    }

    /**
     * Notice warning not dimissable.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticeWarningNotDimissable() {
        
        $this->assertTrue(

            WP_Notice::warning('Warning not dismissable', false)
        );
    }

    /**
     * Notice error dimissable.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticeErrorDimissable() {
        
        $this->assertTrue(

            WP_Notice::error('Error creation without going through WP_Error')
        );
    }

    /**
     * Notice error from WP_Error.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticeErrorFromWP_Error() {
        
        $error = new \WP_Error('error', 

            'Example of error creation from WP_Error'
        );

        $this->assertTrue(

            WP_Notice::error($error)
        );
    }

    /**
     * Notice error not dimissable.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticeErrorNotDimissable() {
        
        $this->assertTrue(

            WP_Notice::error('Error not dismissable', false)
        );
    }

    /**
     * Validate if notices are printed.
     *
     * @since 1.0.1
     *
     * @return void
     */
    public function testNoticesPrinted() {

        $this->expectOutputRegex("/Success example/");

        $this->expectOutputRegex("/Success not dismissable/");

        $this->expectOutputRegex("/Warning example/");

        $this->expectOutputRegex("/Warning not dismissable/");

        $this->expectOutputRegex("/through WP_Error/");

        $this->expectOutputRegex("/error creation from WP_Error/");

        $this->expectOutputRegex("/Error not dismissable/");
        
        do_action('admin_notices');

    }
}
