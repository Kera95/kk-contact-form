<?php
/**
 * Class Shortcodes
 * @package KKCForm\Admin
 * @author Kerim Karalic
 */

namespace KKCForm\Admin;


class Shortcodes {

    /**
     * @var array
     */
    private $shortcodePairs = [];

    /**
     * @var string
     */
    private $shortcodeName = "";

    /**
     * Shortcodes constructor.
     */
    public function __construct()
    {
        $this->shortcodePairs = [
            'class' => ''
        ];
        $this->shortcodeName = "kkcf-contact";

        add_shortcode( $this->shortcodeName, [&$this, 'addShortcode'] );
    }

    /**
     * @param $atts
     * @return string
     */
    public function addShortcode( $atts ) {

        $a = shortcode_atts(
            $this->shortcodePairs,
            $atts,
            $this->shortcodeName
        );

        ob_start();
        $this->outputShortcodeContent( $a );
        return ob_get_clean();
    }

    /**
     * @param array $contentArray
     * @return string
     */
    public function outputShortcodeContent( $contentArray ) {
        if ( $contentArray ) {
            echo "<div>I'm a div with a class ".$contentArray['class']." in kkcf-contact shortcode</div>";
            // TODO: Array with input fields and their settings to output the form html
        }
    }

}