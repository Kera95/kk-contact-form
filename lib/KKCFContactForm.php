<?php
/**
 * Class KKCFContactForm
 * @package KKCF\Admin
 * @author Kerim Karalic
 */

namespace KKCForm;

use KKCForm\Admin\AdminMenu;
use KKCForm\Admin\Options;
use KKCForm\Admin\Shortcodes;
use KKCForm\Http\AjaxRequest;
use KKCForm\Http\Request;

class KKCFContactForm
{
    public function __construct() {}

    /**
     * Function to bootstrap the plugin
     * Takes no arguments
     * Calls the Plugin classes
     * @throws \Exception
     */
    public static function bootstrap() {
        // TODO: Polish up try catch in ::bootstrap() function
        try {

            $adminMenu = new AdminMenu();
            $options = new Options();
            $shortcodes = new Shortcodes();
            $request = new Request();
            $ajaxRequest = new AjaxRequest();

        } catch ( \Exception $ex ) {
            echo $ex;
        }

    }
}