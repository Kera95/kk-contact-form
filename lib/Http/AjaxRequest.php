<?php
/**
 * Class AjaxRequest
 * @package KKCForm\Http
 * @author Kerim Karalic
 */

namespace KKCForm\Http;

use KKCForm\Admin\Options;
use KKCForm\Http\RequestInterface;


class AjaxRequest implements RequestInterface
{
    public function __construct()
    {
        $this->actionHooks();
    }

    private function actionHooks()
    {
        add_action('wp_ajax_kkwpcf_save_element_order', [&$this, 'executeForm']);
    }

    public function executeForm()
    {
        $sortOrderArray = [];
        if ( $_POST ) {

            if ( isset( $_POST['data'] ) && !empty( $_POST['data'] ) ) {
                if ( is_array( $_POST['data'] ) ) {
                    $sortOrderArray = $_POST['data'];
                    if ( Options::setOption( "kkwpcf_fields_sort_order", $sortOrderArray, true ) ) {
                        return true;
                    }
                }
            }

        }
    }

    public function validateFields(array $fields)
    {
        // TODO: Implement validateFields() method.
    }
}