<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Validate/Rules/ForceFalse.php
 */
namespace JaegerApp\Validate\Rules;

use JaegerApp\Validate\AbstractRule;

if (! class_exists('\\JaegerApp\\Validate\\Rules\\ForceFalse')) {

    /**
     * Jaeger - Force False Rule
     *
     * Will always throw a false error
     *
     * @package Validate\Rules
     * @author Eric Lamb <eric@mithra62.com>
     */
    class ForceFalse extends AbstractRule
    {

        /**
         * The Rule shortname
         * 
         * @var unknown
         */
        protected $name = 'false';

        /**
         * the error template
         * 
         * @var string
         */
        protected $error_message = '{field} has an error';

        /**
         * (non-PHPdoc)
         * 
         * @see \mithra62\Validate\RuleInterface::validate()
         * @ignore
         *
         */
        public function validate($field, $input, array $params = array())
        {
            return false;
        }
    }
}