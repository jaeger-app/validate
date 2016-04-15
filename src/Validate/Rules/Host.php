<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Validate/Rules/Host.php
 */
namespace JaegerApp\Validate\Rules;

use JaegerApp\Validate\AbstractRule;

if (! class_exists('\\JaegerApp\\Validate\\Rules\\Host')) {

    /**
     * Jaeger - Host Rule
     *
     * Checks an input to see if it's a valid host in either IP or URL formats
     *
     * @package Validate\Rules
     * @author Eric Lamb <eric@mithra62.com>
     */
    class Host extends AbstractRule
    {

        /**
         * The Rule shortname
         * 
         * @var unknown
         */
        protected $name = 'host';

        /**
         * the error template
         * 
         * @var string
         */
        protected $error_message = '{field} isn\'t a valid host (IP or hostname)';

        /**
         * (non-PHPdoc)
         * 
         * @see \JaegerApp\Validate\RuleInterface::validate()
         * @ignore
         *
         */
        public function validate($field, $input, array $params = array())
        {
            if (filter_var($input, \FILTER_VALIDATE_IP) === false && filter_var($input, \FILTER_VALIDATE_URL) === false) {
                return false;
            }
            
            return true;
        }
    }
}