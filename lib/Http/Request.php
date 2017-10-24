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
    private $fieldNamePrefix = '';
    private $postArray = [];
    private $serializedArray = [];

    function __construct()
    {
        $this->fieldNamePrefix = 'kkwpcf';
        $this->serializedArray = [
            'name' => [],
            'email' => [],
            'subject' => [],
            'message' => []
        ];
        if ( $_POST ) {
            $this->postArray = $_POST;
        }

        $this->actionHooks();
    }

    private function actionHooks() {
        add_action( 'admin_post_kkcf_form_fields_save', [&$this, 'executeForm'] );
    }

    public function executeForm() {
        if ( $this->postArray ) {
            $this->validateFields( $this->postArray );
        }
    }

    /**
     * Validates the passed fields
     * @param array $fields
     */
    public function validateFields(array $fields){

        check_admin_referer( 'kkcf_form_fields_validate', 'kkcf_form_fields_refferer' );

        if ( $fields ) {
            echo "<pre>";
            var_dump( $fields );
            echo "</pre>";

            $this->serializeArray( $fields );

            if ( $this->serializedArray ) {
                echo "<pre>";
                foreach ( $this->serializedArray as $formFieldArray => $formFields ) {
                    $formFieldArray = (string)$formFieldArray;
                    // TODO: Validate fields
                    switch ( $formFieldArray ) {
                        case "name": {
                            break;
                        }
                        case "email": {
                            break;
                        }
                        case "subject": {
                            break;
                        }
                        case "message": {
                            break;
                        }
                        default: {}
                    }
                }
                echo "</pre>";
            }
        }
    }

    /**
     * Serializes the fields array
     * Takes one argument, array
     * Serializes the array in the way it filters the fields by form field
     * @param array $array
     * @return bool
     */
    private function serializeArray(array $array) {
        if ( $array ) {
            foreach ( $array as $key => $value ) {
                if ( $key ) {
                    $parsedKey = explode( "_", $key );
                    if ( $parsedKey[0] === $this->fieldNamePrefix ) {
                        if ( $parsedKey[2] ) {
                            $parsedKey[2] = (string)$parsedKey[2];
                            switch ( $parsedKey[2] ) {
                                case "name": {
                                    $keyName = $this->fieldNamePrefix."_".$parsedKey[1]."_".$parsedKey[2];
                                    $this->serializedArray['name'][$keyName] = $value;
                                    break;
                                }
                                case "email": {
                                    $keyName = $this->fieldNamePrefix."_".$parsedKey[1]."_".$parsedKey[2];
                                    $this->serializedArray['email'][$keyName] = $value;
                                    break;
                                }
                                case "subject": {
                                    $keyName = $this->fieldNamePrefix."_".$parsedKey[1]."_".$parsedKey[2];
                                    $this->serializedArray['subject'][$keyName] = $value;
                                    break;
                                }
                                case "message": {
                                    $keyName = $this->fieldNamePrefix."_".$parsedKey[1]."_".$parsedKey[2];
                                    $this->serializedArray['message'][$keyName] = $value;
                                    break;
                                }
                                default: {}
                            }
                        }
                    }
                }
            }
        }
        return true;
    }
}