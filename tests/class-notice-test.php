<?php
/**
 * Display notices in WordPress administration panel.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   Josantonius\WP_Notice
 * @copyright 2017 - 2018 (c) Josantonius - WP_Notice
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/WP_Notice
 * @since     1.0.1
 */

namespace Josantonius\WP_Notice\Test;

use Josantonius\WP_Notice\WP_Notice;

/**
 * Tests class for WP_Notice library.
 */
final class NoticeTest extends \WP_UnitTestCase {

	/**
	 * WP_Notice instance.
	 *
	 * @since 1.0.2
	 *
	 * @var object
	 */
	protected $wp_notice;

	/**
	 * Set up.
	 */
	public function setUp() {

		$this->wp_notice = new WP_Notice();

		set_current_screen( 'admin.php' );
	}

	/**
	 * Check if it is an instance of WP_Register.
	 *
	 * @since 1.0.2
	 */
	public function test_is_instance_of() {

		$this->assertInstanceOf(
			'Josantonius\WP_Notice\WP_Notice',
			$this->wp_notice
		);
	}

	/**
	 * Notice success dimissable.
	 */
	public function testNoticeSuccessDimissable() {

		$wp_notice = $this->wp_notice;

		$this->assertTrue(
			$wp_notice::success( 'Success example' )
		);
	}

	/**
	 * Notice success not dimissable.
	 */
	public function testNoticeSuccessNotDimissable() {

		$wp_notice = $this->wp_notice;

		$this->assertTrue(
			$wp_notice::success( 'Success not dismissable', false )
		);
	}

	/**
	 * Notice warning dimissable.
	 */
	public function testNoticeWarningDimissable() {

		$wp_notice = $this->wp_notice;

		$this->assertTrue(
			$wp_notice::warning( 'Warning example' )
		);
	}

	/**
	 * Notice warning not dimissable.
	 */
	public function testNoticeWarningNotDimissable() {

		$wp_notice = $this->wp_notice;

		$this->assertTrue(
			$wp_notice::warning( 'Warning not dismissable', false )
		);
	}

	/**
	 * Notice error dimissable.
	 */
	public function testNoticeErrorDimissable() {

		$wp_notice = $this->wp_notice;

		$this->assertTrue(
			$wp_notice::error( 'Error creation without going through WP_Error' )
		);
	}

	/**
	 * Notice error from WP_Error.
	 */
	public function testNoticeErrorFromWP_Error() {

		$wp_notice = $this->wp_notice;

		$error = new \WP_Error(
			'error',
			'Example of error creation from WP_Error'
		);

		$this->assertTrue(
			$wp_notice::error( $error )
		);
	}

	/**
	 * Notice error not dimissable.
	 */
	public function testNoticeErrorNotDimissable() {

		$wp_notice = $this->wp_notice;

		$this->assertTrue(
			$wp_notice::error( 'Error not dismissable', false )
		);
	}

	/**
	 * Validate if notices are printed.
	 */
	public function testNoticesPrinted() {

		$this->expectOutputRegex( '/Success example/' );
		$this->expectOutputRegex( '/Success not dismissable/' );
		$this->expectOutputRegex( '/Warning example/' );
		$this->expectOutputRegex( '/Warning not dismissable/' );
		$this->expectOutputRegex( '/through WP_Error/' );
		$this->expectOutputRegex( '/error creation from WP_Error/' );
		$this->expectOutputRegex( '/Error not dismissable/' );

		do_action( 'admin_notices' );

	}
}
