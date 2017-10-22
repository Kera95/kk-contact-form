<?php
/**
 * Class Request
 * @package KKCForm\Http
 * @author Kerim Karalic
 */

namespace KKCForm\Http;

use KKCForm\Admin\Options;
use KKCForm\Http\RequestInterface;

class Request implements RequestInterface
{
    private $postArray = [];

    function __construct()
    {
        if ( $_POST ) {
            $this->postArray = $_POST;
        }

        $this->actionHooks();
    }

    private function actionHooks() {
        add_action( 'admin_post_kkcf_form_fields_save', [&$this, 'executeForm'] );
    }

    public function executeForm() {
        // TODO: Execute the form and update options with form field settings (For frontend)
        if ( $this->postArray ) {
            $this->validateFields( $this->postArray );
        }
    }

    public function validateFields(array $fields)
    {
        // TODO: Implement validateFields() method.

    }
}