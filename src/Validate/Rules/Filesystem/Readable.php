<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Validate/Filesystem/Readable.php
 */
namespace JaegerApp\Validate\Rules\Filesystem;

use JaegerApp\Validate\AbstractRule;

if (! class_exists('\\JaegerApp\\Validate\\Filesystem\\Readable')) {

    /**
     * Jaeger - Readable Validation Rule
     *
     * Validates that a given input is a readable file or directory
     *
     * @package Validate\Rules\Filesystem
     * @author Eric Lamb <eric@mithra62.com>
     */
    class Readable extends AbstractRule
    {

        /**
         *
         * @ignore
         *
         * @var unknown
         */
        protected $name = 'readable';

        /**
         *
         * @ignore
         *
         * @var unknown
         */
        protected $error_message = '{field} has to be readable';

        /**
         * (non-PHPdoc)
         * 
         * @see \mithra62\Validate\RuleInterface::validate()
         * @ignore
         *
         */
        public function validate($field, $input, array $params = array())
        {
            if ($input instanceof \SplFileInfo) {
                return $input->isReadable();
            }
            
            return (is_string($input) && is_readable($input));
        }
    }
}