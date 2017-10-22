<?php
/**
 * Class Options
 * @package KKCF\Admin
 * @author Kerim Karalic
 */

namespace KKCForm\Admin;


class Options
{
    public function __construct() {}

    public static function setOption( $optionName, $value, $autoload) {
        if ( $optionName && $value ) {
            if ( $autoload ) {
                if ( update_option( $optionName, $value, true ) ) {
                    return true;
                } else { return false; }
            } else {
                if ( update_option( $optionName, $value, false ) ) {
                    return true;
                } else { return false; }
            }
        }
    }

    public static function getOption( $optionName ) {
        $optionValue = '';
        if ( $optionName ) {
            $optionValue = get_option( $optionName );
        }
        return $optionValue;
    }
}