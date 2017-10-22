<?php
/**
 * Interface RequestInterface
 * @author Kerim Karalic
 * @package KKCForm\Http
 */

namespace KKCForm\Http;

interface RequestInterface
{
    function validateFields(array $fields);

    function executeForm();
}