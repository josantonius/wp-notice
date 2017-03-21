<?php 
/**
 * Display notices in WordPress administration panel.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/WP-Notice
 * @since      1.0.0
 */

namespace Josantonius\WP_Notice;

/**
 * Notice Handler.
 *
 * @since 1.0.0
 */
class WP_Notice {

    /**
     * Array with notices.
     *
     * @since 1.0.0
     *
     * @var array $notices 
     */
    public static $notices = [];

    /**
     * Set notices.
     * 
     * @since 1.0.0
     *
     * @param string $index
     * @param array  $param
     */
    public static function __callstatic($index, $param) {

        $message = isset($param[0]) ? $param[0] : 'unknown';

        $remove = (isset($param[1]) && !$param[1]) ? '' : 'is-dismissible';

        if ($index === 'error' && isset($param[0]->errors)) {

            foreach ($param[0]->errors as $key => $value) {

                $message = $value[0];
            }
        }

        $class = 'notice notice-' . $index . ' ' . $remove;

        self::$notices[] = "<div class='$class'><p>$message</p></div>";
    }

    /**
     * Display all saved notices.
     * 
     * @since 1.0.0
     */
    public static function display() {

        foreach (self::$notices as $value) {
            
            echo $value;
        }
    }
}
