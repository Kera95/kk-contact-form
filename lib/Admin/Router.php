<?php
/**
 * Class Router
 * @package KKCForm\Admin
 * @author Kerim Karalic
 */

namespace KKCForm\Admin;


class Router
{
    /**
     * @var string
     */
    private static $resourcesDir;

    /**
     * @var string
     */
    private static $cssDir;

    /**
     * @var string
     */
    private static $jsDir;

    /**
     * @var string
     */
    private static $imgDir;

    /**
     * @var string
     */
    private static $viewsDir;

    /**
     * @var string
     */
    private static $resourcesUrl;

    /**
     * @var string
     */
    private static $cssUrl;

    /**
     * @var string
     */
    private static $jsUrl;

    /**
     * @var string
     */
    private static $imgUrl;

    /**
     * @var string
     */
    private static $filePrefix = "kkwpcf-";

    /**
     * Router constructor
     * Empty because the class is static
     */
    function __construct() {}

    public static function getView( $viewName ) {
        self::setSelfVars();
        $viewPathToReturn = "";

        if ( $viewName ) {
            $viewName = (string)$viewName;
            $fileName = self::$filePrefix . $viewName . '.php';

            if ( file_exists( self::$viewsDir . $fileName ) ) {
                $viewPathToReturn .= self::$viewsDir . $fileName;
            }
        }
        return $viewPathToReturn;
    }

    public static function getStylesheet( $stylesheetName ) {
        self::setSelfVars();
        $stylesheetUrlToReturn = '';

        if ( $stylesheetName ) {
            $stylesheetName = (string)$stylesheetName;
            $filename = $stylesheetName . '.css';

            if ( file_exists( self::$cssDir . $filename ) ) {
                $stylesheetUrlToReturn = self::$cssUrl . $filename;
            }
        }
        return $stylesheetUrlToReturn;
    }

    public static function getScript( $scriptName ) {
        self::setSelfVars();
        $scriptUrlToReturn = '';

        if ( $scriptName ) {
            $scriptName = (string)$scriptName;
            $filename = $scriptName . '.js';

            if ( file_exists( self::$jsDir . $filename ) ) {
                $scriptUrlToReturn = self::$jsUrl . $filename;
            }
        }
        return $scriptUrlToReturn;
    }

    public static function getImg( $imgName, $imgFormat ) {
        self::setSelfVars();
        $imgUrlToReturn = '';

        if ( $imgName && $imgFormat ) {
            $imgName = (string)$imgName;
            $imgFormat = (string)$imgFormat;
            $filename = '';

            switch ( $imgFormat ) {
                case "png": {
                    $filename = $imgName . '.' . $imgFormat;
                    break;
                }

                case "jpg": {
                    $filename = $imgName . '.' . $imgFormat;
                    break;
                }

                case "gif": {
                    $filename = $imgName . '.' . $imgFormat;
                    break;
                }

                default: { $filename = ''; }
            }

            if ( file_exists( self::$imgDir . $filename ) ) {
                $imgUrlToReturn = self::$imgUrl . $filename;
            }

        }
        return $imgUrlToReturn;
    }

    private static function setSelfVars() {
        self::$resourcesDir = trailingslashit( plugin_dir_path( KKCF_FILE ) . 'resources' );
        self::$viewsDir = trailingslashit( self::$resourcesDir . 'views' );
        self::$cssDir = trailingslashit( self::$resourcesDir . 'css' );
        self::$jsDir = trailingslashit( self::$resourcesDir . 'js' );
        self::$imgDir = trailingslashit( self::$resourcesDir . 'img' );

        self::$resourcesUrl = trailingslashit( plugin_dir_url( KKCF_FILE ) . 'resources' );
        self::$cssUrl = trailingslashit( self::$resourcesUrl . 'css' );
        self::$jsUrl = trailingslashit( self::$resourcesUrl . 'js' );
        self::$imgUrl = trailingslashit( self::$resourcesUrl . 'img' );
    }
}