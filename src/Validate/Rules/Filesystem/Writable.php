<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Validate/Filesystem/Writable.php
 */
namespace JaegerApp\Validate\Rules\Filesystem;

use JaegerApp\Validate\AbstractRule;

if (! class_exists('\\JaegerApp\\Validate\\Filesystem\\Writable')) {

    /**
     * Jaeger - Writable Validation Rule
     *
     * Validates that a given input is a writable file or directory
     *
     * @package Validate\Rules\Filesystem
     * @author Eric Lamb <eric@mithra62.com>
     */
    class Writable extends AbstractRule
    {

        /**
         * The Rule shortname
         * 
         * @var string
         */
        protected $name = 'writable';

        /**
         * The error template
         * 
         * @var string
         */
        protected $error_message = '{field} has to be writable';

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
                return $input->isWritable();
            }
            
            return (is_string($input) && is_writable($input));
        }
    }
}