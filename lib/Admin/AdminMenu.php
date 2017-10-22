<?php
/**
 * Class AdminMenu
 * @package KKCF\Admin
 * @author Kerim Karalic
 */

namespace KKCForm\Admin;


class AdminMenu
{
    private $menuPages = [];

    public function __construct()
    {
        $this->menuPages = [
            'main' => [
                'page_title' => __( 'KKCF Contact', KKCF_TEXTDOMAIN ),
                'menu_title' => __( 'KKCF Contact', KKCF_TEXTDOMAIN ),
                'capability' => 'manage_options',
                'menu_slug' => 'kkwpcf-main',
                'callback' => 'getMenuPage',
                'icon_url' => '',
                'menu_position' => 86
            ],
            'settings' => [
                'parent_slug' => 'kkwpcf-main',
                'page_title' => __( 'Settings', KKCF_TEXTDOMAIN ),
                'menu_title' => __( 'Settings', KKCF_TEXTDOMAIN ),
                'capability' => 'manage_options',
                'menu_slug' => 'kkwpcf-settings',
                'callback' => 'getSettingsPage'
            ]
        ];

        $this->actionHooks();
    }

    private function actionHooks() {
        add_action( 'admin_menu', [&$this, 'loadMenuPages'] );
        add_action( 'admin_enqueue_scripts', [&$this, 'loadScripts'] );
    }

    public function loadMenuPages() {
        add_menu_page( $this->menuPages['main']['page_title'], $this->menuPages['main']['menu_title'], $this->menuPages['main']['capability'], $this->menuPages['main']['menu_slug'], [&$this, $this->menuPages['main']['callback']], $this->menuPages['main']['icon_url'], $this->menuPages['main']['menu_position'] );
        add_submenu_page( $this->menuPages['settings']['parent_slug'], $this->menuPages['settings']['page_title'], $this->menuPages['settings']['menu_title'], $this->menuPages['settings']['capability'], $this->menuPages['settings']['menu_slug'], [&$this, $this->menuPages['settings']['callback']] );
    }

    public function getMenuPage() {
        $viewPath = '';
        $viewPath .= Router::getView( 'main' );
        if ( $viewPath ) {
            require_once( $viewPath );
        }
    }

    public function getSettingsPage() {
        $viewPath = '';
        $viewPath .= Router::getView( 'settings' );
        if ( $viewPath ) {
            require_once( $viewPath );
        }
    }

    public function loadScripts() {
        $stylesheetUrl = '';
        $scriptUrl = '';
        $stylesheetUrl .= Router::getStylesheet( 'main' );
        $scriptUrl .= Router::getScript( 'main' );
        if ( $stylesheetUrl ) {
            wp_enqueue_style( 'kkcf-main', $stylesheetUrl, [], '1.0.0', 'all' );
            wp_enqueue_script( 'jquery-ui-sortable' );
            wp_enqueue_script( 'kkcf-main', $scriptUrl, [], '1.0.0', true );
        }
    }
}