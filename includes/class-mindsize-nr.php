<?php
namespace Mindsize\NewRelic;
use WP_CLI;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Mindsize NewRelic plugin main file.
 *
 * @since     1.0.0
 * @author    Mindsize <info@mindsize.me>
 * @copyright Copyright (c) 2017 Mindsize <info@mindsize.me>
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */
class Plugin {
	/**
	 * Constructor.
	 */
	public function __construct() {

	}

	public function init() {
		// check for newrelic extension, show notice if it's not there and bail
		if ( ! extension_loaded( 'newrelic' ) ) {
			add_action( 'admin_notices', array( $this, 'nr_not_installed' ) );
			return;
		}
	}

	/**
	 * Admin notice in case the new relic extension is not available to PHP. Hooked into admin_notices from
	 * self::init();
	 *
	 * @see  admin_notices hook
	 *
	 * @since  1.0.0
	 */
	public function nr_not_installed() {
		?>
		<div class="error"><p><strong>Mindsize New Relic: </strong><?php esc_html_e( 'New Relic is not installed.', MINDSIZE_NR_SLUG ) ?></p></div>
		<?php
	}
}
